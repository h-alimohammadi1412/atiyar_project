<?php

namespace App\Http\Livewire\Home\Order;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Address;
use App\Models\BankPayment;
use App\Models\Cart;
use App\Models\Discount;
use App\Models\Gift;
use App\Models\Order;
use App\Models\Payment as ModelsPayment;
use App\Models\ReturnOrder;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Payment extends AdminControllerLivewire
{
    public $discount_price = null;
    public $discount_type = null;
    public $dTotalPercent = null;
    public $gift_code_price = null;
    public $gift_code_remaining = null;
    public $sumPrice;
    public $payment;


    public Discount $discount;
    public Gift $gift;

    public function mount()
    {
        $this->discount = new Discount();
        $this->gift = new Gift();
    }

    protected $rules = [
        'discount.code' => 'nullable',
        'gift.code' => 'nullable',
    ];

    public function updated($code)
    {
        $this->validateOnly($code);
    }

    public function checkDiscountCode()
    {
        $this->validate();
        $cal_price_discount = $this->payment->order->total_discount_price;
        if($this->gift_code_remaining != null){
            $this->helperAlert('warning', ' مبلغ پرداختی شما صفر است.');
            return;
        }
        if ($this->discount->code != null) {
            $code_discount = Discount::where(['code' => $this->discount->code, 'status' => 0])->first();
            if ($code_discount) {
                if ($code_discount->type == 0) {
                    $this->discount_price = $code_discount;
                } elseif ($code_discount->type == 1) {
                    $this->discount_price = $code_discount;
                    $dPercent = ($cal_price_discount * $this->discount_price->percent) / 100;
                    $this->dTotalPercent = $cal_price_discount - $dPercent;
                    $this->discount->code = null;
                }
                // dd($this->discount_price);
                $this->helperAlert('success', ' کد تخفیف وارد شده اعمال شد.');
            } else {
                $this->helperAlert('warning', 'کد تخفیف وارد شده وجود ندارد.');
            }
        } else {
            $this->helperAlert('warning', 'کد تخفیف وارد نشده است.');
        }
    }
    public function checkGiftCode()
    {
        $this->validate();
        if ($this->gift->code != null) {

            $gift_code = Gift::where('code', $this->gift->code)->first();
            if ($gift_code) {

                $cal_price_discount = $this->payment->order->total_discount_price;
                if ($this->discount_price != null) {
                    $cal_price_discount = $this->payment->order->total_discount_price - $this->discount_price->price;
                }
                if ($gift_code->type == 0) {
                    if ($gift_code->value_price < $cal_price_discount) {
                        $this->gift_code_price = $gift_code;
                    } else {
                        $gift_code->value_price = ABS($cal_price_discount - $gift_code->value_price);
                        $this->gift_code_price = $gift_code;
                        $this->gift_code_remaining = $cal_price_discount;
                    }
                    $this->gift->code = null;
                    $this->helperAlert('success', ' کارت هدیه شما با موفقیت  ثبت شد.');
                } elseif ($gift_code->type == 1) {
                    $this->helperAlert('warning', ' کد هدیه شما استفاده شده است.');
                }
            } else {
                $this->helperAlert('warning', 'کد کارت هدیه شما موجود نیست.');
            }
        } else {
            $this->helperAlert('warning', 'کد کارت هدیه وارد نشده است.');
        }
    }

    public function paymentTypeInternet($order_number)
    {
        $payments = \App\Models\Payment::where('order_number', $order_number)->get();
        foreach ($payments as $payment) {
            $payment->update([
                'type_payment' => 1
            ]);
        }
    }

    public function paymentTypeManual($order_number)
    {
        $payments = \App\Models\Payment::where('order_number', $order_number)->get();
        foreach ($payments as $payment) {
            $payment->update([
                'type_payment' => 0
            ]);
        }
    }

    public function continuePayment()
    {

        $price = $this->payment->order->total_discount_price;
        $price = $price + $this->payment->shipping_price;
        if ($this->discount_price != null) {
            $price = $price - $this->discount_price->price;
            $this->discount_price->update([
                'status' => 1
            ]);
            $this->payment->discount_code = $this->gift_code_price->code;
            $this->payment->discount_code_price = $this->gift_code_price->price;
            $this->payment->save();
        }

        if ($this->gift_code_price != null) {
            if ($this->gift_code_remaining != null) {

                $value_price = $this->gift_code_price->value_price - $this->gift_code_remaining;
                $this->gift_code_price->user_id = auth()->user()->id;
                $this->gift_code_price->value_price =  $value_price;
                $this->gift_code_price->save();
                
                $this->payment->gift_code = $this->gift_code_price->code;
                $this->payment->gift_code_price = $price;
                $this->payment->save();
                $price = 0;
            } else {

                $price = $price - $this->gift_code_price->value_price;
                $this->gift_code_price->user_id = auth()->user()->id;
                $this->gift_code_price->value_price = 0;
                $this->gift_code_price->type = 1;
                $this->gift_code_price->save();
                
                $this->payment->gift_code = $this->gift_code_price->code;
                $this->payment->gift_code_price = $this->gift_code_price->price;
                $this->payment->save();
            }

        }
        if ($price ==  0) {

            $this->payment->update([
                'status' => 1
            ]);
            $this->payment->order->update([
                'status' => 'paid',
                'transaction_id' => 'no-price',
                'payment' => 1,
            ]);
            return redirect(route('profile.index'));
        }

        BankPayment::create([
            'user_id' => auth()->user()->id,
            'order_number' => $this->payment->order_number,
            'price' => $price,
            'status' => 0,
        ]);
        $this->payment->order->update([
            'status' => 'wait'
        ]);

        // foreach ($orders as $order) {
        //     $returnedPayment = ReturnOrder::create([
        //         'user_id' => auth()->user()->id,
        //         'order_number' => $order->order_number,
        //         'order_id' => $order->id,
        //     ]);
        // }
         $carts = Cart::where('user_id', auth()->user()->id)->where('type', 0)->get();
        foreach ($carts as $cart) {
            $cart->delete();
        }
        return $this->redirect(route('bank.payment', $this->payment->order_number));
    }

    public function render()
    {
        $payment = ModelsPayment::with(['order' => ['orderProducts' => ['product', 'color']], 'discount', 'times'])->where(['user_id' => auth()->user()->id, 'status' => null])->get()->last();
        $this->payment = $payment;
        $this->dispatchBrowserEvent('onContentChanged');
        return view(
            'livewire.home.order.payment',
            compact('payment')
        )
            ->layout('layouts.home1');
    }
}

<?php

namespace App\Http\Livewire\Home\Order;

use App\Models\Address;
use App\Models\BankPayment;
use App\Models\Cart;
use App\Models\Discount;
use App\Models\Gift;
use App\Models\Order;
use App\Models\ReturnOrder;
use Livewire\Component;

class Payment extends Component
{
    public $discount_price;
    public $discount_type;
    public $dTotalPercent;
    public $dgift;
    public $sumPrice;

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

        if ($this->discount->code != null) {
            $code_discount = Discount::where(['code' => $this->discount->code, 'status' => 1])->first();
            if ($code_discount) {
                if ($code_discount->type == 1) {
                    $this->discount_price = $code_discount->price;
                    $this->discount_type = $code_discount->type;
                    $order2 = Order::where('user_id', auth()->user()->id)->get();
                    $order_last = $order2->last();
                    $order_number = $order2->last()->order_number;
                    $orders = Order::where('order_number', $order_number)->get();
                    $payments = \App\Models\Payment::where('order_number', $order_number)->get();
                    foreach ($payments as $payment) {
                        $payment->update([
                            'discount_code' => $code_discount->code,
                            // 'discount_price' => $code_discount->price,
                        ]);
                    }
                    $this->helperAlert('success', 'کد تخفیف وارد شده اعمال شد.');
                } elseif ($code_discount->type == 0) {
                    $this->discount_price = $code_discount->percent;
                    $this->discount_type = 0;
                    $order2 = Order::where('user_id', auth()->user()->id)->get();
                    $order_last = $order2->last();
                    $order_number = $order2->last()->order_number;
                    $orders = Order::where('order_number', $order_number)->get();
                    $payments = \App\Models\Payment::where('order_number', $order_number)->get();
                    foreach ($payments as $payment) {
                        $payment->update([
                            'discount_code' => $code_discount->code,
                            // 'discount_price' => $code_discount->percent,
                        ]);
                    }
                    $dPercent = ($orders->sum('total_discount_price') * $this->discount_price) / 100;

                    $this->dTotalPercent = $orders->sum('total_discount_price') - $dPercent;
                    $this->emit('toast', 'success', ' کد تخفیف وارد شده اعمال شد.');
                } else {
                    $order2 = Order::where('user_id', auth()->user()->id)->get();
                    $order_last = $order2->last();
                    $order_number = $order2->last()->order_number;
                    $orders = Order::where('order_number', $order_number)->get();
                    $this->sumPrice = $orders->sum('total_discount_price');
                }
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
                if ($gift_code->type == 0) {

                    $order2 = Order::where('user_id', auth()->user()->id)->get();
                    $order_last = $order2->last();
                    $order_number = $order2->last()->order_number;
                    $orders = Order::where('order_number', $order_number)->get();
                    $payments = \App\Models\Payment::with('discount')->where('order_number', $order_number)->get();
                    $total_price = $payments[0]->total_price;
                    if ($payments[0]->discount_code) {
                        $total_price = $payments[0]->total_price - $payments[0]->discount->price;
                    }
                    if ($gift_code->value_price < $total_price) {
                        foreach ($payments as $payment) {
                            $payment->update([
                                'gift_code' => $gift_code->code,
                                'gift_code_price' => $gift_code->value_price,
                            ]);
                        }
                        $gift_code->update([
                            'type' => 1,
                            'value_price' => 0,
                        ]);
                    } else {
                        foreach ($payments as $payment) {
                            $payment->update([
                                'gift_code' => $gift_code->code,
                                'gift_code_price' =>  $total_price,
                            ]);
                        }
                        $gift_code->update([
                            'type' => 0,
                            'value_price' => ABS($total_price  - $gift_code->value_price),
                        ]);
                    }

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

    public function continuePayment($order_number)
    {
        $orders = Order::where('order_number', $order_number)->get();
        $payments = \App\Models\Payment::with('discount')->where('order_number', $order_number)->get();

        $price = $payments[0]->total_price;
        if ($payments[0]->discount_code != null) {
            $price = $price - $payments[0]->discount->price;   
        }
        if ($payments[0]->gift_code != null) {
            $price = $price - $payments[0]->gift_code_price;
        }
        // dd($price);
        $bankPayment = BankPayment::create([
            'user_id' => auth()->user()->id,
            'order_number' => $payments[0]->order_number,
            'price' => $price,
            'status' => 0,
        ]);

        // if ($this->dgift != null) {
        //     $gift = Gift::where('code', $this->gift->code)->first();
        //     if ($gift->value_price > $orders->sum('total_discount_price')) {
        //         $gift->update([
        //             'value_price' => $gift->value_price - $orders->sum('total_discount_price')
        //         ]);
        //     } elseif ($gift->value_price < $orders->sum('total_discount_price')) {
        //         $gift->update([
        //             'value_price' => 0
        //         ]);
        //     }
        // }
        // foreach ($orders as $order) {
        //     $order->update([
        //         'status' => 'wait'
        //     ]);
        //     $returnedPayment = ReturnOrder::create([
        //         'user_id' => auth()->user()->id,
        //         'order_number' => $order->order_number,
        //         'order_id' => $order->id,
        //     ]);
        // }
        return $this->redirect(route('bank.payment', $payments[0]->order_number));
    }

    public function render()
    {
        $order2 = Order::where('user_id', auth()->user()->id)->get();
        $order_last = $order2->last();
        $order_number = $order2->last()->order_number;
        $orders = Order::with('product')->where('order_number', $order_number)->get();
        $payments = \App\Models\Payment::with('discount', 'times')->where('order_number', $order_number)->get();
        $addresses = Address::where('user_id', auth()->user()->id)->get();

        // dd($payments);
        return view(
            'livewire.home.order.payment',
            compact('order_number', 'payments', 'orders', 'order_last')
        )
            ->layout('layouts.home1');
    }
}

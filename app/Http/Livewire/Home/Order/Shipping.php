<?php

namespace App\Http\Livewire\Home\Order;

use App\Models\Address;
use App\Models\AddressTime;
use App\Models\Cart;
use App\Models\Order;
use App\Models\ReceiptCenter;
use Illuminate\Support\Facades\Request;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Http\Controllers\AdminControllerLivewire;

class Shipping extends AdminControllerLivewire
{
    use LivewireAlert;
    public \App\Models\Address $address;
    public $address_use;
    public $address_time;
    public $order;
    public $orders;
    public $addresses;
    public $dPrice;
    public $dateId;
    public $show = false;
    public $show_add_address_form = false;
    public $total_price_orders = 0;
    public $total_price_orders_discount = 0;
    public $total_price_discount_orders = 0;
    protected $listeners = ['adtime' => '$refresh'];

    public function mount()
    {
        $this->address = new \App\Models\Address();
        $this->addresses = Address::where(['user_id' => auth()->user()->id])->orderBy('status', 'DESC')->get();
    }
    protected $validationAttributes = [
        'address.code_posti' => 'کد پستی',
        'address.lname' => 'نام خانوادگی',
        'address.bld_num' => 'کد پستی',
        'address.state' => 'استان',
        'address.address' => 'نشانی پستی',
        'address.mobile' => 'موبایل',
        'address.city' => 'شهر',
        'address.name' => 'نام گیرنده',
    ];
    protected $rules = [
        'address.state' => 'required',
        'address.city' => 'required',
        'address.mahale' => 'nullable',
        'address.name' => 'required',
        'address.vahed' => 'nullable',
        'address.code_posti' => 'required',
        'address.lname' => 'required',
        'address.address' => 'required',
        'address.mobile' => 'required',
        'address.bld_num' => 'required',
        'address.status' => 'nullable',

    ];
    public function addressForm()
    {
        $this->validate();
        $status = $this->address->status ?  1 : 0;
        \App\Models\Address::create([
            'user_id' => auth()->user()->id,
            'name' => $this->address->name,
            'vahed' => $this->address->vahed,
            'code_posti' => $this->address->code_posti,
            'lname' => $this->address->lname,
            'address' => $this->address->address,
            'mobile' => $this->address->mobile,
            'bld_num' => $this->address->bld_num,
            'city' => $this->address->city,
            'state' => $this->address->state,
            'mahale' => $this->address->mahale,
            'status' =>  $status,

        ]);

        if ($status == 1) {
            foreach ($this->addresses as $address) {
                $address->status = 0;
                $address->save();
            }
            $this->addresses = Address::where(['user_id' => auth()->user()->id])->orderBy('status', 'DESC')->get();
        }
        $this->address = new \App\Models\Address();
        $this->show_add_address_form = false;
        // return $this->redirect(request()->header('Referer'));
    }
    public function checkout_address($id)
    {
        $address = Address::find($id);
        $this->address_use = $address;
        foreach ($this->orders as $order) {
            $order->update([
                'address_id' => $address->id,
            ]);
        }
    }

    public function deleteAddress($id)
    {
        $address = Address::find($id);
        dd($address);
    }

    public function anbaradd($id)
    {
        $address = ReceiptCenter::find($id);
        foreach ($this->orders as $order) {
            $order->update([
                'anbar_id' => $address->id,
                'type_order' => 1,
            ]);
        }
    }

    public function selectAddress($key)
    {
        foreach ($this->addresses as $address) {
            $address->status = 0;
            $address->save();
        }
        $this->addresses[$key]->status = 1;
        $this->addresses[$key]->save();
        foreach ($this->orders as $order) {
            $order->update([
                'address_id' => $this->addresses[$key]->id,
            ]);
        }
        $this->show = false;
    }
    public function showAddAddressForm()
    {

        $this->show = false;
        $this->show_add_address_form = true;
    }

    public function addToPayment($data, $discount_price)
    {
        // dd($data);
        if ($this->address_time == null) {
            $this->helperAlert('success', 'لطفا زمان ارسال را انتخاب کنید.');
        } else {
            foreach ($this->orders as $order) {
                \App\Models\Payment::create([
                    'user_id' => auth()->user()->id,
                    'order_id' => $order->id,
                    'total_price' => $data + $this->address_time->price,
                    'discount_price' => $discount_price,
                    'time_id' =>  $this->address_time->id,
                    'shipping_price' => $this->address_time->price,
                    'order_number' => $order->order_number,
                ]);
                if ($order->address_id == null) {
                    $address = Address::where('user_id', auth()->user()->id)->first();
                    $order->update([
                        'address_id' => $address->id,
                    ]);
                }
            }
            $carts = Cart::where('user_id', auth()->user()->id)->where('type', 0)->get();
            foreach ($carts as $cart) {
                $cart->delete();
            }
            return $this->redirect(route('order.payment'));
        }
    }

    public function selectAddressTime($id)
    {
        $adsTime = AddressTime::find($id);
        if ($adsTime) {
            $this->address_time = $adsTime;
        }
    }
    public function render()
    {
        $this->total_price_orders = 0;
        $this->total_price_discount_orders = 0;
        $this->total_price_orders_discount = 0;
        $order = Order::with(['product', 'color'])->where('user_id', auth()->user()->id)->get();
        $order_last = $order->last();
        $order_number = $order->last()->order_number;
        $orders = Order::where('order_number', $order_number)->get();

        foreach ($orders as $order) {
            $this->total_price_orders += $order->total_price;
            $this->total_price_orders_discount += $order->total_discount_price;
            $this->total_price_discount_orders += ($order->total_discount_price - $order->total_price);
        }
        $this->orders = $orders;
        $carts = Cart::where('user_id', auth()->user()->id)
            ->where('type', 0)->get();


        // dd($order);
        return view(
            'livewire.home.order.shipping',
            compact('order_last')
        )->layout('layouts.home1');
    }
}

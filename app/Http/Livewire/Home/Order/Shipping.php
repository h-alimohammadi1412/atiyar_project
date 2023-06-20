<?php

namespace App\Http\Livewire\Home\Order;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Address;
use App\Models\AddressTime;
use App\Models\Order;
use App\Models\Payment;
use App\Models\ReceiptCenter;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Shipping extends AdminControllerLivewire
{
    use LivewireAlert;
    public \App\Models\Address $address;
    public $address_use;
    public $address_time;
    public $order;
    public $order_number;
    public $orders;
    public $addresses;
    public $dPrice;
    public $dateId;
    public $show_id = 0;
    public $show = false;
    public $show_add_address_form = false;
    protected $listeners = ['adtime' => '$refresh'];

    public function mount(HttpRequest $request)
    {
        if ($request->has('order_id')) {
            $this->order_number = $request->get('order_id');
        } else {
            abort(404);
        }
        $this->address = new \App\Models\Address();
        $this->addresses = Address::where(['user_id' => auth()->user()->id])->orderBy('status', 'DESC')->get();
        foreach ($this->addresses as $item) {
            if ($item->status == 1) {
                $this->address_use = $item;
            }
        }
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
        $this->address_use = $this->addresses[$key];
        $this->show = false;
    }
    public function showAddAddressForm()
    {

        $this->show = false;
        $this->show_add_address_form = true;
    }

    public function addToPayment($total_price)
    {
        if ($this->address_time == null) {
            $this->helperAlert('success', 'لطفا زمان ارسال را انتخاب کنید.');
            return;
        }
        $payment = Payment::create([
            'user_id' => auth()->user()->id,
            'order_id' => $this->order->id,
            'total_price' => $total_price,
            'discount_price' => ABS($this->order->total_price - $this->order->total_discount_price),
            'time_id' =>  $this->address_time->id,
            'shipping_price' => $this->address_time->price,
            'order_number' => $this->order->order_number,
        ]);
        $this->order->update([
            'address_id' => $this->address_use->id,
        ]);
        
        return $this->redirect(route('order.payment'));
    }

    public function selectAddressTime($id, $key)
    {
        $adsTime = AddressTime::find($id);
        if ($adsTime) {
            $this->address_time = $adsTime;
        }
        $this->show_id = $key;
    }
    public function render()
    {
        $order = Order::with(['orderProducts' => ['product', 'color']])->where('order_number', $this->order_number)->first();
        $this->order = $order;
        $this->dispatchBrowserEvent('onContentChanged');
        return view(
            'livewire.home.order.shipping'
        )->layout('layouts.home1');
    }
}

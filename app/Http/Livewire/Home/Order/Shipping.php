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
    public $address_time =[];
    public $order;
    public $order_number;
    public $orders;
    public $addresses;
    public $dPrice;
    public $dateId;
    public $show_id = [];
    public $show_select_address = false;
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
        $this->show_select_address = false;
    }
    public function showAddAddressForm()
    {

        $this->show_select_address = false;
        $this->show_add_address_form = true;
    }

    public function addToPayment()
    {
        if (sizeof($this->address_time) < sizeof($this->orders)) {
            $this->helperAlert('success', 'لطفا زمان ارسال را انتخاب کنید.');
            return;
        }
        $total_price = 0;
        $total_discount_price = 0;
        $shipping_price = 0;
        foreach($this->orders as $order){
            if(isset($this->address_time[$order->id])){
                $order->time_send = $this->address_time[$order->id]['id'];
                $order->save();
                $shipping_price += $this->address_time[$order->id]['price'];
            }
            $total_price += $order->total_price;
            $total_discount_price += $order->total_discount_price;
        }
        $payment_number = 11111111111;
        $p= Payment::all()->last();
        if($p){
            $payment_number =  $p->payment_number + 1;
        }
        $payment = Payment::create([
            'address_id' => $this->address_use->id,
            'user_id' => auth()->user()->id,
            'total_price' => $total_price,
            'discount_price' =>  $total_discount_price ,
            'order_number' => $this->orders[0]->order_number,
            'payment_number' =>  $payment_number,
            'shipping_price' => $shipping_price,
        ]);
        // dd($payment);
        
        return $this->redirect(route('order.payment'));
    }

    public function selectAddressTime($orderId,$id, $key)
    {
        $adsTime = AddressTime::find($id);
        if ($adsTime) {
            $this->address_time[$orderId] = $adsTime;
        }
        $this->show_id[$orderId] = $key;
    }
    public function render()
    {
        $orders = Order::with(['orderProducts' => ['product', 'color']])->where('order_number', $this->order_number)->get();
        $this->orders = $orders;
        $this->dispatchBrowserEvent('onContentChanged');
        return view(
            'livewire.home.order.shipping'
        )->layout('layouts.home1');
    }
}

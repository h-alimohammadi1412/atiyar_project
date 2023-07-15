<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Payment;

class ShowOrder extends AdminControllerLivewire
{


    public Order $order;
    public Payment $payment;

    public function mount($order_id){
        $this->order  = Order::with(['address','vendor'])->where('id',$order_id)->first();
    }
    public function render()
    {
        // return response();
        $order = $this->order;
        $payment = Payment::where('order_number',$this->order->order_number)->first();
        dd($order);
        return view('livewire.admin.order.show-order',compact('order'));
    }
}

<?php

namespace App\Http\Livewire\Home\Profile\Order;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\AdminControllerLivewire;

class Detail extends AdminControllerLivewire
{
    public $order_number ;
    public function mount(){
        $this->order_number =explode('-',Request::segment(3))[1] ;
    }
    public function render()
    {
        $payment = Payment::with(['order'=>['address','orderProducts'=>['productSeller'=>['color','warranty','product','vendor']]],'times','user','address'])->where(['order_number'=>$this->order_number,'user_id'=>auth()->user()->id])->first();
    
        // $payment_first = Payment::where('order_number', $order_number)->first();
        // $order_first = Order::where('order_number', $order_number)->first();
        return view(
            'livewire.home.profile.order.detail',
            compact(  'payment')
        )
            ->layout('layouts.home1');
    }
}

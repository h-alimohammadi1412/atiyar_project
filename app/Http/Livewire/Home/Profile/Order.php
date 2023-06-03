<?php

namespace App\Http\Livewire\Home\Profile;

use App\Http\Livewire\Home\Order\Payment\BankPayment;
use App\Models\Order as ModelsOrder;
use App\Models\Payment;
use Livewire\Component;

class Order extends Component
{
    public $orders ;

    public function mount(){
        $this->orders = ModelsOrder::where('user_id', auth()->user()->id)->get();
    }
    public function PaymentBank($id)
    {
        $payment = Payment::find($id);
        return $this->redirect('/payment/bank/order-'. $payment->order_number);
    }
    public function render()
    {
        return view('livewire.home.profile.order')->layout('layouts.home1');
    }
}

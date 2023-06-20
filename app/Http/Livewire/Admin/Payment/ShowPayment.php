<?php

namespace App\Http\Livewire\Admin\Payment;

use App\Models\Order;
use App\Models\Payment;
use App\Http\Controllers\AdminControllerLivewire;

class ShowPayment extends AdminControllerLivewire
{
    public Payment $payment;

    public function render()
    {
        $payment = $this->payment;
        return view('livewire.admin.payment.show-payment',compact('payment'));
    }
}

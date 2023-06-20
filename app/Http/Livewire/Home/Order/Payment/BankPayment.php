<?php

namespace App\Http\Livewire\Home\Order\Payment;

use App\Http\Controllers\AdminControllerLivewire;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class BankPayment extends AdminControllerLivewire
{
    public \App\Models\BankPayment $bankPayment;

    public function render()
    {
        $order_number = explode('-', Request::segment(3))[1];
        $bank = \App\Models\BankPayment::where(['order_number' => $order_number, 'user_id' => auth()->user()->id])
            ->get()->last();
        if ($bank) {
            header("refresh:2;url=/payment/bank/pay/order-$order_number");
        } else {
            $this->redirect(route('home.index'));
        }
        return view(
            'livewire.home.order.payment.bank-payment',
            compact('bank')
        )->layout('layouts.home1');
    }
}

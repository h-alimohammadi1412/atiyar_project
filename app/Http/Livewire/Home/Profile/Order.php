<?php

namespace App\Http\Livewire\Home\Profile;

use App\Models\Payment;
use App\Http\Controllers\AdminControllerLivewire;
use DateTime;
use Livewire\WithPagination;

class Order extends AdminControllerLivewire
{
    use WithPagination;
    public $order = 'wait';
    public function ordering($key)
    {
        switch ($key) {
            case 1:
                $this->order = 'wait';
                break;
            case 2:
                $this->order = 'paid';
                break;
            case 3:
                $this->order = 'delivered';
                break;
            case 4:
                $this->order = 'returned';
                break;
            case 5:
                $this->order = 'canceled';
                break;
            default:
                # code...
                break;
        }
        
    }
    public function paymentBank($id)
    {
        $payment = Payment::find($id);
        if ($payment) {
            $date1 = new DateTime(\Illuminate\Support\Carbon::now());
            $date2 = new DateTime($payment->updated_at);
            $diff = $date2->diff($date1);
            $time = $diff->format('%i');
            if ($time > 60) {
                $payment->delete();
                $this->helperAlert('warning', 'محلت پرداخت این سفارش به پایان رسیده است.');
                return;
            }
            return $this->redirect('/payment/bank/order-' . $payment->order_number);
        }
        $this->helperAlert('warning', 'سفارش با این مشخصات وجود ندارد');
    }
    public function render()
    {
            $payments = Payment::with('order.orderProducts')->where(['status' => $this->order, 'user_id' => auth()->user()->id])->paginate(10);
            // dd($payments);
        $this->dispatchBrowserEvent('onContentChanged');
        return view('livewire.home.profile.order', compact('payments'))->layout('layouts.home1');
    }
}

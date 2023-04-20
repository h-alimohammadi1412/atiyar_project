<?php

namespace App\Http\Livewire\Marketer\Orders;

use Livewire\Component;

class Order extends Component
{
    public function render()
    {
        return view('livewire.marketer.orders.order')
            ->layout('layouts.marketer_dashboard');
    }
}

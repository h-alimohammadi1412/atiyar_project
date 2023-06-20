<?php

namespace App\Http\Livewire\Home\Profile\Order;

use App\Http\Controllers\AdminControllerLivewire;

class Paid extends AdminControllerLivewire
{
    public function render()
    {
        return view('livewire.home.profile.order.paid')->layout('layouts.home');
    }
}

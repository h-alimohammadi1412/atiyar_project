<?php

namespace App\Http\Livewire\Home\Profile\Order;

use App\Http\Controllers\AdminControllerLivewire;

class Delivered extends AdminControllerLivewire
{
    public function render()
    {
        return view('livewire.home.profile.order.delivered')->layout('layouts.home');
    }
}

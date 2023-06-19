<?php

namespace App\Http\Livewire\Home\Profile\Order;

use App\Http\Controllers\AdminControllerLivewire;

class Returned extends AdminControllerLivewire
{
    public function render()
    {
        return view('livewire.home.profile.order.returned')->layout('layouts.home');
    }
}

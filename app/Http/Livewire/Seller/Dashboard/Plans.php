<?php

namespace App\Http\Livewire\Seller\Dashboard;

use Livewire\Component;

class Plans extends Component
{
    public function render()
    {
        return view('livewire.seller.dashboard.plans')->layout('layouts.home1');
    }
}

<?php

namespace App\Http\Livewire\Seller\Dashboard;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.seller.dashboard.profile')->layout('layouts.home1');
    }
}

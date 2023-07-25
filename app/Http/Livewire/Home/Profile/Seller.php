<?php

namespace App\Http\Livewire\Home\Profile;

use Livewire\Component;

class Seller extends Component
{
    public function render()
    {
        return view('livewire.home.profile.seller')->layout('layouts.home1');
    }
}

<?php

namespace App\Http\Livewire\Home\Profile;

use Livewire\Component;

class Marketer extends Component
{
    public function render()
    {
        return view('livewire.home.profile.marketer')->layout('layouts.home1');
    }
}

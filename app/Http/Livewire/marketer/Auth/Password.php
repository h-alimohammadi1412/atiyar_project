<?php

namespace App\Http\Livewire\Marketer\Auth;

use Livewire\Component;

class Password extends Component
{
    public function render()
    {
        return view('livewire.marketer.auth.password')->layout('layouts.marketer');
    }
}

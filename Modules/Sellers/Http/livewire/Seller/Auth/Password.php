<?php

namespace Modules\Sellers\Http\Livewire\Seller\Auth;

use Livewire\Component;

class Password extends Component
{
    public function render()
    {
        return view('livewire.seller.auth.password')->layout('layouts.seller');
    }
}

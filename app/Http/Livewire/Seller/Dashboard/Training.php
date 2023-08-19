<?php

namespace App\Http\Livewire\Seller\Dashboard;

use App\Models\Seller;
use Livewire\Component;

class Training extends Component
{
    protected Seller $seller;
    public function mount(){
        $this->seller = Seller::where('user_id',auth()->user()->id)->first();
    }
    public function render()
    {
        return view('livewire.seller.dashboard.training')->layout('layouts.home1');
    }
}

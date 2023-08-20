<?php

namespace App\Http\Livewire\Seller\Dashboard;

use App\Models\Seller;
use Livewire\Component;

class Contract extends Component
{
    public Seller $seller;
    public function mount(){
        $this->seller = Seller::with(['user','store'])->where('user_id',auth()->user()->id)->first();
    }
    public function render()
    {
        return view('livewire.seller.dashboard.contract')->layout('layouts.home1');
    }
}

<?php

namespace App\Http\Livewire\Seller\Dashboard;

use App\Models\Seller;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreInformation extends Component
{
    use WithFileUploads;
    public Seller $seller;
    public $img;
    
    public function mount(){
        $this->seller = Seller::where('user_id',auth()->user()->id)->first();
        // dd($this->seller);
    }
    public function render()
    {
        // dd($this->seller);
        return view('livewire.seller.dashboard.store-information')->layout('layouts.home1');
    }
}

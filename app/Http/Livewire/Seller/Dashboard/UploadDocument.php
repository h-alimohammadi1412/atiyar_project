<?php

namespace App\Http\Livewire\Seller\Dashboard;

use Livewire\Component;

class UploadDocument extends Component
{
    public function render()
    {
        return view('livewire.seller.dashboard.upload-document')->layout('layouts.home1');
    }
}

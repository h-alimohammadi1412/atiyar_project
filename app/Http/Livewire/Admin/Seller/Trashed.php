<?php

namespace App\Http\Livewire\Admin\Seller;

use App\Http\Controllers\AdminControllerLivewire;

class Trashed extends AdminControllerLivewire
{
    public function render()
    {
        return view('livewire.admin.seller.trashed');
    }
}

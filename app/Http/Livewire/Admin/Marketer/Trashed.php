<?php

namespace App\Http\Livewire\Admin\Marketer;

use App\Http\Controllers\AdminControllerLivewire;

class Trashed extends AdminControllerLivewire
{
    public function render()
    {
        return view('livewire.admin.marketer.trashed');
    }
}

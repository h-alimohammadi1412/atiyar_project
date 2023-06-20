<?php

namespace App\Http\Livewire\Home\Home\Setting;

use App\Http\Controllers\AdminControllerLivewire;

class Index extends AdminControllerLivewire
{
    public function render()
    {
        return view('livewire.home.home.setting.index');
    }
}

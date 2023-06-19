<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Http\Controllers\AdminControllerLivewire;

class Head extends AdminControllerLivewire
{
    public function render()
    {
        return view('livewire.admin.dashboard.head');
    }
}

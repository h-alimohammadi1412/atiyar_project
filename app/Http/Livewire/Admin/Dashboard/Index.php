<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Notification;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\AdminControllerLivewire;

class Index extends AdminControllerLivewire
{

    public function render()
    {

        return view('livewire.admin.dashboard.index');
    }
}

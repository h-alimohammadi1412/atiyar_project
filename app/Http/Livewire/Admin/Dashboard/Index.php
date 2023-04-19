<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Notification;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {

        return view('livewire.admin.dashboard.index');
    }
}

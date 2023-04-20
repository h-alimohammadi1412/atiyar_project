<?php

namespace App\Http\Livewire\Marketer\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.marketer.dashboard.index')
            ->layout('layouts.marketer_dashboard');
    }
}

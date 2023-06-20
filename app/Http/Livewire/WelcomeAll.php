<?php

namespace App\Http\Livewire;

use App\Http\Controllers\AdminControllerLivewire;

class WelcomeAll extends AdminControllerLivewire
{

    public function render()
    {
        return view('livewire.welcome-all');
    }
}

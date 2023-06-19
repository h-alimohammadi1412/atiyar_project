<?php

namespace Modules\User\Http\Livewire\Home;

use App\Http\Controllers\AdminControllerLivewire;

class Welcome extends AdminControllerLivewire
{
    public function render()
    {
        return view('user::livewire.home.welcome');
    }
}

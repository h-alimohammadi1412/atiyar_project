<?php

namespace App\Http\Livewire\Marketer\Auth;

use App\Http\Controllers\AdminControllerLivewire;


class Login extends AdminControllerLivewire
{
    public function render()
    {
        return view('livewire.marketer.auth.login')
            ->layout('layouts.marketer');
    }
}

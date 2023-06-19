<?php

namespace App\Http\Livewire\Home\Profile;

use App\Http\Controllers\AdminControllerLivewire;

class FavlistShow extends AdminControllerLivewire
{
    public function render()
    {
        return view('livewire.home.profile.favlist-show')
            ->layout('layouts.home');
    }
}

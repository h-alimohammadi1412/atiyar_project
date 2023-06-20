<?php

namespace App\Http\Livewire\Admin\Users;

use App\Http\Controllers\AdminControllerLivewire;

class CreateUser extends AdminControllerLivewire
{
    public function render()
    {
        return view('livewire.admin.users.create-user');
    }
}

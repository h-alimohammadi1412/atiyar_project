<?php

namespace Modules\User\Http\Livewire\Home;

use Modules\User\Entities\User;
use App\Http\Controllers\AdminControllerLivewire;

class RegisterConfirm2 extends AdminControllerLivewire
{
    public User $user;

    public function mount()
    {
        $this->user = new User();
    }


    protected $rules = [
        'user.email_phone' => 'required',
    ];

    public function updated($email_phone)
    {
        $this->validateOnly($email_phone);
    }
    public function render()
    {
        return view('user::livewire.home.registerconfirm2')->layout('user::layouts.login');
    }
}

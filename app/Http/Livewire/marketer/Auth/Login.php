<?php

namespace App\Http\Livewire\Marketer\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Integer;

class Login extends Component
{
    public $password;
    public $email;
    public function loginForm()
    {

        $user = User::where('email',$this->email)->first();

//         if ($this->password == $user->password){
         if (Hash::check($this->password,$user->password)){
            auth()->loginUsingId($user->id);
            $this->redirect('/marketer');
        }

    }

    public function render()
    {
        return view('livewire.marketer.auth.login')
            ->layout('layouts.marketer');
    }
}

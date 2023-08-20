<?php

namespace App\Http\Livewire\Home\User;

use App\Models\Category;
use App\Models\Log;
use App\Models\SMS;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Kavenegar\KavenegarApi;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Register extends Component
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


    public function userForm()
    {
        $this->validate();
        $email = User::where('email', $this->user->email_phone)->first();
        $mobile = User::where('mobile', $this->user->email_phone)->first();

        if ($email) {
            return $this->redirect(route('users.confirm', $email->id));
        } elseif ($mobile) {
            return $this->redirect(route('users.confirm', $mobile->id));
        } else {
            $password = random_int(10000000, 99999999);
            $user = User::create([
                'mobile' => $this->user->email_phone,
                'password' => Hash::make($password),
            ]);
            $secure_code = random_int(10000, 99999);         
            $message= "کد تایید شما: $secure_code";
            $user->active_code = $secure_code;
            $user->save();
            // $message = SMS::message("identity", ['secure_code' => $secure_code]);
            // SMS::send($mobile, $message);
            return $this->redirect(route('users.register.confirm', $user->id));
        }
    }

    public function render()
    {

        return view('livewire.home.user.register')->layout('layouts.login');
    }
}

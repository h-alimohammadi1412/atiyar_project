<?php

namespace App\Http\Livewire\Home\User;

use App\Mail\OrderSubmit;
use App\Models\SMS;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Kavenegar\KavenegarApi;
use Livewire\Component;

class ForgetPassword extends Component
{
    public User $user;
    public SMS $sms;

    public function mount()
    {
        $this->sms = new Sms();
    }


    protected $rules = [
        'sms.email_phone' => 'required',
    ];

    public function updated($email_phone)
    {
        $this->validateOnly($email_phone);
    }


    public function userForm()
    {

        $this->validate();
        $type = 'فراموشی رمز عبور';
        $mobile = User::where('mobile', $this->sms->email_phone)->first();
        $email = User::where('email', $this->sms->email_phone)->first();
        $code = random_int(10000, 99999);
        if ($mobile) {

            $client = new KavenegarApi(env('KAVENEGAR_CLIENT_API'));
            $client->send(env('SENDER_MOBILE'), $this->sms->email_phone,
                "کد تایید شما: $code");

            SMS::create([
                'code' => $code,
                'type' => $type,
                'user_id' => $mobile->id,
            ]);
            return $this->redirect(route('users.password.forgetPhone',$mobile->id));
        }elseif ($email){

            Mail::to($email->email)->send(new \App\Mail\ForgetPassword($code));
            SMS::create([
                'code' => $code,
                'type' => $type,
                'user_id' => $email->id,
            ]);
            return $this->redirect(route('users.password.forgetPhone',$email->id));
        } else {
            $this->emit('toast', 'error', ' شماره موبایل وجود ندارد. به قسمت ایجاد حساب مراجعه فرمایید!');
        }
    }


    public function render()
    {
        $id = Request::segment(4);

        $user = User::find($id);

        return view('livewire.home.user.forget-password', compact('user'))->layout('layouts.login');
    }
}

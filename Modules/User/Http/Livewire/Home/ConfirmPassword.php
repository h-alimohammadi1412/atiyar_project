<?php

namespace Modules\User\Http\Livewire\Home;

use Modules\User\Entities\SMS;
use Modules\User\Entities\User;
use Kavenegar\KavenegarApi;
use App\Http\Controllers\AdminControllerLivewire;

class ConfirmPassword extends AdminControllerLivewire
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

        $type = 'ورود به حساب';
        $mobile = User::where('mobile', $this->sms->email_phone)->first();
        if ($mobile) {
            $code = random_int(10000, 99999);
            $client = new KavenegarApi(env('KAVENEGAR_CLIENT_API'));
            $client->send(env('SENDER_MOBILE'), $this->sms->email_phone,
                "کد تایید شما: $code");

            SMS::create([
                'code' => $code,
                'type' => $type,
                'user_id' => $mobile->id,
            ]);
            return to_route('users.confirm.password.verify',$mobile->id);
        } else {
            alert()->error('شماره موبایل وجود ندارد. به قسمت ایجاد حساب مراجعه فرمایید!', ' شماره موبایل وجود ندارد. به قسمت ایجاد حساب مراجعه فرمایید!');
        }
    }


    public function render()
    {
        return view('user::livewire.home.confirm-password')->layout('user::layouts.login');
    }
}

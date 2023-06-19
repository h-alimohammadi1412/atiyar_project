<?php

namespace Modules\User\Http\Livewire\Home;

use Modules\User\Entities\SMS;
use Modules\User\Entities\User;
use Kavenegar\KavenegarApi;
use App\Http\Controllers\AdminControllerLivewire;

class ForgetPasswordPhone extends AdminControllerLivewire
{
    public User $user;
    public SMS $sms;

    public function mount()
    {
        $user = $this->user;
        $this->sms = new Sms();
    }


    protected $rules = [
        'sms.code' => 'required',
    ];

    public function updated($code)
    {
        $this->validateOnly($code);
    }


    public function userForm()
    {

        $this->validate();

        $sms_code = SMS::where('code', $this->sms->code)->first();

        if ($sms_code) {

            if ($sms_code->user_id == $this->user->id) {

                return to_route('users.password.reset', $this->user->id);
            } else {

                alert()->error('کد وارد شده اشتباه است!', ' کد وارد شده اشتباه است!');

            }

        } else {

            alert()->error(' کد وارد شده اشتباه است!', ' کد وارد شده اشتباه است!');
        }
    }

    public function resendSMS($id)
    {

        $type = 'اسمس دوباره فراموشی رمز حساب';
        $mobile = User::where('id', $id)->first();

        $code = random_int(10000, 99999);
        $client = new KavenegarApi(env('KAVENEGAR_CLIENT_API'));
        $client->send(env('SENDER_MOBILE'), $mobile->mobile,
            "کد تایید شما: $code");
        SMS::create([
            'code' => $code,
            'type' => $type,
            'user_id' => $mobile->id,
        ]);
        alert()->success('کد تایید دوباره ارسال شد!', 'کد تایید دوباره ارسال شد!');
        return $this->redirect(request()->header('Referer'));
    }

    public function render()
    {

        return view('user::livewire.home.forget-password-phone')->layout('user::layouts.login');
    }
}

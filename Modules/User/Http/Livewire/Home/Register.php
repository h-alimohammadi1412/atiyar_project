<?php

namespace Modules\User\Http\Livewire\Home;

use Modules\User\Http\Controllers\AdminControllerLivewire;
use Modules\User\Entities\SMS;
use Modules\User\Entities\User;
use Modules\User\Services\Notification\Notification;

class Register extends AdminControllerLivewire
{

    public $show_send_code_form = false;
    public $active_code = false;
    public $active_code22 = 'sssssssss';
    public $input_active_code;
    public $user_id=0;
    public User $user;

    public function mount()
    {
        $this->user = new User();
    }



    protected $rules = [
        'user.phone' => 'required|max:11|min:11',
    ];
    protected $listeners = ['sendCodeActive'];
    public function updated($phone)
    {
        $this->validateOnly($phone);
    }


    public function userForm()
    {
        $this->validate();
        $user = User::where('mobile', $this->user->phone)->first();
        if ($user) {
            $this->sendActiveCode($user->id);
        } else {
            $this->sendActiveCode();
        }
    }
    public function sendCodeActive()
    {
        return $this->redirect('login-register');
    }
    public function userActiveCode()
    {
        if (strlen($this->input_active_code) == 5) {
            if ($this->input_active_code == $this->active_code) {
                if ($this->user_id == 0) {
                    $user = User::create([
                        'mobile' => $this->user->phone,
                    ]);
                    auth()->loginUsingId($user->id);
                    $this->createLog('User', 'user/profile', 'کاربر جدید', 'افزودن');
                    return $this->redirect(route('users.welcome'));
                } else {
                    auth()->loginUsingId($this->user_id);
                    $this->createLog('User', 'user/profile', 'کاربر جدید', 'ورود');
                    return $this->redirect(route('home.index'));
                }
            } else {
                $this->addError('user.phone', 'کد وارد شده صحیح نیست.');
            }
        } else {
            $this->addError('user.phone', 'کد وارد شده صحیح نیست.');
        }


    }
    public function sendActiveCode($user_id = 0)
    {
        if($user_id != 0){
            $this->user_id = $user_id;
        }
        $this->active_code = random_int(10000, 99999);
        $res = (new Notification)->sendSms($this->user->phone, "کاربر گرامی کد امنیتی شما برای تایید هویت عبارتست از :  $this->active_code .آتی یار");
        $this->show_send_code_form = true;
        $type = 'ایجاد حساب';
        SMS::create([
            'code' => $this->active_code,
            'type' => $type,
            'user_id' => $this->user_id,
        ]);

    }
    public function render()
    {
        return view('user::livewire.home.register')->layout('user::layouts.login1');
    }
}
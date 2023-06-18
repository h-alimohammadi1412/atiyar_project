<?php

namespace Modules\User\Http\Livewire\Home;

use Modules\User\Http\Controllers\AdminControllerLivewire;
use Modules\User\Entities\SMS;
use Modules\User\Entities\User;
use App\Services\Notification\Notification;
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
        'user.mobile' => ['required','numeric' ,'digits:11','regex:/09([0-9]{9})/'],
    ];
    protected $listeners = ['sendCodeActive'];
    public function updated($phone)
    {
        $this->validateOnly($phone);
    }


    public function userForm()
    {
        $this->validate();
        $user = User::where('mobile', $this->user->mobile)->first();
        if ($user) {
            $this->sendActiveCode($user->id);
        } else {
            $this->sendActiveCode();
        }
    }
    public function sendCodeActive()
    {
        return to_route('login-register');
    }
    public function userActiveCode()
    {
        if (strlen($this->input_active_code) == 5) {
            if ($this->input_active_code == $this->active_code) {
                if ($this->user_id == 0) {
                    $user = User::create([
                        'mobile' => $this->user->mobile,
                    ]);
                    auth()->loginUsingId($user->id);
                    $this->createLog('User', 'user/profile', 'کاربر جدید', 'افزودن');
                    return to_route('users.welcome');
                } else {
                    auth()->loginUsingId($this->user_id);
                    $this->createLog('User', 'user/profile', 'کاربر جدید', 'ورود');
                    return to_route('home.index');
                }
            } else {
                $this->addError('user.mobile', 'کد وارد شده صحیح نیست.');
            }
        } else {
            $this->addError('user.mobile', 'کد وارد شده صحیح نیست.');
        }


    }
    public function sendActiveCode($user_id = 0)
    {
        if($user_id != 0){
            $this->user_id = $user_id;
        }
        $this->active_code = random_int(10000, 99999);
        $res = (new Notification)->sendSms([$this->user->mobile], "کاربر گرامی کد امنیتی شما برای تایید هویت عبارتست از :  $this->active_code .آتی یار");
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

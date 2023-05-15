<?php

namespace App\Http\Livewire\Home\User;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\SMS;
use App\Models\User;
use App\Services\Notification\Notification;

class Register extends AdminControllerLivewire
{

    public $show_send_code_form = false;
    public $active_code = false;
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
                    return $this->redirect(route('profile.index'));
                } else {
                    auth()->loginUsingId($this->user_id);
                    $this->createLog('User', 'user/profile', 'کاربر جدید', 'ورود');
                    return $this->redirect(route('profile.index'));
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
            'user_id' => 0,
        ]);
    }
    public function render()
    {
        return view('livewire.home.user.register')->layout('layouts.login1');
    }
}
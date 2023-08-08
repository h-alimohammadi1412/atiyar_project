<?php

namespace App\Http\Livewire\Seller\Auth;

use App\Http\Controllers\AdminControllerLivewire;
use App\Mail\SellerRegister;
use App\Models\Email;
use App\Models\Seller;
use App\Models\SMS;
use App\Models\User;
use App\Services\Notification\Notification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Kavenegar\KavenegarApi;
use Livewire\Component;

class Register extends AdminControllerLivewire
{
    public Seller $seller;
    public $phone = '';
    public $password = '';
    public $confirmPassword = '';
    public $active = 'true';
    public $rule = false;
    public function mount()
    {
        $this->seller = new Seller();
    }

    public function activeAgreement()
    {
        if ($this->rule) {
            $this->active = false;
        } else {
            $this->helperAlert('warning', 'لطفا موافقت خود با قوانین را ثبت کنید.');
        }
    }
    public function activeRules()
    {
        $this->rule = !$this->rule;
    }
    public function resendCode()
    {
        dd('sssss');
        // $this->active = true;
        // $this->active = false;
        $this->emit('countdown');
    }
    protected $rules = [
        'seller.phone' => 'required',
        'seller.password' => 'required',
        // 'seller.confirmPassword' => 'nullable',
    ];

    public function registerSellerForm()
    {
        if ($this->phone == '' || $this->password == '' || $this->confirmPassword == ''){
            $this->addError('تکمیل اطلاعات','لطفا اطلاعات خود را تکمیل نمایید.');
            return;
        }
        if(auth()->check() && auth()->user()->mobile != $this->phone){
            $this->helperAlert('warning', 'کاربری با این شماره تلفن وجود ندارد.');
            return;
        }

        if ($this->rule) {
            $this->active = false;
        } else {
            $this->helperAlert('warning', 'لطفا موافقت خود با قوانین را ثبت کنید.');
        }
        
        $code = random_int(1000, 9999);
        // (new Notification)->sendSms('');
        // $seller = Seller::create([
        //     'email' => $this->seller->email,
        //     'mobile' => $this->seller->phone,
        //     'password' => $this->seller->password,
        // ]);

        // $email = Email::create([
        //     'user_id' => $seller->id,
        //     'user_email' => $seller->email,
        //     'user_mobile' => $seller->mobile,
        //     'title' => 'ثبت نام فروشنده جدید',
        //     'text' => 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.',
        //     'code' => $code,
        // ]);
        // $user = User::create([
        //     'seller' => 1,
        //     'email' => $this->seller->email,
        //     'mobile' => $this->seller->phone,
        //     'password' => Hash::make($this->seller->password),

        // ]);
        // Mail::to($seller->email)->send(new SellerRegister($email));


        // return $this->redirect(route('seller.register.email', $seller->id));
    }

    public function render()
    {
        return view('livewire.seller.auth.register')->layout('layouts.seller');
    }
}

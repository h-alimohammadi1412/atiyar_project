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
use Illuminate\Support\Facades\Auth;
class Register extends AdminControllerLivewire
{
    public Seller $seller;
    public $phone = null;
    public $password = null;
    public $active_code = null;
    public $active_code_input = null;
    public $confirmPassword = null;
    public $active = true;
    public $rule = false;
    public $user_id=0;
    public $seller_id=0;
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

    protected $listeners = ['resendCode1' => 'resendCode'];

    protected $rules = [
        'seller.phone' => 'required',
        'seller.password' => 'required',
        // 'seller.confirmPassword' => 'nullable',
    ];
    public function checkData(){
        if($this->phone == null || $this->password == null ) {
            $this->addError('تکمیل اطلاعات','لطفا اطلاعات خود را تکمیل نمایید.');
            return  false;
        }
        if( strlen($this->password) < 8  ) {
            $this->addError('تکمیل اطلاعات','پسورد وارد شده تایید نشد.');
            return false;
        };
        if($this->password != $this->confirmPassword ) {
            $this->addError('تکمیل اطلاعات','پسوردهای وارد شده باهم مطابقت ندارد.');
            return false;
        };
        return true;
    }
    public function resendCode()
    {
        $this->active_code = random_int(10000, 99999);
        $res = (new Notification)->sendSms([auth()->user()->mobile], "کاربر گرامی کد امنیتی شما برای تایید هویت عبارتست از :  $this->active_code .آتی یار");


    }
    public function registerSellerForm()
    {
        if(!$this->checkData()){
            return ;
        }
        if(auth()->check() && auth()->user()->mobile != $this->phone){
            $this->helperAlert('warning', 'شماره همراه وارد شده با شماره همراه ثبت شده مطابقت ندارد.');
            return;
        }
        if ($this->rule) {
            $this->active = false;
        } else {
            $this->helperAlert('warning', 'لطفا موافقت خود با قوانین را ثبت کنید.');
            return;
        }
        $this->active_code = random_int(10000, 99999);
        $res = (new Notification)->sendSms([auth()->user()->mobile], "کاربر گرامی کد امنیتی شما برای تایید هویت عبارتست از :  $this->active_code .آتی یار");
        // dd('ffff');


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

    public function activeSeller(){
        if($this->active_code != $this->active_code_input){
            $this->helperAlert('warning', 'کد تایید وارد شده صحیح نمی باشد.');
            return;
        }

        $user = User::find(auth()->user()->id);
        $user->seller =1;
        $user->save();
        $seller = Seller::create([
            'user_id' => $user->id,
            'mobile' =>  $user->mobile,
            'password' => $this->password,
        ]);
        $this->helperAlert('success', 'ثبت نام با موفقیت انجام شد.');
        
        return $this->redirect(route('seller.dashboard.profile'));

    }

    public function render()
    {
        return view('livewire.seller.auth.register')->layout('layouts.seller_aty');
    }
}

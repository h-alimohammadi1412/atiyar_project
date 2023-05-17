<?php

namespace Modules\Marketers\Http\Livewire\Marketer\Auth;

use App\Mail\MarketerRegister;
use App\Models\Email;
use App\Models\Marketer;
use App\Models\SMS;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Kavenegar\KavenegarApi;
use Livewire\Component;

class Register extends Component
{
    public Marketer $marketer;

    public function mount()
    {
        $this->marketer = new Marketer();
    }


    protected $rules = [
        'marketer.email' => 'nullable',
        'marketer.phone' => 'nullable',
        'marketer.password' => 'nullable',
    ];

    public function updated($email)
    {
        $this->validateOnly($email);
    }


    public function registerMarketerForm()
    {
        $this->validate();

        $marketer = Marketer::create([
            'email' => $this->marketer->email,
            'mobile' => $this->marketer->phone,
            'password' => $this->marketer->password,
        ]);
        $code = random_int(1000, 9999);

        $email = Email::create([
            'user_id' => $marketer->id,
            'user_email' => $marketer->email,
            'user_mobile' => $marketer->mobile,
            'title' => 'ثبت نام فروشنده جدید',
            'text' => 'فروشنده با ایمیل فوق درخواست ثبت نام جدیدی را دارد.',
            'code' => $code,
        ]);
        $user = User::create([
            'marketer' => 1,
            'email' => $this->marketer->email,
            'mobile' => $this->marketer->phone,
            'password' => Hash::make($this->marketer->password),

        ]);
        Mail::to($marketer->email)->send(new MarketerRegister($email));


        return $this->redirect(route('marketer.register.email', $marketer->id));

    }

    public function render()
    {
        return view('livewire.marketer.auth.register')->layout('layouts.marketer');
    }
}

<?php

namespace Modules\Marketers\Http\Livewire\Marketer\Auth\Register;

use App\Mail\MarketerRegister;
use App\Models\Marketer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Detail extends Component
{
    public Marketer $marketer;

    public $name;
    public $lname;
    public $birth;
    public $gender;
    public $shenasname_code;
    public $national_code;
    public $state;
    public $city;
    public $address;
    public $telephone;
    public $pin_code;
    public $mobile;
    public $brand_name;
    public $bank_shaba;
    public $about;




    public function marketerForm()
    {

       $marketer =  $this->marketer->update([
            'name' =>$this->name,
            'lname' =>$this->lname,
            'birth' =>$this->birth,
            'gender' =>$this->gender,
            'shenasname_code' =>$this->shenasname_code,
            'national_code' =>$this->national_code,
            'state' =>$this->state,
            'city' =>$this->city,
            'address' =>$this->address,
            'telephone' =>$this->telephone,
            'pin_code' =>$this->pin_code,
            'mobile' =>$this->mobile,
            'brand_name' =>$this->brand_name,
            'bank_shaba' =>$this->bank_shaba,
            'about' =>$this->about,
        ]);

       $marketer2 = $this->marketer->id -1 ;
       $code = Marketer::find($marketer2);
        $this->marketer->update([
          'code_marketer' =>$code->code_marketer + 1
       ]);
        $user = User::where('email',$this->marketer->email)->first();
        $user -> update([

            'name' =>$this->name,
            'national_code' =>$this->national_code,
            'birthday' =>$this->birth,

        ]);



        $this->marketer->update([
            'user_id' => $user->id
        ]);


        $email = \App\Models\Email::create([
            'user_id' =>$this->marketer->id,
            'user_email' =>$this->marketer->email,
            'user_mobile' =>$this->marketer->mobile,
            'title' =>'ثبت نام فروشنده جدید',
            'text' =>'فروشنده با ایمیل فوق با موفقیت ثبت نام شد',
            'code' =>'ثبت نام موفق بود',
        ]);

        Mail::to($this->marketer->email)->send(new MarketerRegister($email));
//
        auth()->loginUsingId($this->marketer->user_id);
        return $this->redirect(route('marketer.dashboard.index'));

    }
    public function render()
    {

        $Marketer = $this->marketer;
        return view('livewire.marketer.auth.register.detail',compact('marketer'))
            ->layout('layouts.marketer');
    }
}

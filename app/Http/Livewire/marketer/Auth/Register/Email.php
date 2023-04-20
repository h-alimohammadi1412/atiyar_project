<?php

namespace App\Http\Livewire\Marketer\Auth\Register;

use App\Mail\MarketerRegister;
use App\Models\Marketer;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Email extends Component
{
    public Marketer $marketer;

    public $code;



    public function registerEmailVerify()
    {

      $usr = \App\Models\Email::where('user_email',$this->marketer->email)->where('code',$this->code)->first();

      if ($usr) {

          return $this->redirect(route('marketer.register.detail', $usr->user_id));
      }else {

          $this->emit('toast', 'error', ' کد وارد شده صحیح نمی باشد.');
      }




    }
    public function render()
    {
        $marketer = $this->marketer;
        return view('livewire.marketer.auth.register.email'
        ,compact('marketer'))->layout('layouts.marketer');
    }
}

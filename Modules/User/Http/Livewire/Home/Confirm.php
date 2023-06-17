<?php

namespace Modules\User\Http\Livewire\Home;

use Modules\User\Entities\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Confirm extends Component
{
    public User $user;


    protected $rules = [
        'user.password2' => 'required',
    ];

    public function updated($password2)
    {
        $this->validateOnly($password2);
    }

    public function userForm()
    {
        $user = User::where('id',$this->user->id)->first();
        $this->validate();
        if (Hash::check($this->user->password2, $user->password)) {
            auth()->loginUsingId($user->id);
            $userIp2 = Request::ip();
            $cart2s = \App\Models\Cart::where('ip',$userIp2)->get();
            if ($cart2s) {
                foreach ($cart2s as $cart){
                    $cart->update([
                        'user_id' =>auth()->user()->id,
                    ]);
                }

            }
            return to_route('/');
        } else {
            alert()->error('رمز عبور وارد شده اشتباه است!', ' رمز عبور وارد شده اشتباه است!');
        }

    }


    public function render()
    {

        $user = $this->user;
        return view('user::livewire.home.confirm', compact('user'))->layout('user::layouts.login');
    }
}

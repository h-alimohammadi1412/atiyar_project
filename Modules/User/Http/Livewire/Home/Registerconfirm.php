<?php

namespace Modules\User\Http\Livewire\Home;

use Modules\User\Entities\SMS;
use Modules\User\Entities\User;
use Illuminate\Support\Facades\Request;
use Kavenegar\KavenegarApi;
use App\Http\Controllers\AdminControllerLivewire;
use function GuzzleHttp\Promise\rejection_for;

class Registerconfirm extends AdminControllerLivewire
{
    public User $user;
    public $sms=[];

    public function mount($user)
    {
        $this->sms['code'] = '';
        $this->user = $user;
    }


    protected $rules = [
        'sms.*' => 'required|min:5',
    ];

    public function updated($code)
    {
        $this->validateOnly($code);
    }


    public function userForm()
    {
        $this->validate();

        $sms_code = user::where(['active_code', $this->sms['code'],'id'=>$this->user->id])->first();
        if ($sms_code) {
                auth()->loginUsingId($this->user->id);
                $userIp2 = Request::ip();
                $cart2s = \App\Models\Cart::where('ip', $userIp2)->get();
                if ($cart2s) {
                    foreach ($cart2s as $cart) {
                        $cart->update([
                            'user_id' => auth()->user()->id,
                        ]);
                    }

                }
                return $this->redirect(route('users.welcome'));        
        } else {
            alert()->error('کد وارد شده اشتباه است!', ' کد وارد شده اشتباه است!');
        }
    }

    public function resendSMS($id)
    {

        $user = User::where('id', $id)->first();
        $secure_code = random_int(10000, 99999);
        $message = "کد تایید شما: $secure_code";
        $user->active_code = $secure_code;
        $user->save();
        // SMS::send($mobile, $message);

        $this->emit('toast', 'success', 'کد تایید دوباره ارسال شد!');
        return $this->redirect(request()->header('Referer'));
    }
    public function render()
    {

        return view('user::livewire.home.registerconfirm')->layout('user::layouts.login');
    }
}
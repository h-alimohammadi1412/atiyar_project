<?php

namespace App\Http\Livewire\Seller\Auth;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Seller;
use App\Services\Notification\Notification;
use Modules\User\Entities\SMS;
use Modules\User\Entities\User;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Integer;

class Login extends AdminControllerLivewire
{
    public $password;
    public $show_send_code_form = false;
    public $active_code = false;
    public $active_code_input = false;
    public $active_code22 = 'sssssssss';
    public $input_active_code;
    public $user_id=0;
    public $seller_id=0;
    public Seller $seller;
    public User $user;

    public function mount()
    {
        $this->seller = new Seller();
        $this->user = new User();

    }

    protected $rules = [
        'seller.mobile' => ['required','numeric' ,'digits:11','regex:/09([0-9]{9})/'],

    ];
    protected $listeners = ['sendCodeActive'];
    public function updated($mobile)
    {
        $this->validateOnly($mobile);
    }
    public function registerSellerForm()
    {

        $this->validate();
        $seller = Seller::where('mobile', $this->seller->mobile)->first();
        if ($seller) {
            $this->sendActiveCode($seller->id);
        } else {
            $this->sendActiveCode();
        }

    }
    public function sendCodeActive()
    {
        return to_route('seller.login');
    }
    public function sellerActiveCode()
    {
        if (strlen($this->input_active_code) == 5) {
            if ($this->input_active_code == $this->active_code) {
                if ($this->user_id == 0 && $this->seller_id == 0) {
                    $user = User::create([
                            'mobile' => $this->user->mobile,
                            'seller' => 1,
                    ]);
                    $seller = Seller::create([
                        'mobile' => $this->seller->mobile,
                        'user_id' => $user->id,

                    ]);
                    auth()->loginUsingId($seller->user_id);
                 //   $this->createLog('User', 'user/profile', 'کاربر جدید', 'افزودن');
                    return to_route('seller.dashboard.profile');
                }elseif ($this->seller_id == 0){
                    $seller = Seller::create([
                        'mobile' => $this->seller->mobile,
                        'user_id' =>  $this->user_id,

                    ]);
                    auth()->loginUsingId($seller->user_id);
                    //   $this->createLog('User', 'user/profile', 'کاربر جدید', 'افزودن');
                    return to_route('seller.dashboard.profile');



                } else {
                    auth()->loginUsingId($this->user_id);
                  //  $this->createLog('User', 'user/profile', 'کاربر جدید', 'ورود');
                    return to_route('seller.dashboard.profile');
                }

            } else {
                $this->addError('user.mobile', 'کد وارد شده صحیح نیست.');
            }
        } else {
            $this->addError('user.mobile', 'کد وارد شده صحیح نیست.');
        }
    }
    public function sendActiveCode($user_id = 0,$seller_id = 0)
    {
        if($user_id != 0){
            $this->user_id = $user_id;
        }
        if($seller_id != 0){
            $this->seller->user_id = $seller_id;
        }
        $this->active_code = random_int(10000, 99999);
        $res = (new Notification)->sendSms([$this->seller->mobile], "کاربر گرامی کد امنیتی شما برای تایید هویت عبارتست از :  $this->active_code .آتی یار");
        $this->show_send_code_form = true;
        $type = 'ایجاد حساب';
        SMS::create([
            'code' => $this->active_code,
            'type' => $type,
            'user_id' => $this->user_id,
            'seller_id' => $this->seller_id,
        ]);

    }
    public function render()
    {
        return view('livewire.seller.auth.login')
            ->layout('layouts.seller');
    }
}

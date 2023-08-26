<?php

namespace App\Http\Livewire\Seller\Dashboard;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Seller;
use App\Models\User;
use Livewire\WithFileUploads;

class Profile extends AdminControllerLivewire
{
    use WithFileUploads;

    public $img;
    public Seller $seller;
    public User $user;
    public $rul = [];
    public $birthday;
    public $national_code;
    public $gender;
    public $shenasname_code;
    public $father_name;
    public $bank_shaba;
    public $name;
    public $family;
    public $email;
    public $number_cart;
    public $foreigners;
    public $day = '1';
    public $month = '1';
    public $year = '1402';

    public function mount()
    {
        $this->seller = Seller::where('user_id', auth()->user()->id)->first();
        $this->user =  $this->seller->user;
        $this->gender = $this->seller->gender == 0 ?:  $this->seller->gender;
        $this->setDate();
    }

    private function setDate()
    {
        $date = explode('/', $this->user->birthday);
        $this->day = $date[2];
        $this->month = $date[1];
        $this->year = $date[0];

        $this->national_code = is_null($this->seller->national_code) ? null : $this->seller->national_code;
        $this->shenasname_code = is_null($this->seller->shenasname_code) ? null : $this->seller->shenasname_code;
        $this->father_name = is_null($this->seller->father_name) ? null : $this->seller->father_name;
        $this->bank_shaba = is_null($this->seller->bank_shaba) ? null : $this->seller->bank_shaba;
        $this->number_cart = is_null($this->seller->number_cart) ? null : $this->seller->number_cart;
        $this->name = is_null($this->user->name) ? null : $this->user->name;
        $this->family = is_null($this->user->family) ? null : $this->user->family;
        $this->email = is_null($this->user->email) ? null : $this->user->email;
        $this->foreigners = $this->user->foreigners == 0 ? false : true;
    }
    protected function prepareForValidation($attribute): array
    {
        $attribute['number_cart'] = str_replace('-', '', $this->number_cart);
        return $attribute;
    }
    protected function rules()
    {
        return [
            'national_code' => 'required|min_digits:10|max_digits:10|numeric',
            'gender' => 'required',
            'shenasname_code' => 'required|min_digits:3|max_digits:10|numeric',
            'father_name' => 'required|string',
            'bank_shaba' => 'required|min_digits:24|max_digits:24|numeric',
            'name' => 'required|string|min:3',
            'family' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'number_cart' => 'required|min_digits:16|max_digits:16|numeric',
        ];
    }
    public function personalInformationForm()
    {
        // dd($this->bank_shaba);
        $this->validate();
        $birthday = $this->year . '/' . $this->month . '/' . $this->day;
        $this->seller->national_code = $this->national_code;
        $this->seller->gender = $this->gender;
        $this->seller->shenasname_code = $this->shenasname_code;
        $this->seller->father_name = $this->father_name;
        $this->seller->bank_shaba = $this->bank_shaba;
        $this->seller->number_cart = $this->number_cart;
        $this->user->birthday = $birthday;
        $this->user->name = $this->name;
        $this->user->family = $this->family;
        $this->user->email = $this->email;
        $this->user->foreigners = $this->foreigners ? 1 : 0;
        $this->seller->save();
        $this->user->save();
        $this->helperAlert('success', 'اطلاعات با موفقیت ثبت شد.');
    }

    public function render()
    {
        return view('livewire.seller.dashboard.profile')->layout('layouts.home1');
    }
}

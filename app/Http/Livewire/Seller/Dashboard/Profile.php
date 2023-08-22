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
    public $day='1';
    public $month='1';
    public $year='1402';

    protected function rules()
    {
        $r = [];
        if (is_null($this->national_code)) {
            $r["national_code"] = 'required|min_digits:10|max_digits:10|numeric';
        }
        if (is_null($this->gender) || $this->gender == '' ) {
            $r["gender"] = 'required';
        }
        if (is_null($this->shenasname_code)) {
            $r["shenasname_code"] = 'required|min_digits:3|max_digits:10|numeric';
        }
        if (is_null($this->father_name)) {
            $r["father_name"] = 'required|string';
        }
        if (is_null($this->bank_shaba)) {
            $r["bank_shaba"] = 'required|min_digits:24|max_digits:24|numeric';
        }
        if (is_null($this->user->name)) {
            $r["name"] = 'required|string|min:3';
        }
        if (is_null($this->user->family)) {
            $r["family"] = 'required|string|min:3';
        }
        if (is_null($this->user->email)) {
            $r["email"] = 'required|email|unique:users,email';
        }
        if (is_null($this->number_cart)) {
            $r["number_cart"] = 'required|min_digits:16|max_digits:16|numeric';
        }
        // dd($r);
        return $r;
    }
    public function personalInformationForm()
    {
        $birthday = $this->year .'/'.$this->month .'/'.$this->day;
        $this->validate();
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
        $this->seller->save();
        $this->user->save();
       $this->helperAlert('success','اطلاعات با موفقیت ثبت شد.');
    }
    public function mount()
    {
        $this->seller = Seller::where('user_id', auth()->user()->id)->first();
        // dd($this->seller->user);
        $this->user =  $this->seller->user;
    }
    public function render()
    {
        return view('livewire.seller.dashboard.profile')->layout('layouts.home1');
    }
}

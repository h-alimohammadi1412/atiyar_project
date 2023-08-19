<?php

namespace App\Http\Livewire\Seller\Dashboard;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Seller;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends AdminControllerLivewire
{
    use WithFileUploads;

    public $img;
    public Seller $seller;
    public User $user;
    public $rul = [];

    protected function rules()
    {
        $r = [];
        if (is_null($this->user->birthday)) {
            $r["user.birthday"] = 'required';
        }
        if (is_null($this->user->national_code)) {
            $r["seller.national_code"] = 'required';
        }
        if (is_null($this->seller->gender)) {
            $r["seller.gender"] = 'required';
        }
        if (is_null($this->seller->national_code)) {
            $r["seller.national_code"] = 'required';
        }
        if (is_null($this->seller->shenasname_code)) {
            $r["seller.shenasname_code"] = 'required';
        }
        if (is_null($this->seller->father_name)) {
            $r["seller.father_name"] = 'required';
        }
        if (is_null($this->seller->bank_shaba)) {
            $r["seller.bank_shaba"] = 'required';
        }
        if (is_null($this->user->name)) {
            $r["user.name"] = 'required';
        }
        if (is_null($this->user->family)) {
            $r["user.family"] = 'required';
        }
        if (is_null($this->user->email)) {
            $r["user.email"] = 'required';
        }
        if (is_null($this->seller->number_cart)) {
            $r["seller.number_cart"] = 'required';
        }
        // dd($r);
        return $r;
    }
    public function personalInformationForm()
    {
        $this->validate();
        $this->seller->save();
        $this->user->save();
       $this->helperAlert('success','اطلاعات با موفقیت ثبت شد.');
       $this->redirect(route('seller.dashboard.profile'));
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

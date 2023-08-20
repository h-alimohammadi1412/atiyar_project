<?php

namespace App\Http\Livewire\Seller\Dashboard;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Seller;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreInformation extends AdminControllerLivewire
{
    use WithFileUploads;
    public Seller $seller;
    public $img = null;
    public $state = null;
    public $city = null;
    public $Village = null;
    public $Plaque = null;
    public $address = null;
    public $postal_code = null;
    public $telephone = null;
    public $user_name = null;
    public $merchant_id = null;
    public function mount()
    {
        $this->seller = Seller::with(['user', 'store'])->where('user_id', auth()->user()->id)->first();
        $this->state = $this->seller->store->state;
        $this->city = $this->seller->store->city;
        $this->Village = $this->seller->store->Village;
        $this->Plaque = $this->seller->store->Plaque;
        $this->address = $this->seller->store->address;
        $this->postal_code = $this->seller->store->postal_code;
        $this->telephone = $this->seller->store->telephone;
        $this->user_name = $this->seller->store->user_name;
        $this->merchant_id = $this->seller->store->merchant_id;
    }
    protected function rules()
    {
        $r = [
            'seller.store.guild_number'=>'nullable',
            'seller.store.user_name'=>'nullable',
            'seller.store.neighborhood'=>'nullable',
            'seller.store.call_hours'=>'nullable',
            'seller.store.license'=>'nullable',
            'seller.store.Plaque'=>'nullable',
            'seller.store.call_hours'=>'nullable',
            'seller.aparat'=>'nullable',
            'seller.instagram'=>'nullable',
            'seller.telegram'=>'nullable',
            'state'=>'required',
            'city'=>'required',
            'Village'=>'required',
            'address'=>'required',
            'postal_code'=>'required',
            'telephone'=>'required',
            'user_name'=>'required',
            'merchant_id'=>'required',
        ];
        // dd($r);
        return $r;
    }

    public function storeInformationForm()
    {
        $this->validate();

        if(!is_null($this->img)){
            $this->seller->store->logo =$this->uploadImage('store-logos');
        }
        $this->seller->store->state = $this->state;
        $this->seller->store->city = $this->city;
        $this->seller->store->Village = $this->Village;
        $this->seller->store->address = $this->address;
        $this->seller->store->postal_code = $this->postal_code;
        $this->seller->store->telephone = $this->telephone;
        $this->seller->store->user_name = $this->user_name;
        $this->seller->store->merchant_id = $this->merchant_id;
        $this->seller->store->save();
        $this->seller->save();
        $this->helperAlert('success','اطلاعات با موفقیت ثبت شد.');

    }
    public function render()
    {
        // dd($this->seller);
        return view('livewire.seller.dashboard.store-information')->layout('layouts.home1');
    }
}

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
    public $state = 0;
    public $city = 0;
    public $select_city = [];
    // public $Village = null;
    // public $neighborhood = null; 
    public $Plaque = null;
    public $address = null;
    public $call_hours = null;
    public $aparat = null;
    public $instagram = null;
    public $telegram = null;
    public $postal_code = null;
    public $telephone = null;
    public $user_name = null;
    public $merchant_id = null;
    public $guild_number = null;
    public $license = 0;

    public function mount()
    {
        $this->seller = Seller::with(['user', 'store'])->where('user_id', auth()->user()->id)->first();
        $this->setDate();
    }
    private function setDate()
    {

        $this->state = $this->seller->store->state == 0 ? 0 : $this->seller->store->state;
        $this->city = $this->seller->store->city == 0 ? 0 : $this->seller->store->city;
        $this->select_city = getCity($this->state);
        // dd(is_null($this->seller->instagram) ? null: $this->seller->instagram);
        $this->Plaque = is_null($this->seller->store->Plaque) ? null : $this->seller->store->Plaque;
        $this->address = is_null($this->seller->store->address) ? null : $this->seller->store->address;
        $this->call_hours = is_null($this->seller->store->call_hours) ? null : $this->seller->store->call_hours;
        $this->aparat = is_null($this->seller->aparat) ? null : $this->seller->aparat;
        $this->instagram = is_null($this->seller->instagram) ? null : $this->seller->instagram;
        $this->telegram = is_null($this->seller->telegram) ? null : $this->seller->telegram;
        $this->postal_code = is_null($this->seller->store->postal_code) ?: $this->seller->store->postal_code;
        $this->telephone = is_null($this->seller->store->telephone) ? null : $this->seller->store->telephone;
        $this->user_name = is_null($this->seller->store->user_name) ? null : $this->seller->store->user_name;
        $this->merchant_id = is_null($this->seller->store->merchant_id) ? null : $this->seller->store->merchant_id;
        $this->guild_number = is_null($this->seller->store->guild_number) ? null : $this->seller->store->guild_number;
    }
    protected function prepareForValidation($attribute): array
    {
        $attribute['postal_code'] = str_replace('-', '', $this->postal_code);
        return $attribute;
    }
    protected function rules()
    {
        $r = [
            'state' => 'required',
            'city' => 'required',
            // 'Village'=>'required',
            'address' => 'required|min:50',
            'postal_code' => 'required|numeric|min_digits:10|max_digits:10',
            'telephone' => 'required',
            'user_name' => 'required|max:25',
            'merchant_id' => 'required|min:36|max:36',
            'Plaque' => 'required|numeric',
        ];
        if (is_null($this->seller->store->logo)) {
            $r['img'] = 'required|image|mimes:jpg, jpeg, png, bmp, gif';
        }
        return $r;
    }

    public function selectCity()
    {
        $this->select_city = getCity($this->state);
    }
    public function storeInformationForm()
    {

        $this->validate();
        // dd($this->state, $this->city);
        // dd($this->state,$this->city);
        // dd($this->seller->store);

        if (!is_null($this->img)) {
            $this->seller->store->logo = $this->uploadImage('store-logos');
        }

        $this->seller->store->state = $this->state;
        $this->seller->store->city = $this->city;
        // $this->seller->store->Village = $this->Village;
        $this->seller->store->address = $this->address;
        $this->seller->store->postal_code = $this->postal_code;
        $this->seller->store->telephone = $this->telephone;
        $this->seller->store->user_name = $this->user_name;
        $this->seller->store->merchant_id = $this->merchant_id;
        $this->seller->store->call_hours = $this->call_hours;
        $this->seller->store->license = $this->license;
        $this->seller->store->Plaque = $this->Plaque;
        $this->seller->store->guild_number = $this->guild_number;
        $this->seller->telegram = $this->telegram;
        $this->seller->instagram = $this->instagram;
        $this->seller->aparat = $this->aparat;


        $this->seller->store->save();
        $this->seller->save();
        $this->helperAlert('success', 'اطلاعات با موفقیت ثبت شد.');
    }
    public function render()
    {
        // dd($this->seller);
        return view('livewire.seller.dashboard.store-information')->layout('layouts.home1');
    }
}

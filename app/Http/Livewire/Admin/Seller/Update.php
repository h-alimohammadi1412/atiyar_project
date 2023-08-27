<?php

namespace App\Http\Livewire\Admin\Seller;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Seller;
use Livewire\WithFileUploads;

class Update extends AdminControllerLivewire
{
    use WithFileUploads;
    public Seller $seller;

    public $logo;
    protected $rules = [
        'seller.user_id' => 'nullable',
        'seller.password' => 'nullable',
        'seller.code_seller' => 'nullable|min:1',
        'seller.type_seller' => 'nullable',
        'seller.brand_name' => 'nullable',
        'seller.name' => 'required',
        'seller.lname' => 'nullable',

        'seller.gender' => 'nullable',
        'seller.birth' => 'nullable',
        'seller.national_code' => 'nullable',
        'seller.shenasname_code' => 'nullable',
        'seller.maliat' => 'nullable',
        'seller.logo' => 'nullable',
        'seller.about' => 'nullable',
        'seller.bank_shaba' => 'nullable',
        'seller.bank_account_name' => 'nullable',
        'seller.email' => 'nullable',
        'seller.mobile' => 'nullable',
        'seller.website' => 'nullable',
        'seller.state' => 'nullable',
        'seller.city' => 'nullable',
        'seller.address' => 'nullable',
        'seller.pin_code' => 'nullable',
        'seller.telephone' => 'nullable',
        'seller.location' => 'nullable',
        'seller.learning_status' => 'nullable',
        'seller.wallet' => 'nullable',

        'seller.store_index' => 'nullable',
        'seller.store_logo' => 'nullable',
        'seller.job_name' => 'nullable',
        'seller.birth_location' => 'nullable',
        'seller.telegram_link' => 'nullable',
        'seller.instagram_link' => 'nullable',
        'seller.aparat_link' => 'nullable',
        'seller.call_hours' => 'nullable',
        'seller.shop_address' => 'nullable',
        'seller.plaque' => 'nullable',
        'seller.alley' => 'nullable',
        'seller.city_part' => 'nullable',
        'seller.village' => 'nullable',
        'seller.town' => 'nullable',
        'seller.province' => 'nullable',
        'seller.store_username' => 'nullable',
        'seller.zarinpal_merchant_id' => 'nullable',

    ];
    public function categoryForm()
    {
        $this->validate();
        if ($this->logo){
            $this->seller->logo = $this->uploadImage('seller');
        }

        $this->seller->update($this->validate());
        $this->createLog('فروشنده', 'admin/seller', $this->seller->name, 'آپدیت');
        return redirect(route('seller.index'));

    }
    public function render()
    {
        $seller = $this->seller;
        return view('livewire.admin.seller.update',compact('seller'));
    }
}

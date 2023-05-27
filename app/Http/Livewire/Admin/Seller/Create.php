<?php

namespace App\Http\Livewire\Admin\Seller;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Log;

use App\Models\Seller;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends AdminControllerLivewire
{
    use WithFileUploads;
    public $logo;
    public $subCategory;
    public Seller $seller;

    public function mount()
    {
        $this->seller = new Seller();
    }



    protected $rules = [
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
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }


    public function categoryForm()
    {

        $this->validate();
        if ($this->logo){
            $this->seller->logo = $this->uploadImage('userseller');
        }

        $this->seller->save();
        $this->createLog('فروشنده', 'admin/seller', $this->seller->name, 'ایجاد');
        return redirect(route('seller.index'));
    }

    public function render()
    {
        return view('livewire.admin.seller.create');
    }
}

<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Log;
use App\Models\Product;
use App\Models\Seller;
use App\Models\TitleCategoryIndex;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Address extends  AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    public $img;
    public \App\Models\Address $address;

    public function deleteAddress($id)
    {
        $address = \App\Models\Address::where('id',$id)->first();
        $address->delete();

        alert()->success('آدرس با موفقیت حذف شد.', ' آدرس با موفقیت حذف شد.');
    }


    public function render()
    {
        $addreses = $this->readyToLoad ? \App\Models\Address::where('name', 'LIKE', "%{$this->search}%")->
        orWhere('lname', 'LIKE', "%{$this->search}%")->
        orWhere('address', 'LIKE', "%{$this->search}%")->
        orWhere('state', 'LIKE', "%{$this->search}%")->
        orWhere('city', 'LIKE', "%{$this->search}%")->
        orWhere('code_posti', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];

        return view('livewire.admin.dashboard.address',compact('addreses'));
    }
}

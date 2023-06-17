<?php

namespace App\Http\Livewire\Home\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Address extends Component
{
    public \App\Models\Address $address;
    public $addresses;


    public $dateAddress = [];
    public $AddressId = null;
    public $show = false;
    public $edit = false;

    public function mount()
    {
        $this->address = new \App\Models\Address();
        $this->addresses = \App\Models\Address::where('user_id', auth()->user()->id)->latest()->get();
    }

    public function openModal()
    {
        $this->address = new \App\Models\Address();
        $this->edit = false;
        $this->show = true;
    }
    protected $validationAttributes = [
        'address.code_posti' => 'کد پستی',
        'address.lname' => 'نام خانوادگی',
        'address.bld_num' => 'کد پستی',
        'address.state' => 'استان',
    ];
    protected $rules = [
        'address.state' => 'required',
        'address.city' => 'required',
        'address.mahale' => 'nullable',
        'address.name' => 'required',
        'address.vahed' => 'nullable',
        'address.code_posti' => 'required',
        'address.lname' => 'required',
        'address.address' => 'required',
        'address.mobile' => 'required',
        'address.bld_num' => 'required',

    ];
    public function addressForm()
    {
        $this->validate();
        if (!$this->edit) {
            \App\Models\Address::create([
                'user_id' => auth()->user()->id,
                'name' => $this->address->name,
                'vahed' => $this->address->vahed,
                'code_posti' => $this->address->code_posti,
                'lname' => $this->address->lname,
                'address' => $this->address->address,
                'mobile' => $this->address->mobile,
                'bld_num' => $this->address->bld_num,
                'city' => $this->address->city,
                'state' => $this->address->state,
                'mahale' => $this->address->mahale,
            ]);
            return $this->redirect(request()->header('Referer'));
        } else {
            \App\Models\Address::where('id', $this->AddressId)->update([
                'name' => $this->address->name,
                'vahed' => $this->address->vahed,
                'code_posti' => $this->address->code_posti,
                'lname' => $this->address->lname,
                'address' => $this->address->address,
                'mobile' => $this->address->mobile,
                'bld_num' => $this->address->bld_num,
                'city' => $this->address->city,
                'state' => $this->address->state,
                'mahale' => $this->address->mahale,
            ]);
            $this->edit = false;
            $this->show = false;
            $this->AddressId = null;
            $this->address = new \App\Models\Address();
            $this->addresses = \App\Models\Address::where('user_id', auth()->user()->id)->latest()->get();
            // return $this->redirect(request()->header('Referer'));
        }

    }

    public function deleteAddress($id)
    {
        $address = \App\Models\Address::findOrFail($id);
        $address->delete();
        $this->addresses = \App\Models\Address::where('user_id', auth()->user()->id)->latest()->get();
        alert()->success(' آدرس با موفقیت حذف شد.', ' آدرس با موفقیت حذف شد.');
    }

    public function editForm($address)
    {

        $this->dateAddress = [
            $this->address->user_id = auth()->user()->id,
            $this->address->name = $address['name'],
            $this->address->vahed = $address['vahed'],
            $this->address->code_posti = $address['code_posti'],
            $this->address->lname = $address['lname'],
            $this->address->address = $address['address'],
            $this->address->mobile = $address['mobile'],
            $this->address->bld_num = $address['bld_num'],
            $this->address->city = $address['city'],
            $this->address->state = $address['state'],
            $this->address->mahale = $address['mahale'],
        ];
        $this->AddressId = $address['id'];
        $this->show = true;
        $this->edit = true;
    }

    public function render()
    {
        $address = $this->address;
        return view(
            'livewire.home.profile.address',
            compact('address')
        )->layout('layouts.home1');
    }
}

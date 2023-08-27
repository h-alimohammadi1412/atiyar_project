<?php

namespace App\Http\Livewire\Admin\Marketer;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Log;

use App\Models\Marketer;
use Livewire\WithFileUploads;

class Create extends AdminControllerLivewire
{
    use WithFileUploads;
    public $logo;
    public $subCategory;
    public Marketer $marketer;

    public function mount()
    {
        $this->marketer = new Marketer();
    }



    protected $rules = [
        'marketer.user_id' => 'nullable',
        'marketer.code_marketer' => 'nullable|min:1',
        'marketer.level_marketer' => 'nullable',
        'marketer.type_marketer' => 'nullable',
        'marketer.password' => 'nullable',
        'marketer.email' => 'nullable',
        'marketer.mobile' => 'nullable',
        'marketer.name' => 'required',
        'marketer.lname' => 'nullable',
        'marketer.gender' => 'nullable',
        'marketer.birth' => 'nullable',
        'marketer.birth_location' => 'nullable',
        'marketer.national_code' => 'nullable',
        'marketer.shenasname_code' => 'nullable',
        'marketer.maliat' => 'nullable',
        'marketer.logo' => 'nullable',
        'marketer.about' => 'nullable',
        'marketer.bank_shaba' => 'nullable',
        'marketer.bank_account_name' => 'nullable',
        'marketer.province' => 'nullable',
        'marketer.city' => 'nullable',
        'marketer.town' => 'nullable',
        'marketer.village' => 'nullable',
        'marketer.city_part' => 'nullable',
        'marketer.alley' => 'nullable',
        'marketer.plaque' => 'nullable',
        'marketer.address' => 'nullable',
        'marketer.pin_code' => 'nullable',
        'marketer.telephone' => 'nullable',
        'marketer.location' => 'nullable',
        'marketer.website' => 'nullable',
        'marketer.telegram_link' => 'nullable',
        'marketer.instagram_link' => 'nullable',
        'marketer.aparat_link' => 'nullable',
        'marketer.learning_status' => 'nullable',
        'marketer.wallet' => 'nullable',


    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }


    public function categoryForm()
    {

        $this->validate();
        if ($this->logo){
            $this->marketer->logo = $this->uploadImage('usermarketer');
        }

        $this->marketer->save();
        $this->createLog('بازاریاب', 'admin/marketer', $this->marketer->name, 'ایجاد');
        return redirect(route('marketer.index'));
    }

    public function render()
    {
        return view('livewire.admin.marketer.create');
    }
}

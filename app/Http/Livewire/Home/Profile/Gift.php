<?php

namespace App\Http\Livewire\Home\Profile;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Gift extends AdminControllerLivewire
{
    public \App\Models\Gift $gift;
    public $show = false;
    public function mount()
    {
        $this->gift = new \App\Models\Gift();
    }

    protected $rules = [
        'gift.newcard' => 'required|min:13|max:13',
    ];

    public function updated($newcard)
    {
        $this->validateOnly($newcard);
    }

    protected $validationAttributes = [
        'gift.newcard' => 'سریال کارت هدیه '
    ];
    public function giftForm()
    {

        $this->validate();
        $newcode = \App\Models\Gift::where('code', $this->gift->newcard)->first();
        if ($newcode) {
            $newcode->update([
                'user_id' => auth()->user()->id,
                'type' => 1,
            ]);
            alert()->success(' کد هدیه وارد شده ثبت شد.', ' کد هدیه وارد شده ثبت شد.');
            $this->show = false;
        } else {
            $this->addError('کارت هدیه', ' کد هدیه وارد شده وجود ندارد.');
        }
    }

    public function render()
    {
        $giftCarts = $this->readyToLoad ?
            \App\Models\Gift::where(['user_id' => auth()->user()->id, 'type' => 1])->latest()->get() :
            [];
        return view('livewire.home.profile.gift', compact('giftCarts'))->layout('layouts.home1');
    }
}

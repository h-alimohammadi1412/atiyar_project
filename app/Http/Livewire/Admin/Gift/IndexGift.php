<?php

namespace App\Http\Livewire\Admin\Gift;

use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithPagination;

class IndexGift extends AdminControllerLivewire
{
    use WithPagination;

    protected $listeners = [
        'category.added' => '$refresh'
    ];
    public \App\Models\Gift $gift;

    public function mount()
    {
        $this->gift = new \App\Models\Gift();
    }


    protected $rules = [
        'gift.date_expire' => 'required',
        'gift.price' => 'required',
    ];

    protected $validationAttributes =[
        'gift.date_expire'=>'تاریخ انقضاء'
    ];

    public function updated($code)
    {
        $this->validateOnly($code);
    }


    public function categoryForm()
    {

        $this->validate();
        $code = mt_rand(1000000000000 ,  9999999999999);
        $gift = \App\Models\Gift::query()->create([
            'date_expire' => $this->gift->date_expire,
            'price' => $this->gift->price,
            'value_price' => $this->gift->price,
            'code' => $code,
            'type' => 0,
        ]);


        $this->gift->date_expire = "";
        $this->gift->price = "";
        $this->createLog('کارت هدیه', 'admin/gift',  $gift->code, 'ایجاد');

    }


    public function deleteGift($id)
    {
        $gift = \App\Models\Gift::find($id);
        if ($gift->type == 1) {
            $this->emit('toast', 'success', ' امکان حذف وجود ندارد زیرا کارت هدیه توسط کاربر استفاده شده است!');

        } else {
            $gift->delete();
            $this->createLog('کارت هدیه', 'admin/gift',  $gift->code, 'حذف');
        }

    }


    public function render()
    {

        $gifts = $this->readyToLoad ? \App\Models\Gift::where('code', 'LIKE', "%{$this->search}%")->
        orWhere('price', 'LIKE', "%{$this->search}%")->
        orWhere('value_price', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.gift.index-gift', compact('gifts'));
    }
}

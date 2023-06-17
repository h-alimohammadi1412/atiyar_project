<?php

namespace App\Http\Livewire\Admin\Dashboard\Address;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\AddressTime;
use Livewire\WithPagination;

class Time extends AdminControllerLivewire
{
    use WithPagination;

    protected $listeners = [
        'category.added' => '$refresh'
    ];
    public AddressTime $addressTime;

    public function mount()
    {
        $this->addressTime = new AddressTime();
    }



    protected $rules = [
        'addressTime.day' => 'nullable',
        'addressTime.date' => 'nullable',
        'addressTime.time' => 'nullable',
        'addressTime.price' => 'nullable',
    ];


    public function categoryForm()
    {

        $this->validate();

        AddressTime::query()->create([
            'day' => $this->addressTime->day,
            'time' => $this->addressTime->time,
            'date' => $this->addressTime->date,
            'price' => $this->addressTime->price,
        ]);


        $this->addressTime->day = "";
        $this->addressTime->time = "";
        $this->addressTime->date = "";
        $this->addressTime->price = "";
        alert()->success('زمان ارسال با موفقیت ایجاد شد.', ' زمان ارسال با موفقیت ایجاد شد.');
    }
    public function render()
    {

        $addressTimes = $this->readyToLoad ? AddressTime::where('day', 'LIKE', "%{$this->search}%")->orWhere('id', $this->search)->latest()->paginate(15) : [];
        return view('livewire.admin.dashboard.address.time', compact('addressTimes'));
    }
}

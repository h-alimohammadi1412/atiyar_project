<?php

namespace App\Http\Livewire\Admin\Product\Warranty;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Warranty;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $img;
    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public Warranty $warranty;

    public function mount()
    {
        $this->warranty = new Warranty();
    }



    protected $rules = [
        'warranty.name' => 'required',
        'warranty.status' => 'nullable',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }


    public function categoryForm()
    {
        $this->validate();
         Warranty::query()->create([
            'name' => $this->warranty->name,
            'status' => $this->warranty->status ? 1:0 ,
        ]);
        $this->warranty->name = "";
        $this->warranty->status = false;
        $this->createLog('گارانتی', 'admin/warranty', $this->warranty->name, 'ایجاد');
        $this->emit('toast', 'success', ' گارانتی با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }


    public function render()
    {

        $warranties = $this->readyToLoad ? Warranty::where('name', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.product.warranty.index',compact('warranties'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Dashboard\Address;

use App\Models\Category;
use App\Models\Log;
use App\Models\ReceiptCenter;
use App\Models\SubCategory;
use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Recip extends AdminControllerLivewire
{
    use WithPagination;

    protected $listeners = [
        'category.added' => '$refresh'
    ];
    protected $paginationTheme = 'bootstrap';
    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public ReceiptCenter $receiptCenter;

    public function mount()
    {
        $this->receiptCenter = new ReceiptCenter();
    }



    protected $rules = [
        'receiptCenter.address' => 'required|min:3',
        'receiptCenter.status' => 'nullable',
    ];

    public function updated($address)
    {
        $this->validateOnly($address);
    }


    public function categoryForm()
    {

        $this->validate();

        ReceiptCenter::query()->create([
            'address' => $this->receiptCenter->address,
            'status' => $this->receiptCenter->status ? true:false ,
        ]);


        $this->receiptCenter->address = "";
        $this->receiptCenter->status = false;

        Log::create([
            'user_id' => auth()->user()->id,
            'url' => 'افزودن آدرس' .'-'. $this->receiptCenter->address,
            'actionType' => 'ایجاد'
        ]);
        alert()->success('آدرس با موفقیت ایجاد شد.', ' آدرس با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function deleteCategory($id)
    {
        $receiptCenter = ReceiptCenter::find($id);
        $receiptCenter->delete();
            alert()->success(' آدرس با موفقیت حذف شد.', ' آدرس با موفقیت حذف شد.');

    }


    public function render()
    {

        $receiptCenters = $this->readyToLoad ? ReceiptCenter::where('address', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.dashboard.address.recip',compact('receiptCenters'));
    }
}

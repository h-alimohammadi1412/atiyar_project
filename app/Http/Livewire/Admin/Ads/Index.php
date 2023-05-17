<?php

namespace App\Http\Livewire\Admin\Ads;

use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\AdsCategory;
use App\Models\Product;
use Livewire\Component;
use App\Models\Brand;
use App\Models\Log;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $img;
    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public AdsCategory $ads;

    public function mount()
    {
        $this->ads = new AdsCategory();
    }



    protected $rules = [
        'ads.title' => 'required|min:3',
        'ads.category_id' => 'nullable',
        'ads.status' => 'nullable',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }


    public function categoryForm()
    {
        $this->validate();

        $ads =    AdsCategory::query()->create([
            'title' => $this->ads->title,
            'category_id' => $this->ads->category_id,
            'status' => $this->ads->status ? 1:0 ,
        ]);

        if ($this->img){
            $ads->update([
                'img' => $this->uploadImage('Ads')
            ]);
        }

        $this->ads->title = "";
        $this->ads->category_id = null;
        $this->ads->status = false;
        $this->img = null;
        $this->createLog(' تبلیغات دسته','admin/Ads',$this->ads->title,'ایجاد');
        $this->emit('toast', 'success', ' تبلیغات دسته با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }
    public function updateCategoryDisable($id)
    {
        $brand = AdsCategory::find($id);
        $brand->update([
            'status' => 0
        ]);
        $this->createLog(' وضعیت تبلیغات دسته','admin/Ads',$this->ads->title,'غیرفعال ');
        $this->emit('toast', 'success', 'وضعیت تبلیغات دسته با موفقیت غیرفعال شد.');
    }

    public function updateCategoryEnable($id)
    {
        $brand = AdsCategory::find($id);
        $brand->update([
            'status' => 1
        ]);
        $this->createLog('وضعیت تبلیغات دسته','admin/Ads',$this->ads->title,'فعال ');
        $this->emit('toast', 'success', 'وضعیت تبلیغات دسته با موفقیت فعال شد.');
    }

    public function deleteCategory($id)
    {
        $brand = AdsCategory::find($id);
        $brand->delete();
        $this->createLog(' تبلیغات دسته','admin/Ads',$this->ads->title,'حذف');
        $this->emit('toast', 'success', ' تبلیغات دسته با موفقیت حذف شد.');

    }


    public function render()
    {

        $advertising = $this->readyToLoad ? AdsCategory::where('title', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->latest()->paginate(15) : [];
        return view('livewire.admin.ads.index',compact('advertising'));
    }
}

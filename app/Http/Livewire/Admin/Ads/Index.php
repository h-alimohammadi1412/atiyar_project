<?php

namespace App\Http\Livewire\Admin\Ads;

use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\AdsCategory;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;


    public $img;

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

    }

    public function updateCategoryDisable($id)
    {
        $brand = AdsCategory::find($id);
        $brand->update([
            'status' => 0
        ]);
        $this->createLog(' وضعیت تبلیغات دسته','admin/Ads',$this->ads->title,'غیرفعال ');
    }

    public function updateCategoryEnable($id)
    {
        $brand = AdsCategory::find($id);
        $brand->update([
            'status' => 1
        ]);
        $this->createLog('وضعیت تبلیغات دسته','admin/Ads',$this->ads->title,'فعال ');
    }

    public function deleteCategory($id)
    {
        $brand = AdsCategory::find($id);
        $brand->delete();
        $this->createLog(' تبلیغات دسته','admin/Ads',$this->ads->title,'حذف');

    }


    public function render()
    {

        $advertising = $this->readyToLoad ? AdsCategory::where('title', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->latest()->paginate(15) : [];
        return view('livewire.admin.ads.index',compact('advertising'));
    }
}

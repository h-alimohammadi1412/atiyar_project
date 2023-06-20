<?php

namespace App\Http\Livewire\Admin\Childcategory;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\ChildCategory;
use Livewire\WithFileUploads;
use App\Models\SubCategory;
use Livewire\Component;
use App\Models\Product;
use App\Models\Log;

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

    public ChildCategory $childcategory;

    public function mount()
    {
        $this->childcategory = new ChildCategory();
    }



    protected $rules = [
        'childcategory.title' => 'required|min:3',
        'childcategory.name' => 'required',
        'childcategory.link' => 'required',
        'childcategory.parent' => 'required',
        'childcategory.status' => 'nullable',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }


    public function categoryForm()
    {
        $this->validate();


     $childCategory =    ChildCategory::query()->create([
            'title' => $this->childcategory->title,
            'name' => $this->childcategory->name,
            'link' => $this->childcategory->link,
            'parent' => $this->childcategory->parent,
            'status' => $this->childcategory->status ? 1:0 ,
        ]);

        if ($this->img){
            $childCategory->update([
                'img' => $this->uploadImage('childcategory')
            ]);
        }

        $this->childcategory->title = "";
        $this->childcategory->name = "";
        $this->childcategory->link = "";
        $this->childcategory->parent = null;
        $this->childcategory->status = false;
        $this->img = null;
        $this->createLog(' دسته کودک','admin/childcategory', $this->childcategory->title,'ایجاد');
        alert()->success('دسته کودک با موفقیت ایجاد شد.', ' دسته کودک با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }
    public function updateCategoryDisable($id)
    {
        $category = ChildCategory::find($id);
        $category->update([
            'status' => 0
        ]);
        $this->createLog(' وضعیت دسته کودک','admin/childcategory', $category->title,'غیرفعال');
        alert()->success('وضعیت دسته کودک با موفقیت غیرفعال شد.', 'وضعیت دسته کودک با موفقیت غیرفعال شد.');
    }

    public function updateCategoryEnable($id)
    {
        $category = ChildCategory::find($id);
        $category->update([
            'status' => 1
        ]);
        $this->createLog(' وضعیت دسته کودک','admin/childcategory', $category->title,'فعال');
        alert()->success('وضعیت دسته کودک با موفقیت فعال شد.', 'وضعیت دسته کودک با موفقیت فعال شد.');
    }

    public function deleteCategory($id)
    {
        $category = ChildCategory::find($id);
        $product = Product::where('childcategory_id',$id)->first();
        if ($product == null){
            $category->delete();
            $this->createLog('  دسته کودک','admin/childcategory', $category->title,'حذف');
            alert()->success(' دسته کودک با موفقیت حذف شد.', ' دسته کودک با موفقیت حذف شد.');
        }else
        {
            alert()->success(' ', ' امکان حذف وجود ندارد زیرا این دسته، شامل محصول است!');
        }

    }


    public function render()
    {

        $categories = $this->readyToLoad ? ChildCategory::where('title', 'LIKE', "%{$this->search}%")->
        orWhere('name', 'LIKE', "%{$this->search}%")->
        orWhere('link', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.childcategory.index',compact('categories'));
    }
}

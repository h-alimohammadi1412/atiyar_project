<?php

namespace App\Http\Livewire\Admin\Index\Category;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\CategoryIndex;
use App\Models\Log;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithPagination;

    public CategoryIndex $category;

    public function mount()
    {
        $this->category = new CategoryIndex();
    }


    protected $rules = [
        'category.title_id' => 'required',
        'category.product_id' => 'required',
        'category.category_id' => 'required',
        'category.status' => 'nullable',
    ];

    public function categoryForm()
    {
        $this->validate();

        CategoryIndex::query()->create([
            'title_id' => $this->category->title_id,
            'product_id' => $this->category->product_id,
            'category_id' => $this->category->category_id,
            'status' => $this->category->status ? 1 : 0,
        ]);

        $this->category->product_id = null;
        $this->category->category_id = null;
        $this->category->title_id = null;
        $this->category->status = false;
        $this->createLog('محصول دسته صفحه اصلی', 'admin/index/category', 'نمایش دسته بندی صفحه اصلی', 'ایجاد');
    }

    public function deleteCategory($id)
    {
        $category = CategoryIndex::find($id);
        $category->delete();
        $this->createLog('محصول دسته صفحه اصلی', 'admin/index/category', 'محصول دسته صفحه اصلی', 'حذف');
    }


    public function render()
    {

        $categories = $this->readyToLoad ? CategoryIndex::where('category_id', 'LIKE', "%{$this->search}%")->
        orWhere('product_id', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.index.category.index',compact('categories'));
    }
}

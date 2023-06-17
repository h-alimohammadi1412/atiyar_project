<?php

namespace App\Http\Livewire\Admin\Categorylevel4;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\CategoryLevel4;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Product;
use Livewire\Component;
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

    public CategoryLevel4 $categorylevel4;

    public function mount()
    {
        $this->categorylevel4 = new CategoryLevel4();
    }



    protected $rules = [
        'categorylevel4.title' => 'required|min:3',
        'categorylevel4.name' => 'required',
        'categorylevel4.link' => 'required',
        'categorylevel4.parent' => 'required',
        'categorylevel4.status' => 'nullable',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }


    public function categoryForm()
    {
        $this->validate();


        $categorylevel4 =    CategoryLevel4::query()->create([
            'title' => $this->categorylevel4->title,
            'name' => $this->categorylevel4->name,
            'link' => $this->categorylevel4->link,
            'parent' => $this->categorylevel4->parent,
            'status' => $this->categorylevel4->status ? 1:0 ,
        ]);

        if ($this->img){
            $categorylevel4->update([
                'img' => $this->uploadImage('categorylevel4')
            ]);
        }

        $this->categorylevel4->title = "";
        $this->categorylevel4->name = "";
        $this->categorylevel4->link = "";
        $this->categorylevel4->parent = null;
        $this->categorylevel4->status = false;
        $this->img = null;
        $this->createLog('دسته سطح 4','admin/categorylevel4', $this->categorylevel4->title,'ایجاد');

        alert()->success('دسته سطح 4 با موفقیت ایجاد شد.', ' دسته سطح 4 با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }
    public function updateCategoryDisable($id)
    {
        $category = CategoryLevel4::find($id);
        $category->update([
            'status' => 0
        ]);
        $this->createLog('دسته سطح 4','admin/categorylevel4', $category->title,'غیرفعال');

        alert()->success('وضعیت دسته سطح 4 با موفقیت غیرفعال شد.', 'وضعیت دسته سطح 4 با موفقیت غیرفعال شد.');
    }

    public function updateCategoryEnable($id)
    {
        $category = CategoryLevel4::find($id);
        $category->update([
            'status' => 1
        ]);
        $this->createLog('دسته سطح 4','admin/categorylevel4', $category->title,'فعال');
        alert()->success('وضعیت دسته سطح 4 با موفقیت فعال شد.', 'وضعیت دسته سطح 4 با موفقیت فعال شد.');
    }

    public function deleteCategory($id)
    {
        $category = CategoryLevel4::find($id);
        $product = Product::where('categorylevel4_id',$id)->first();
        if ($product == null){
            $category->delete();
            $this->createLog('دسته سطح 4','admin/categorylevel4', $category->title,'حذف');
            alert()->success(' دسته سطح 4 با موفقیت حذف شد.', ' دسته سطح 4 با موفقیت حذف شد.');
        }else
        {
            alert()->error(' امکان حذف وجود ندارد زیرا این دسته، شامل محصول است!', ' امکان حذف وجود ندارد زیرا این دسته، شامل محصول است!');
        }

    }


    public function render()
    {

//        $categories = $this->readyToLoad ? CategoryLevel4::where('title', 'LIKE', "%{$this->search}%")->
//        orWhere('name', 'LIKE', "%{$this->search}%")->
//        orWhere('link', 'LIKE', "%{$this->search}%")->
//        orWhere('id', $this->search)->
//        latest()->paginate(15) : [];
        return view('livewire.admin.categorylevel4.index'
//            ,compact('categories')
        );
    }
}

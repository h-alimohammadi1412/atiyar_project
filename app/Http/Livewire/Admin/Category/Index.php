<?php

namespace App\Http\Livewire\Admin\Category;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Category;
use App\Models\Log;
use App\Models\SubCategory;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;
    protected $listeners = [
        'category.added' => '$refresh'
    ];
    protected $paginationTheme = 'bootstrap';
    public $img;
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public Category $category;
    public $category_id;


    public function mount()
    {
        $id = request()->get('category_id');
        $id === null ? $this->category_id = 0 : $this->category_id = $id;
        $this->category = new Category();
        $this->category->parent_id = 0;
    }

    protected $rules = [
        'category.title' => 'required|min:3',
        'category.img' => 'nullable',
        'category.en_name' => 'required',
        'category.link' => 'required',
        'category.description' => 'required',
        'category.status' => 'nullable',
        'category.notShow' => 'nullable',
        'category.parent_id' => 'required',

    ];

    public function categoryForm()
    {

        $this->validate();
        $category = Category::create([
            'title' => $this->category->title,
            'img' => $this->category->img,
            'parent_id' => $this->category->parent_id,
            'en_name' => $this->category->en_name,
            'link' => $this->category->link,
            'description' => $this->category->description,
            'status' => $this->category->status ? true : false,
            'notShow' => $this->category->status ? true : false,
        ]);

        if ($this->img) {
            $category->update([
                'img' => $this->uploadImage('category')
            ]);
        }

        $this->category->title = "";
        $this->category->description = "";
        $this->category->en_name = "";
        $this->category->link = "";
        $this->category->status = false;
        $this->img = null;

        $this->createLog('دسته', 'admin/category', $this->category->title, 'ایجاد');
        $this->emit('toast', 'success', ' دسته با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            $this->createLog('دسته', 'admin/category', $category->title, 'حذف');
            $this->emit('toast', 'success', ' دسته با موفقیت حذف شد.');
        } else {
            $this->emit('toast', 'success', ' امکان حذف وجود ندارد زیرا زیردسته دارد!');
        }

    }
    public function render()
    {

        $categories = $this->readyToLoad ? Category::with('getChild.getChild')
            ->where('parent_id', $this->category_id)
            ->where('title', 'LIKE', "%{$this->search}%")
            ->where('en_name', 'LIKE', "%{$this->search}%")
            ->latest()->paginate(15) : [];
        return view('livewire.admin.category.index', compact('categories'));
    }
}
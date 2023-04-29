<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\Log;
use App\Models\SubCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
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
                'img' => $this->uploadImage()
            ]);
        }

        $this->category->title = "";
        $this->category->description = "";
        $this->category->en_name = "";
        $this->category->link = "";
        $this->category->status = false;
        $this->img = null;

        Log::create([
            'user_id' => auth()->user()->id,
            'title' => 'افزودن دسته' . '-' . $this->category->title,
            'url'=> 'admin/category',
            'actionType' => 'ایجاد'
        ]);
        $this->emit('toast', 'success', ' دسته با موفقیت ایجاد شد.');

    }
    public function uploadImage()
    {
        $year = now()->year;
        $month = now()->month;
        $directory = "category/$year/$month";
        $name = $this->img->getClientOriginalName();
        $this->img->storeAs($directory, $name);
        return "$directory/$name";
    }
    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function updateCategoryStatus($id)
    {
        $category = Category::find($id);
        if ($category->status == 0) {
            $category->update(['status' => 1]);
            Log::create([
                'user_id' => auth()->user()->id,
                'title' => 'فعال کردن وضعیت دسته' . '-' . $category->title,
                'url'=> 'admin/category',
                'actionType' => 'فعال'
            ]);
            $this->emit('toast', 'success', 'وضعیت دسته با موفقیت فعال شد.');
        } else {
            $category->update(['status' => 0]);
            Log::create([
                'user_id' => auth()->user()->id,
                'title' => 'غیرفعال کردن وضعیت دسته' . '-' . $category->title,
                'url'=> 'admin/category',
                'actionType' => 'غیرفعال'
            ]);
            $this->emit('toast', 'success', 'وضعیت دسته با موفقیت غیرفعال شد.');
        }

    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $subCategory = SubCategory::where('parent', $id)->first();
        if ($subCategory == null) {
            $category->delete();
            Log::create([
                'user_id' => auth()->user()->id,
                'title' => 'حذف کردن دسته' . '-' . $category->title,
                'url'=> 'admin/category',
                'actionType' => 'حذف'
            ]);
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

        // dd(Category::with('getChild.getChild')->where('title', 'LIKE', "%{$this->search}%")->
        // orWhere('en_name', 'LIKE', "%{$this->search}%")->
        // orWhere('link', 'LIKE', "%{$this->search}%")->
        // orWhere('id', $this->search)->
        // latest()->paginate(15)[9]->getChild[0]->name);
        return view('livewire.admin.category.index', compact('categories'));
    }
}
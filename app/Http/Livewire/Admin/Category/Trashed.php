<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\Log;
use App\Models\Warranty;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Trashed extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $img;
    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function deleteCategory($id)
    {
        $category = Category::withTrashed()->findOrFail($id);
         if ($category->img) {Storage::disk('public')->delete("storage",$category->img);}
        $category->forceDelete();
        Log::create([
            'user_id' => auth()->user()->id,
            'title' => 'حذف کلی دسته' .'-'. $category->title,
            'url'=> 'admin/category',
            'actionType' => 'حذف'
        ]);
        $this->emit('toast', 'success', ' دسته به صورت کامل با موفقیت حذف شد.');
    }
    public function trashedCategory($id)
    {
        $category = Category::withTrashed()->where('id', $id)->first();
        $category->restore();
        Log::create([
            'user_id' => auth()->user()->id,
            'title' => 'بازیابی دسته' .'-'. $category->title,
            'url'=> 'admin/category',
            'actionType' => 'بازیابی'
        ]);
        $this->emit('toast', 'success', ' دسته با موفقیت بازیابی شد.');
    }

    public function render()
    {

        $categories = $this->readyToLoad ? Category::onlyTrashed()->latest()->paginate(15) : [];

        return view('livewire.admin.category.trashed', compact('categories'));
    }
}

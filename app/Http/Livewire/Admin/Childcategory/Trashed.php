<?php

namespace App\Http\Livewire\Admin\Childcategory;

use App\Http\Controllers\AdminControllerLivewire;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\ChildCategory;
use Livewire\WithPagination;
use App\Models\SubCategory;
use App\Models\Category;
use Livewire\Component;
use App\Models\Log;

class Trashed extends AdminControllerLivewire
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
        $category = ChildCategory::withTrashed()->findOrFail($id);
        if ($category->img) {
            Storage::disk('public')->delete("storage", $category->img);
        }$category->forceDelete();
        alert()->success('دسته کودک به صورت کامل با موفقیت حذف شد.', ' دسته کودک به صورت کامل با موفقیت حذف شد.');
    }
    public function trashedCategory($id)
    {
        $category = ChildCategory::withTrashed()->where('id', $id)->first();
        $category->restore();
        $this->createLog(' دسته کودک','admin/childcategory', $category->title,'بازیابی');
        alert()->success('دسته کودک با موفقیت بازیابی شد.', ' دسته کودک با موفقیت بازیابی شد.');
    }

    public function render()
    {

        $categories = $this->readyToLoad ? DB::table('child_categories')
            ->whereNotNull('deleted_at')->
            latest()->paginate(15) : [];

        return view('livewire.admin.childcategory.trashed',compact('categories'));
    }
}

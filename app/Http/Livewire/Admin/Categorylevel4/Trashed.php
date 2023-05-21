<?php

namespace App\Http\Livewire\Admin\Categorylevel4;

use App\Http\Controllers\AdminControllerLivewire;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryLevel4;
use Livewire\WithPagination;
use App\Models\ChildCategory;
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
        $category = CategoryLevel4::withTrashed()->findOrFail($id);
        if ($category->img) {
            Storage::disk('public')->delete("storage", $category->img);
        }$category->forceDelete();
        $this->emit('toast', 'success', ' دسته سطح چهارم به صورت کامل با موفقیت حذف شد.');
    }
    public function trashedCategory($id)
    {
        $category = CategoryLevel4::withTrashed()->where('id', $id)->first();
        $category->restore();
        $this->createLog('دسته سطح چهارم','admin/categorylevel4', $category->title,'بازیابی');
        $this->emit('toast', 'success', ' دسته سطح چهارم با موفقیت بازیابی شد.');
    }

    public function render()
    {

        $categories = $this->readyToLoad ? DB::table('category_level4s')
            ->whereNotNull('deleted_at')->
            latest()->paginate(15) : [];
        return view('livewire.admin.categorylevel4.trashed',compact('categories'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Category;

use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithFileUploads;
use App\Models\Category;
use Livewire\Component;
use App\Models\Log;

class Update extends AdminControllerLivewire
{
    use WithFileUploads;
    public $img;
    public $status = null;
    protected $rules = [
        'category.title' => 'required|min:3',
        'category.img' => 'nullable',
        'category.en_name' => 'required',
        'category.link' => 'required',
        'category.description' => 'nullable',
        'category.status' => 'nullable',
        'category.notShow' => 'nullable',
        'category.parent_id' => 'required',
    ];
    public function categoryForm()
    {

        $this->validate();
        if ($this->img) {
            $this->category->img = $this->uploadImage('category');
        }
        $this->category->update($this->validate());
        if (!$this->category->status) {
            $this->category->update([
                'status' => 0
            ]);
        }
        $this->createLog('دسته', 'admin/category', $this->category->title, 'آپدیت');
        alert()->success('دسته با موفقیت آپدیت شد.', 'دسته آپدیت شد.');
        return redirect(route('category.index'));

    }
    public Category $category;

    public function render()
    {
        if ($this->category->status == 1){
            $this->category->status = true;
        }else
        {
            $this->category->status = false;
        }

       $category = $this->category;
        return view('livewire.admin.category.update',compact('category'));
    }
}

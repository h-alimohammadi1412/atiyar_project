<?php

namespace App\Http\Livewire\Admin\Childcategory;

use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithFileUploads;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Livewire\Component;
use App\Models\Log;

class Update extends AdminControllerLivewire
{
    use WithFileUploads;
    public ChildCategory $childcategory;

    public $img;
    protected $rules = [
        'childcategory.title' => 'required|min:3',
        'childcategory.name' => 'required',
        'childcategory.link' => 'required',
        'childcategory.status' => 'nullable',
        'childcategory.parent' => 'nullable',
    ];
    public function categoryForm()
    {
        $this->validate();
        if ($this->img){
            $this->childcategory->img = $this->uploadImage('childcategory');
        }

        $this->childcategory->update($this->validate());
        if (!$this->childcategory->status) {
            $this->childcategory->update([
                'status' => 0
            ]);
        }
        $this->createLog(' دسته کودک','admin/childcategory',  $this->childcategory->title,'آپدیت');
        alert()->success('دسته کودک با موفقیت ایجاد شد.', 'دسته کودک آپدیت شد.');

        return redirect(route('childcategory.index'));

    }
    public function render()
    {
        if ($this->childcategory->status == 1){
            $this->childcategory->status = true;
        }else
        {
            $this->childcategory->status = false;
        }
        $childcategory = $this->childcategory;
        return view('livewire.admin.childcategory.update',compact('childcategory'));
    }
}

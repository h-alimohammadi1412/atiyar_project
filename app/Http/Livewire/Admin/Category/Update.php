<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public $img;
    public $status = null;
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
        if ($this->img) {
            $this->category->img = $this->uploadImage();
        }
        $this->category->update($this->validate());
        if (!$this->category->status) {
            $this->category->update([
                'status' => 0
            ]);
        }
        Log::create([
            'user_id' => auth()->user()->id,
            'title' => 'آپدیت دسته' .'-'. $this->category->title,
            'url'=> 'admin/category',
            'actionType' => 'آپدیت'
        ]);
        alert()->success('دسته با موفقیت ایجاد شد.', 'دسته آپدیت شد.');
        return redirect(route('category.index'));

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
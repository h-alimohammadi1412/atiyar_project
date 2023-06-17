<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Slider;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;


    public $img;
    public $search;

    protected $queryString = ['search'];

    public Slider $slider;

    public function mount()
    {
        $this->slider = new Slider();
    }


    protected $rules = [
        'slider.title' => 'required',
        'slider.link' => 'required',
        'slider.img' => 'required',
        'slider.status' => 'nullable',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }


    public function categoryForm()
    {
        $this->validate();

        $slider = Slider::query()->create([
            'title' => $this->slider->title,
            'link' => $this->slider->link,
            'status' => $this->slider->status ? true:false ,
        ]);

        if ($this->img) {
            $slider->update([
                'img' => $this->uploadImage('slider')
            ]);
        }

        $this->slider->title = "";
        $this->slider->link = "";
        $this->slider->status = false;
        $this->img = null;
        $this->createLog('اسلایدر', 'admin/slider', $this->slider->title, 'ایجاد');
        alert()->success(' اسلایدر با موفقیت ایجاد شد.', ' اسلایدر با موفقیت ایجاد شد.');

    }

    public function render()
    {

        $sliders = $this->readyToLoad ? Slider::where('title', 'LIKE', "%{$this->search}%")->
        orWhere('link', 'LIKE', "%{$this->search}%")->
        latest()->paginate(15) : [];
        return view('livewire.admin.slider.index', compact('sliders'));
    }
}

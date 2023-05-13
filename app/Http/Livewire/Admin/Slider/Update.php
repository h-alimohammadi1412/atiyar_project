<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Slider;
use Livewire\WithFileUploads;

class Update extends AdminControllerLivewire
{
    use WithFileUploads;
    public Slider $slider;

    public $img;
    protected $rules = [
        'slider.title' => 'required',
        'slider.link' => 'required',
        'slider.img' => 'required',
        'slider.status' => 'nullable',
    ];
    public function categoryForm()
    {
        $this->validate();
        if ($this->img){
            $this->slider->img = $this->uploadImage('slider');
        }

        $this->slider->update($this->validate());
        $this->createLog('اسلایدر', 'admin/slider', $this->slider->title, 'آپدیت');
        return redirect(route('slider.index'));

    }


    public function render()
    {
        if ($this->slider->status == 1){
            $this->slider->status = true;
        }else
        {
            $this->slider->status = false;
        }

        $slider = $this->slider;
        return view('livewire.admin.slider.update',compact('slider'));
    }
}

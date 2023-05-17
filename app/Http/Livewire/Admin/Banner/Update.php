<?php

namespace App\Http\Livewire\Admin\Banner;

use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Banner;
use App\Models\Page;
use App\Models\Log;

class Update extends AdminControllerLivewire
{
    use WithFileUploads;
    public Banner $banner;

    public $img;
    protected $rules = [
        'banner.title' => 'required',
        'banner.link' => 'required',
    ];
    public function categoryForm()
    {
        $this->validate();
        if ($this->img){
            $this->banner->img = $this->uploadImage('banner');
        }

        $this->banner->update($this->validate());
        $this->createLog('بنر ','admin/banner',$this->banner->title,'آپدیت');

        alert()->success(' با موفقیت آپدیت شد.', 'بنر مورد نظر با موفقیت آپدیت شد.');
        return redirect(route('banner.index'));

    }

    public function render()
    {
        $banner = $this->banner;
        return view('livewire.admin.banner.update',compact('banner'));
    }
}

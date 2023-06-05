<?php

namespace App\Http\Livewire\Admin\Banner;

use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Banner;
use App\Models\Log;
use App\Models\Page;

use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    public $img;
    public Banner $banner;

    public function mount()
    {
        $this->banner = new Banner();
    }


    protected $rules = [
        'banner.title' => 'required',
        'banner.link' => 'required',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }


    public function categoryForm()
    {
        $this->validate();

        $banner = Banner::query()->create([
            'title' => $this->banner->title,
            'link' => $this->banner->link,
        ]);

        if ($this->img) {
            $banner->update([
                'img' => $this->uploadImage('banner')
            ]);
        }

        $this->banner->title = "";
        $this->banner->link = "";
        $this->img = null;
        $this->createLog('بنر','admin/banner',$this->banner->title,'ایجاد');
    }

    public function render()
    {

        $banners = $this->readyToLoad ? Banner::where('title', 'LIKE', "%{$this->search}%")->
        orWhere('link', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.banner.index', compact('banners'));
    }
}

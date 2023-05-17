<?php

namespace App\Http\Livewire\Admin\Banner;

use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Banner;
use App\Models\Log;

class ProfileBannerUpdate extends AdminControllerLivewire
{
    use WithFileUploads;
    public \App\Models\ProfileBanner $banner;

    public $img;
    protected $rules = [
        'banner.title' => 'required',
        'banner.link' => 'required',
        'banner.discount' => 'nullable',
        'banner.name' => 'nullable',
    ];
    public function categoryForm()
    {
        $this->validate();
        if ($this->img){
            $this->banner->img = $this->uploadImage('profileBanner');
        }

        $this->banner->update($this->validate());
        $this->createLog('  بنر پروفایل ','admin/banner',$this->banner->title,'آپدیت');
        alert()->success(' با موفقیت آپدیت شد.', 'بنر پروفایل مورد نظر با موفقیت آپدیت شد.');
        return redirect(route('profileBanner.index'));

    }

    public function render()
    {
        $banner = $this->banner;
        return view('livewire.admin.banner.profile-banner-update',compact('banner'));
    }
}

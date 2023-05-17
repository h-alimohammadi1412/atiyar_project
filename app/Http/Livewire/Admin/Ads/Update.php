<?php

namespace App\Http\Livewire\Admin\Ads;

use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithFileUploads;
use App\Models\AdsCategory;
use Livewire\Component;
use App\Models\Log;



class Update extends AdminControllerLivewire
{
    use WithFileUploads;
    public AdsCategory $ads;

    public $img;
    protected $rules = [
        'ads.title' => 'required|min:3',
        'ads.category_id' => 'nullable',
        'ads.status' => 'nullable',
    ];
    public function categoryForm()
    {
        $this->validate();
        if ($this->img){
            $this->ads->img = $this->uploadImage('Ads');
        }

        $this->ads->update($this->validate());
        if (!$this->ads->status) {
            $this->ads->update([
                'status' => 0
            ]);
        }
        $this->createLog(' تبلیغات دسته','admin/Ads',$this->ads->title,'آپدیت');
        alert()->success(' با موفقیت آپدیت شد.', 'تبلیغات دسته مورد نظر با موفقیت آپدیت شد.');
        return redirect(route('ads.index'));

    }
    public function render()
    {
        if ($this->ads->status == 1){
            $this->ads->status = true;
        }else
        {
            $this->ads->status = false;
        }
        $ads = $this->ads;
        return view('livewire.admin.ads.update',compact('ads'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Brand;
use App\Models\Log;
use Livewire\WithFileUploads;

class Update extends AdminControllerLivewire
{
    use WithFileUploads;
    public Brand $brand;

    public $img;
    protected $rules = [
        'brand.description' => 'required|min:3',
        'brand.name' => 'required',
        'brand.link' => 'required',
        'brand.parent' => 'required',
        'brand.vip' => 'nullable',
        'brand.status' => 'nullable',
    ];
    public function categoryForm()
    {
        $this->validate();
        if ($this->img){
            $this->brand->img = $this->uploadImage('brand');
        }

        $this->brand->update($this->validate());
        if (!$this->brand->status) {
            $this->brand->update([
                'status' => 0
            ]);
        }
        if (!$this->brand->vip) {
            $this->brand->update([
                'vip' => 0
            ]);
        }
        $this->createLog('برند','admin/brand',$this->brand->title,'آپدیت');
        alert()->success(' با موفقیت آپدیت شد.', 'برند مورد نظر با موفقیت آپدیت شد.');
        return redirect(route('brand.index'));

    }
 


    public function render()
    {
        if ($this->brand->status == 1){
            $this->brand->status = true;
        }else
        {
            $this->brand->status = false;
        }
        if ($this->brand->vip == 1){
            $this->brand->vip = true;
        }else
        {
            $this->brand->vip = false;
        }
        $brand = $this->brand;
        return view('livewire.admin.brand.update',compact('brand'));
    }
}

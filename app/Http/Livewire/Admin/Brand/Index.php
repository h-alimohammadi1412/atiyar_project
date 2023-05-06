<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Log;
use App\Models\Product;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;


    public $img;
    public $search;

    protected $queryString = ['search'];


    public Brand $brand;

    public function mount()
    {
        $this->brand = new Brand();
    }



    protected $rules = [
        'brand.description' => 'required|min:3',
        'brand.name' => 'required',
        'brand.link' => 'required',
        'brand.parent' => 'required',
        'brand.status' => 'nullable',
        'brand.vip' => 'nullable',
    ];


    public function categoryForm()
    {
        $this->validate();

        $brand =    Brand::query()->create([
            'description' => $this->brand->description,
            'name' => $this->brand->name,
            'link' => $this->brand->link,
            'parent' => $this->brand->parent,
            'status' => $this->brand->status ? 1:0 ,
            'vip' => $this->brand->vip ? 1:0 ,
        ]);

        if ($this->img){
            $brand->update([
                'img' => $this->uploadImage('brand')
            ]);
        }

        $this->brand->description = "";
        $this->brand->name = "";
        $this->brand->link = "";
        $this->brand->parent = null;
        $this->brand->status = false;
        $this->brand->vip = false;
        $this->img = null;
        
        $this->createLog('برند','admin/brand',$this->brand->name,'ایجاد');
        $this->emit('toast', 'success', ' برند با موفقیت ایجاد شد.');

    }

    public function deleteCategory($id)
    {
        $brand = Brand::find($id);
        $product = Product::where('brand_id',$id)->first();
        if ($product == null){
            $brand->delete();
            $this->createLog('برند','admin/brand',$this->brand->name,'حذف');
            $this->emit('toast', 'success', ' برند با موفقیت حذف شد.');
        }else
        {
            $this->emit('toast', 'success', ' امکان حذف وجود ندارد زیرا برند، شامل محصول است!');
        }

    }


    public function render()
    {

        $brands = $this->readyToLoad ? Brand::with('category')->where('description', 'LIKE', "%{$this->search}%")->
        orWhere('name', 'LIKE', "%{$this->search}%")->
        orWhere('link', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];

        return view('livewire.admin.brand.index',compact('brands'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Special\Product;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Log;
use App\Models\SpecialProduct;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithPagination;

    public $category_id ;
    public $search;

    protected $queryString = ['search'];


    public SpecialProduct $specialProduct;

    public function mount()
    {
        $this->specialProduct = new SpecialProduct();
    }


    protected $rules = [
        'specialProduct.product_id' => 'required',
        'specialProduct.category_id' => 'required',
        'specialProduct.natural' => 'nullable',
        'specialProduct.supermarket' => 'nullable',
        'specialProduct.status' => 'nullable',
    ];

    public function updated($product_id)
    {
        $this->validateOnly($product_id);
    }


    public function categoryForm()
    {
        $this->validate();

        SpecialProduct::query()->create([
            'product_id' => $this->specialProduct->product_id,
            'category_id' => $this->category_id,
            'status' => $this->specialProduct->status ? 1 : 0,
            'natural' => $this->specialProduct->natural ? 1 : 0,
            'supermarket' => $this->specialProduct->supermarket ? 1 : 0,
        ]);

        $this->specialProduct->product_id = null;
        $this->specialProduct->category_id = null;
        $this->specialProduct->subCategory_id = null;
        $this->specialProduct->childCategory_id = null;
        $this->specialProduct->status = false;
        $this->specialProduct->natural = false;
        $this->specialProduct->supermarket = false;
        $this->createLog('پیشنهاد شگفت انگیز', 'admin/special/product', $this->specialProduct->product_id, 'ایجاد');
    }

    public function render()
    {

        $specialProducts = $this->readyToLoad ? SpecialProduct::where('category_id', 'LIKE', "%{$this->search}%")->
        orWhere('product_id', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        // dd(SpecialProduct::all()->category_id);
        return view('livewire.admin.special.product.index',compact('specialProducts'));
    }
}

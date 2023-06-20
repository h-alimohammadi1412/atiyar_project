<?php

namespace App\Http\Livewire\Admin\Product;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Category;
use App\Models\Log;
use App\Models\Product;
use App\Models\SubCategory;
use DB;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Create extends AdminControllerLivewire
{
    use WithFileUploads;
    public $img;
    public $color_id=[];
    public Product $product;

    public function mount()
    {
        $this->product = new Product();
    }



    protected $rules = [
        'product.title' => 'required|min:3',
        'product.en_name' => 'required',
        'product.seller_id' => 'nullable',
        'product.category_id' => 'nullable',
        'product.status_product' => 'nullable',
        'product.color_id' => 'nullable',
        'product.brand_id' => 'required',
        'product.tags' => 'nullable',
        'product.body' => 'required',
        'img' => 'required',
        'product.description' => 'required',
        'product.weight' => 'nullable',
        'product.view' => 'nullable',
        'product.shipment' => 'nullable',
        'product.gift' => 'nullable',
        'product.original' => 'nullable',
    ];

    public function categoryForm()
    {

        $this->validate();
        if ($this->img) {
            $this->product->img = $this->uploadImage('product');
        }
        $this->product->save();
        $this->createLog('محصول', 'admin/product', $this->product->title, 'ایجاد');
        return redirect(route('product.index'));
    }


    public function render()
    {
        return view('livewire.admin.product.create');
    }
}

<?php

namespace App\Http\Livewire\Admin\Product\ProductVendor;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Gallery;
use App\Models\Log;
use App\Models\ProductColor;
use App\Models\ProductSeller;
use DB;
use Livewire\WithPagination;

class Single extends AdminControllerLivewire
{
    use WithPagination;

    public ProductSeller $productSeller;
    public \App\Models\Product $product;
    public function mount()
    {
        $this->productSeller = new ProductSeller();
    }



    protected $rules = [
        'productSeller.product_id' => 'nullable',
        'productSeller.vendor_id' => 'required',
        'productSeller.time' => 'required',
        'productSeller.warranty_id' => 'required',
        'productSeller.price' => 'required',
        'productSeller.discount_price' => 'required',
        'productSeller.color_id' => 'required',
        'productSeller.product_count' => 'required',
        'productSeller.limit_order' => 'required',
        'productSeller.status' => 'nullable',
    ];

    public function updated($product_id)
    {
        $this->validateOnly($product_id);
    }



    public function categoryForm()
    {

        $this->validate();
        $this->productSeller->product_id = $this->product->id;
        $this->productSeller->save();
        $this->createLog('تنوع قیمت', 'admin/productSeller', $this->product->title, 'ایجاد');
        $this->emit('toast', 'success', ' تنوع قیمت محصول با موفقیت ایجاد شد.');
        return redirect()->back();
    }


    public function render()
    {
        $product = $this->product;

        $productSellers =
            $this->readyToLoad ? ProductSeller::
            where('product_id', $this->product->id)->
            orderBy('price')->paginate(15): [];
        $colors =ProductColor::with('color')->where('product_id',$this->product->id)->get();
        return view('livewire.admin.product.product-vendor.single',compact('product','colors','productSellers'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Product\ProductVendor;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\ProductColor;
use App\Models\ProductSeller;
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
        $color = ProductSeller::where('color_id', $this->productSeller->color_id)->first();
        if (!$color) {
            $this->productSeller->product_id = $this->product->id;
            $this->productSeller->save();
            $this->createLog('تنوع قیمت', 'admin/productSeller', $this->product->title, 'ایجاد');
            setProductPrice($this->product->id);
            $this->emit('toast', 'success', ' تنوع قیمت محصول با موفقیت ایجاد شد.');

            $this->productSeller->product_id = '';
            $this->productSeller->vendor_id = '';
            $this->productSeller->time = '';
            $this->productSeller->warranty_id = '';
            $this->productSeller->price = '';
            $this->productSeller->discount_price = '';
            $this->productSeller->color_id = '';
            $this->productSeller->product_count = '';
            $this->productSeller->limit_order = '';
            $this->productSeller->status = '';
            return redirect()->back();

        } else {
            alert()->warning("تنوع قیمت با این کد رنگ قبلا انتخاب شده است.");
            return redirect(route('product.productVendor', ['product' => $this->product->id]));
        }

    }

    public function render()
    {
        $product = $this->product;
        $productSellers =
            $this->readyToLoad ? ProductSeller::
                where('product_id', $this->product->id)->
                orderBy('price')->paginate(15) : [];
        $colors = ProductColor::with('color')->where('product_id', $this->product->id)->get();
        return view('livewire.admin.product.product-vendor.single', compact('product', 'colors', 'productSellers'));
    }
}
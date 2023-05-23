<?php

namespace App\Http\Livewire\Admin\Product\ProductVendor;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Cart;
use App\Models\PriceDate;
use App\Models\ProductColor;
use App\Models\ProductSeller;

class Update extends AdminControllerLivewire
{

    public ProductSeller $productSeller;
    public $product;
    public $color_id;

    public function mount()
    {
        $this->color_id = $this->productSeller->color_id;
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
        'productSeller.anbar' => 'nullable',
    ];
    public function categoryForm()
    {
        $this->validate();
        $arr = [];
        $productColors = ProductSeller::where('product_id', $this->productSeller->product_id)->get();
        foreach ($productColors as $color) {
            array_push($arr, $color->color_id);
        }
        $arr2 = array_fill_keys($arr, 1);
        unset($arr2[$this->color_id]);
        if (!array_key_exists($this->productSeller->color_id, $arr2)) {
            $this->productSeller->update($this->validate());
            PriceDate::create([
                'product_id' => $this->productSeller->product_id,
                'price' => $this->productSeller->price,
                'discount_price' => $this->productSeller->discount_price,
                'product_seller_id' => $this->productSeller->id,
            ]);
            $cart = Cart::where('product_seller_id', $this->productSeller->id)->first();
            if ($cart) {
                $cart->update([
                    'price_old' => $cart->product_price,
                    'product_price_discount_old' => $cart->product_price_discount,
                    'view' => 0,
                    'read_cart' => 0,
                ]);
                $cart->update([
                    'product_price' => $this->productSeller->price,
                    'product_price_discount' => $this->productSeller->discount_price,
                    'product_color' => $this->productSeller->color_id,
                    'product_vendor' => $this->productSeller->vendor_id,
                    'product_warranty' => $this->productSeller->warranty_id,
                ]);
            }
            setProductPrice($this->productSeller->product_id);
            $this->createLog('تنوع قیمت محصول', 'admin/productVendor/product/' . $this->productSeller->product_id, '---', 'آپدیت');
            alert()->success(' با موفقیت آپدیت شد.', 'تنوع محصول مورد نظر با موفقیت آپدیت شد.');
            return redirect(route('product.productVendor', ['product' => $this->productSeller->product_id]));
        } else {
            alert()->warning("تنوع قیمت با این کد رنگ قبلا انتخاب شده است.");
            return redirect(url('admin/productVendor/update/' . $this->productSeller->id));
        }
    }

    public function render()
    {
        if ($this->productSeller->status == 1) {
            $this->productSeller->status = true;
        } else {
            $this->productSeller->status = false;
        }
        if ($this->productSeller->anbar == 1) {
            $this->productSeller->anbar = true;
        } else {
            $this->productSeller->anbar = false;
        }
        $productSeller = $this->productSeller;
        $colors = ProductColor::with('color')->where('product_id', $this->productSeller->product_id)->get();
        return view('livewire.admin.product.product-vendor.update', compact('productSeller', 'colors'));
    }
}
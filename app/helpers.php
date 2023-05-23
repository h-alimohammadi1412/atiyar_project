<?php

use App\Models\Product;
use App\Models\ProductSeller;

function upload_file($request, $name, $dir, $pix = '')
{
    if ($request->hasFile($name)) {
        $file_name = $pix . time() . '.' . $request->file($name)->getClientOriginalExtension();
        if ($request->file($name)->move('files/uploads/' . $dir, $file_name))
            return $file_name;
        else
            return null;
    } else {
        return null;
    }

}

function setProductPrice($product_id){
    $productPrice = ProductSeller::where(['product_id' => $product_id])->orderBy('price', 'ASC')->first();
    if ($productPrice) {
        Product::where('id', $product_id)->update(['price' => $productPrice->price, 'discount_price' => $productPrice->discount_price]);
    } else {
        Product::where('id', $product_id)->update(['price' => 0, 'discount_price' => 0]);
    }
}
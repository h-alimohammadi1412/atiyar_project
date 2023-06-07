<?php

use App\Models\Notification;
use App\Models\Product;
use App\Models\ProductSeller;
use App\Models\SMS;
use Illuminate\Http\Response;

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

function setProductPrice($product_id)
{
    $productPrice = ProductSeller::with('product')->where(['product_id' => $product_id])->orderBy('price', 'ASC')->first();
    if ($productPrice) {
        Product::where('id', $product_id)->update(['price' => $productPrice->price, 'discount_price' => $productPrice->discount_price]);
        $notifications = Notification::with('user')->where('product_id', $product_id)->get();
        $mobiles = [];
        if($productPrice->status == 1){
            foreach($notifications as $notification){
                if($notification->sms == 1){
                    if($notification->user->mobile != null){
                        array_push($mobiles,$notification->user->mobile);
                    }
                }
                if($notification->system == 1){
                    Notification::where('product_id', $product_id)->update(['type' => '1']);
                }
            }
            if(sizeof($mobiles)>0){
                // $link = "/at-{$product_id}/{$product_id}";
                // $res = (new \App\Services\Notification\Notification)->sendSms($mobiles, "کاربر گرامی محصول مورد نظر شما موجود شد : {".url($link)."}.آتی یار");
                SMS::create([
                    'code' => "$product_id",
                    'type' => "موجود شدن محصول ".$productPrice->product->title,
                    'user_id' => auth()->user()->id,
                ]);
            }
        }
    } else {
        Product::where('id', $product_id)->update(['price' => 0, 'discount_price' => 0]);
        Notification::where('product_id', $product_id)->update(['type' => '0']);
    }
}

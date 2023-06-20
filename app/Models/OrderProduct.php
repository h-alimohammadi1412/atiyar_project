<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $table = 'order_product';
    protected $fillable = ['order_id','order_number', 'product_seller_id', 'product_id', 'color_id', 'warranty_id', 'seller_id', 'price', 'discount_price', 'anbar_id', 'product_available_count', 'product_sale_count', 'count_cart'];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function color()
    {
        return $this->belongsTo(Color::class,'color_id','id');
    }
}

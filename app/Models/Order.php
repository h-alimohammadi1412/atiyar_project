<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['product_id','type_order','order_number','product_seller_id',
        'payment','type_payment','anbar_id',
        'transaction_id','product_vendor','product_warranty','product_color','proPriceCountDiscount',
        'user_id','product__color_id','count','type_send'
        ,'countryName','ip','countryCode','regionCode','address_id','proPriceCountD',
        'regionName','cityName','total_price','total_discount_price'
        ,'zipCode','latitude','longitude','areaCode','type','status','proPriceCount',
        'time_day','time_month','time_time'];

   
    public function address()
    {
        return $this->belongsTo(Address::class,'address_id','id');
    }
  

    public function vendor()
    {
        return $this->belongsTo(User::class,'product_vendor','id');
    }
    public function warranty()
    {
        return $this->belongsTo(Warranty::class,'product_warranty','id');
    }
    public function productSeller()
    {
        return $this->belongsTo(ProductSeller::class,'product_seller_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class,'order_id','id');
    }
    public function timeSend()
    {
        return  $this->belongsTo(AddressTime::class,'time_send','id');
    }
}

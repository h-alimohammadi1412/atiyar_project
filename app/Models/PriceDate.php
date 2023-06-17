<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceDate extends Model
{
    use HasFactory;
    protected $fillable =['seller_id','product_id','price','discount_price','product_seller_id'];
}

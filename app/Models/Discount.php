<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable =['code','status','vendor_id','category_id','product_id','percent','type'
        ,'price','code','date_expire'];
}
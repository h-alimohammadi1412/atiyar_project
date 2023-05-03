<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeValue extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function attribute(){
        return $this->belongsTo(Attribute::class,'attribute_id','id');
    }

    protected $fillable = ['product_id','attribute_id','value','status'];
}

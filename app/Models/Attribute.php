<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function getParent(){
        return $this->belongsTo(Attribute::class,'parent','id');
    }
    public function getChild(){
        return $this->hasMany(Attribute::class,'parent','id');
    }
    public function getvalue(){
        return $this->hasMany(AttributeValue::class,'attribute_id','id');
    }
  
    protected $fillable = ['category_id','parent','title','position','status'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category(){
        return $this->hasOne(Category::class,'id','parent');
    }
    protected $fillable = ['img','description','vip','parent','link','name','status'];
}

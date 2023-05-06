<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterPartner extends Model
{
    use HasFactory;
    protected $fillable=['page_id'];
    public function getPage(){
        return $this->belongsTo(Page::class,'page_id','id');
    }
}

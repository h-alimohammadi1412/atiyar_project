<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketerDoc extends Model
{
    use HasFactory;
    protected $fillable=['type','user_id','img','status','date_expire'];
}

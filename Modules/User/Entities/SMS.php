<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SMS extends Model
{
    use HasFactory;
    protected $fillable=['type','code','user_id','seller_id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        'seller_id', 'name', 'user_name', 'county',
        'Village', 'neighborhood', 'Plaque', 'address', 'code', 'postal_code', 'telephone', 'merchant_id', 'license', 'guild_number'
    ];
}

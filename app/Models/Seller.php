<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Seller extends Model
{
    use HasFactory;
    protected $fillable= ['user_id','password','code_seller','type_seller','brand_name','user_id',
        'name','lname','gender','birth','national_code','shenasname_code', 'maliat',
        'logo','about','bank_shaba','bank_account_name','email','mobile',
        'website','state','city', 'address','pin_code','telephone',
        'location','ghardad_status','ghardad_number','ghardad_file','ghardad_start_day',
        'ghardad_end_day','ghardad_invoice','ghardad_pay','learning_status','wallet',
        'store_index','store_logo','job_name','birth_location','telegram_link','instagram_link',
        'aparat_link','call_hours','shop_address','plaque','alley',
        'city_part','village', 'town','province','store_username','zarinpal_merchant_id'
        ];

        public function user() : HasOne{
            return $this->hasOne(User::class,'id','user_id');
        }
        public function store() : HasOne{
            return $this->hasOne(Store::class,'seller_id','id');
        }
}

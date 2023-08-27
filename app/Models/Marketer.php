<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Marketer extends Model
{
    use HasFactory;
    protected $fillable= ['user_id','type_marketer','level_marketer','code_marketer','email','mobile','password',
        'name','lname','gender','birth','birth_location','national_code','shenasname_code', 'maliat',
        'logo','about','bank_shaba','bank_account_name',
        'province','city','town','village','city_part','alley','plaque', 'address','pin_code','telephone',
        'location','ghardad_status','ghardad_number','ghardad_file','ghardad_start_day',
        'ghardad_end_day','ghardad_invoice','ghardad_pay',
        'website','telegram_link','instagram_link','aparat_link',
        'learning_status','wallet'
        ];
    public function user() : HasOne{
        return $this->hasOne(User::class,'id','user_id');
    }
    public function store() : HasOne{
        return $this->hasOne(Store::class,'marketer_id','id');
    }
}

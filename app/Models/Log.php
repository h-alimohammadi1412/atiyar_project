<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Lib\Jdf;

class Log extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title','url','actionType'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public static function date($date,$time = false){
        $date = explode(' ',$date);
        if($time)
            $timeLog = $date[1];
        $date = explode('-',$date[0]);
        $date = (new Jdf)->gregorian_to_jalali($date[0],$date[1],$date[2],"/");

        if($time)
            return ['date'=>$date,'time'=>$timeLog];
        return ['date'=>$date];
    }
}

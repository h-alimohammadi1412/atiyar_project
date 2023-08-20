<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use SoapClient;

class SMS extends Model
{
    use HasFactory;


    static function send($number, $message)
    {

        try {
            $user = "md.09133886881";
            $pass = "kho!423";
            $client = new SoapClient("http://payamak-service.ir/SendService.svc?wsdl");
            $getcredit_parameters = array(
                "userName" => $user,
                "password" => $pass
            );
            $credit = $client->GetCredit($getcredit_parameters)->GetCreditResult;

            if($credit>0){
                $recId = array(0);
                $status = 0x0;
                $parameters = array(
                    'userName' => $user,
                    'password' => $pass,
                    'fromNumber' => "10009611",
                    'toNumbers' => array($number),
                    'messageContent' => $message,
                    'isFlash' => false,
                    'recId' => $recId,
                    'status' => &$status
                );
                $result = $client->SendSMS($parameters)->SendSMSResult;
                return $result;
            }else{
                echo 'no Enough Credit';
            }
        }
        catch (Exception $e)
        {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }


    static function message($template_identify , $parameters = []){
        $message = DB::table("sms_template")
            ->where("identify" , $template_identify)
            ->pluck("message")
            ->first();
        if(!empty($parameters)){
            foreach ($parameters as $p => $v){
                $message = str_replace('{'.$p.'}' , $v , $message);
            }
        }
        return $message;
    }
}

<?php
namespace App\Services\Notification;

use App\Models\User;
use Exception;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Nette\Utils\Strings;
use SoapClient;

class Notification
{
    public function sendEmail(User $user, Mailable $mailable)
    {
        return Mail::to($user)->send($mailable);
    }

    public function sendSms(string $number, string $message)
    {
        try {
            $client = new SoapClient("http://payamak-service.ir/SendService.svc?wsdl");

            $getcredit_parameters = array(
                "userName" => config('services.sms.user'),
                "password" => config('services.sms.password')
            );
            $credit = $client->GetCredit($getcredit_parameters)->GetCreditResult;

            $recId = array(0);
            $status = 0x0;
            $parameters = array(
                'userName' => config('services.sms.user'),
                'password' => config('services.sms.password'),
                'fromNumber' => config('services.sms.fromNumber'),
                'toNumbers' => array($number),
                'messageContent' => $message,
                'isFlash' => false,
                'recId' => $recId,
                'status' => &$status
            );
            $result = $client->SendSMS($parameters)->SendSMSResult;

            return $result;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
}
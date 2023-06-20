<?php

namespace App\Http\Controllers;

use App\Mail\OrderSubmit;
use App\Mail\SellerRegister;
use App\Models\BankPayment;
use App\Models\Notification;
use App\Models\Order;
use App\Models\Payment as ModelsPayment;
use App\Models\SMS;
use App\Models\User;
use App\Services\Notification\Notification as NotificationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Kavenegar\KavenegarApi;
use Shetabit\Multipay\Invoice;
use Shetabit\Multipay\Payment;
use Illuminate\Support\Facades\SweetAlert;

class PayController extends Controller
{
    // use SweetAlert;

    public function pay()
    {
        $order_number = explode('-', FacadesRequest::segment(4))[1];
        define('ORDER_NUMBER', $order_number);
        $bank = BankPayment::where(['order_number' => $order_number, 'user_id' => auth()->user()->id])->get()->last();
        if (!$bank) {
            return redirect()->route('home.index');
        }
        if ($bank->status == 1) {
            alert()->message('شما قبلا این سفارش را پرداخت کرده اید.');
            return redirect()->route('home.index');
        }
        $payconfig = config('payment');
        $payment = new Payment($payconfig);
        $invoice = (new Invoice)->amount($bank->price);
        return   $payment->callbackUrl(env('CALLBACK_URL'))->purchase($invoice, function ($driver, $transactionId) {
            $paymentModel = ModelsPayment::where('order_number', ORDER_NUMBER)->get();
            foreach ($paymentModel as $paymentModel) {
                $paymentModel->update([
                    'transactionId' => $transactionId,
                    'driver' => config('payment.default'),
                ]);
            }
        })->pay()->render();
    }

    public function callback(Request $request)
    {
        $Authority = \request()->Authority;
        $status = \request()->Status;
        if ($status == "OK") {
            $payment = \App\Models\Payment::where(['transactionId' => $Authority, 'user_id' => auth()->user()->id])->first();
            $bank_payment = BankPayment::where(['order_number' => $payment->order_number, 'user_id' => auth()->user()->id])->first();
            $order = Order::where(['order_number' => $payment->order_number, 'user_id' => auth()->user()->id])->first();
            $payment->update([
                'status' => 1
            ]);
            $bank_payment->update([
                'status' => 1
            ]);
            $order->update([
                'payment' => 1,
                'transaction_id' => $Authority,
                'status' => 'paid'
            ]);

            $type = 'سفارش شما ثبت شد';
            //مشتری
            Notification::create([
                'user_id' => $order->user_id,
                'product_id' => $order->product_id,
                'type' => $type,
                'sms' => 1,
                'email' => 1,
                'system' => 1,
                'text' => $order->product->title,
            ]);
            //فروشنده
            $type = 'سفارش جدیدی برای شما ثبت شد';
            Notification::create([
                'user_id' => $order->product_seller_id,
                'product_id' => $order->product_id,
                'type' => $type,
                'sms' => 1,
                'email' => 1,
                'system' => 1,
                'text' => $order->product->title,
            ]);
            //ادمین
            // $type = 'سفارش جدیدی در سایت ثبت شد';
            // Notification::create([
            //     'user_id' => 1,
            //     'product_id' => $order->product_id,
            //     'type' => $type,
            //     'sms' => 1,
            //     'email' => 1,
            //     'system' => 1,
            //     'text' => $order->product->title,
            // ]);
            $type2 = 'سفارش جدیدی برای شما ثبت شد';
            $seller = User::where('id', $order->user_id)->first();
            $name = $seller->name . $seller->lname;
            $res = (new NotificationNotification)->sendSms([$seller->mobile], "فروشنده گرامی ، شما سفارش جدیدی از طرف {$name} در پنل فروشگاهی خود دریافت نموده اید");
            dd($res); //سفارش محصولی در سایت آتی یار برای شما ثبت شد.
            $code = random_int(10000, 99999);
            SMS::create([
                'code' => $code,
                'type' => $type2,
                'user_id' => $order->product_seller_id,
            ]);

            // foreach ($orders as $order) {
                /////////////////////////////////sms
                ///


                // $type3 = 'سفارش جدیدی در سایت شما ثبت شد';
                // $Admin = User::where('id', 1)->first();
                // $code = random_int(10000, 99999);
                // $client = new KavenegarApi(env('KAVENEGAR_CLIENT_API'));
                // $client->send(
                //     env('SENDER_MOBILE'),
                //     $Admin->mobile,
                //     "  سفارش محصولی در سایت آتی یار برای شما ثبت شد"
                // );

                // SMS::create([
                //     'code' => $code,
                //     'type' => $type3,
                //     'user_id' => 1,
                // ]);

                ///////////////////////////////////email
                // $email = \App\Models\Email::create([
                //     'user_id' => $seller->id,
                //     'user_email' => $seller->email,
                //     'user_mobile' => $seller->mobile,
                //     'title' => 'سفارش محصولی در سایت  برای شما ثبت شد',
                //     'text' => 'سفارش محصولی در سایت آتی یار برای شما ثبت شد',
                //     'code' => 'سفارش با موفقیت پرداخت شد',
                // ]);

                // Mail::to(auth()->user()->email)->send(new OrderSubmit($email));
                //////////admin

                // $email3 = \App\Models\Email::create([
                //     'user_id' => $Admin->id,
                //     'user_email' => $Admin->email,
                //     'user_mobile' => $Admin->mobile,
                //     'title' => 'سفارش جدیدی در سایت دریافت شد',
                //     'text' => 'سفارش جدیدی در سایت با موفقیت دریافت شد و پرداخت شده است',
                //     'code' => 'سفارش با موفقیت پرداخت شد',
                // ]);

                // Mail::to($Admin->email)->send(new OrderSubmit($email3));
            // }
            alert()->success('پرداخت موفق')->message('سفارش با موفقیت ثبت شد.');

            // $type = 'سفارش شما ثبت شد';
            // $code = random_int(10000, 99999);
            // $client = new KavenegarApi(env('KAVENEGAR_CLIENT_API'));
            // $client->send(
            //     env('SENDER_MOBILE'),
            //     auth()->user()->mobile,
            //     "کد تایید شما: $code"
            // );

            // SMS::create([
            //     'code' => $code,
            //     'type' => $type,
            //     'user_id' => auth()->user()->id,
            // ]);

            // ////////////////////////////
            // $email = \App\Models\Email::create([
            //     'user_id' => auth()->user()->id,
            //     'user_email' => auth()->user()->email,
            //     'user_mobile' => auth()->user()->mobile,
            //     'title' => 'سفارش شما با موفقیت دریافت شد',
            //     'text' => 'سفارش شما با موفقیت دریافت شد و در حال پردازش است',
            //     'code' => 'سفارش با موفقیت پرداخت شد',
            // ]);

            // Mail::to(auth()->user()->email)->send(new OrderSubmit($email));


            ///////////////////////////////////////////////////

            return redirect(route('profile.index'));
        } else {
            // alert()->message('Message', 'Optional Title');

            return redirect('/');
        }
    }
}

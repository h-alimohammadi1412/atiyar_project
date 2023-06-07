<?php

namespace App\Http\Livewire\Admin\Product;

use App\Http\Controllers\AdminControllerLivewire;
use App\Http\Livewire\Home\Profile\Notification;
use App\Mail\ProductUpdateNotification;
use App\Models\Category;
use App\Models\Email;
use App\Models\Log;
use App\Models\Notification as ModelsNotification;
use App\Models\Product;
use App\Models\SMS;
use DB;
use Illuminate\Support\Facades\Mail;
use Kavenegar\KavenegarApi;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends AdminControllerLivewire
{
    use WithFileUploads;

    public $img;
    public $color_id = [];
    public Product $product;
    protected $rules = [
        'product.title' => 'required|min:3',
        'product.en_name' => 'required',
        'product.seller_id' => 'nullable',
        'product.category_id' => 'nullable',
        'product.status_product' => 'nullable',
        'product.color_id' => 'nullable',
        'product.brand_id' => 'required',
        'product.tags' => 'nullable',
        'product.body' => 'required',
        'img' => 'nullable',
        'product.description' => 'required',
        'product.weight' => 'nullable',
        'product.view' => 'nullable',
        'product.shipment' => 'nullable',
        'product.gift' => 'nullable',
        'product.original' => 'nullable',
    ];

    public function categoryForm()
    {
        $this->validate();
        $data = $this->validate();
        if ($this->img) {
            $data['img'] = $this->uploadImage('product');
        } else {
            unset($data['img']);
        }
      
        $this->product->update($data);
        if ($this->color_id) {
            DB::table('product_color')->where('product_id', $this->product->id)->delete();
            foreach ($this->color_id as $color) {
                DB::table('product_color')->insert([
                    'color_id' => $color,
                    'product_id' => $this->product->id,
                    'cat_id' => $this->product->category_id,
                ]);
            }
        }
        //         if ($this->product->publish_product == 1) {
//             $notifications = \App\Models\Notification::where('product_id', $this->product->id)->get();
//             foreach ($notifications as $notification) {
//                 if ($notification->system == 1) {
//                     $notification->update([
//                         'type' => 1
//                     ]);
//                 }
//                 if ($notification->sms == 1) {

        //                     $client = new KavenegarApi(env('KAVENEGAR_CLIENT_API'));
//                     $client->send(env('SENDER_MOBILE'), $notification->user->mobile,
//                         "کالای شما موجود شد");
// //                        "کالای شما موجود شد : $notification->product->title");
//                     SMS::create([
//                         'code' => $notification->user_id,
//                         'type' => 'کالای مورد نظر موجود شد:' . $notification->product->title,
//                         'user_id' => $notification->user_id,
//                     ]);

        //                 }
//                 if ($notification->email == 1) {
//                 Mail::to($notification->user->email)
//                         ->send(new ProductUpdateNotification($notification));

        //                     Email::create([
//                         'user_id' =>$notification->user->id,
//                         'user_email' =>$notification->user->email,
//                         'user_name' =>$notification->user->name,
//                         'user_mobile' =>$notification->user->mobile,
//                         'title' =>'کالای مورد نظر شما موجود شد | '.env('APP_NAME'),
//                         'text' =>$notification->product->title,
//                     ]);
//                 }
//             }

        //         }
        $this->createLog('محصول', 'admin/product', $this->product->title, 'آپدیت');
        alert()->success(' با موفقیت آپدیت شد.', 'محصول مورد نظر با موفقیت آپدیت شد.');

        return redirect(route('product.index'));

    }

    public Category $category;

    public function render()
    {

        if ($this->product->gift == 1) {
            $this->product->gift = true;
        } else {
            $this->product->gift = false;
        }
        if ($this->product->original == 1) {
            $this->product->original = true;
        } else {
            $this->product->original = false;
        }
        if ($this->product->special == 1) {
            $this->product->special = true;
        } else {
            $this->product->special = false;
        }

        $product = $this->product;

        return view('livewire.admin.product.update', compact('product'));
    }
}
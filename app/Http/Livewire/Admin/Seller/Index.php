<?php

namespace App\Http\Livewire\Admin\Seller;

use App\Http\Controllers\AdminControllerLivewire;
use App\Mail\OrderSubmit;
use App\Models\Notification;
use App\Models\Seller;
use App\Models\Log;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    public $img;
    public $search;

    protected $queryString = ['search'];

    public Seller $seller;

    public function mount()
    {
        $this->seller = new Seller();
    }

    public function deleteCategory($id)
    {
        $seller = seller::find($id);
        $product = Product::where('vendor_id',$id)->first();
        if ($product == null){
            $seller->delete();
            Log::create([
                'user_id' => auth()->user()->id,
                'url' => 'حذف کردن فروشنده' .'-'. $this->seller->title,
                'actionType' => 'حذف'
            ]);
            alert()->success('فروشنده با موفقیت حذف شد.', ' فروشنده با موفقیت حذف شد.');
        }else
        {
            alert()->success('امکان حذف وجود ندارد زیرا فروشنده، شامل محصول است!', ' امکان حذف وجود ندارد زیرا فروشنده، شامل محصول است!');
        }

    }

    public function acceptSeller($id)
    {
        $seller = seller::find($id);
        $seller->update([
            'learning_status' =>1
        ]);
        $type = 'تایید فروشندگی شما';
        Notification::create([
            'user_id' => $seller->user_id,
            'type' =>$type,
            'sms' =>0,
            'email' =>1,
            'system' =>1,
            'text' =>$type,
        ]);
        $email = \App\Models\Email::create([
            'user_id' =>$seller->id,
            'user_email' =>$seller->email,
            'user_mobile' =>$seller->mobile,
            'title' =>'تایید فروشندگی شما',
            'text' =>'تایید فروشندگی شما',
            'code' =>'تایید فروشندگی شما',
        ]);

        Mail::to($seller->email)->send(new OrderSubmit($email));
        alert()->success('فروشنده با موفقیت تایید شد.', ' فروشنده با موفقیت تایید شد.');
    }


    public function render()
    {

        $sellers = $this->readyToLoad ? seller::where('website', 'LIKE', "%{$this->search}%")->
        orWhere('name', 'LIKE', "%{$this->search}%")->
        orWhere('lname', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.seller.index',compact('sellers'));
    }
}

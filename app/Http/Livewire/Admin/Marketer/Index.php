<?php

namespace App\Http\Livewire\Admin\marketer;

use App\Http\Controllers\AdminControllerLivewire;
use App\Mail\OrderSubmit;
use App\Models\Notification;
use App\Models\marketer;
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

    public Marketer $marketer;

    public function mount()
    {
        $this->marketer = new Marketer();
    }

    public function deleteCategory($id)
    {
        $marketer = marketer::find($id);
        $product = Product::where('vendor_id',$id)->first();
        if ($product == null){
            $marketer->delete();
            $this->createLog('فروشنده', 'admin/role', $this->marketer->title, 'حذف');

            alert()->success('فروشنده با موفقیت حذف شد.', ' فروشنده با موفقیت حذف شد.');
        }else
        {
            alert()->success('امکان حذف وجود ندارد زیرا فروشنده، شامل محصول است!', ' امکان حذف وجود ندارد زیرا فروشنده، شامل محصول است!');
        }

    }

    public function acceptMarketer($id)
    {
        $marketer = marketer::find($id);
        $marketer->update([
            'learning_status' =>1
        ]);
        $type = 'تایید فروشندگی شما';
        Notification::create([
            'user_id' => $marketer->user_id,
            'type' =>$type,
            'sms' =>0,
            'email' =>1,
            'system' =>1,
            'text' =>$type,
        ]);
        $email = \App\Models\Email::create([
            'user_id' =>$marketer->id,
            'user_email' =>$marketer->email,
            'user_mobile' =>$marketer->mobile,
            'title' =>'تایید فروشندگی شما',
            'text' =>'تایید فروشندگی شما',
            'code' =>'تایید فروشندگی شما',
        ]);

        Mail::to($marketer->email)->send(new OrderSubmit($email));
        alert()->success('فروشنده با موفقیت تایید شد.', ' فروشنده با موفقیت تایید شد.');
    }


    public function render()
    {

        $marketers = $this->readyToLoad ? marketer::where('website', 'LIKE', "%{$this->search}%")->
        orWhere('name', 'LIKE', "%{$this->search}%")->
        orWhere('lname', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.marketer.index',compact('marketers'));
    }
}

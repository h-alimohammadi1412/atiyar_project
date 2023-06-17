<?php

namespace App\Http\Livewire\Admin\Discount;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Discount;
use App\Models\Log;
use Livewire\Component;
use Livewire\WithPagination;

class IndexDiscount extends AdminControllerLivewire
{
    use WithPagination;

    protected $listeners = [
        'category.added' => '$refresh'
    ];
    public Discount $discount;

    public function mount()
    {
        $this->discount = new Discount();
    }


    protected $rules = [
        'discount.price' => 'nullable',
        'discount.percent' => 'nullable',
        'discount.product_id' => 'nullable',
        'discount.category_id' => 'nullable',
        'discount.vendor_id' => 'nullable',
        'discount.date_expire' => 'required',
        'discount.status' => 'nullable',
        'discount.code' => 'nullable',
    ];

    protected $validationAttributes =[
        'discount.price' => 'مبلغ',
        'discount.percent' => 'درصد',
        'discount.date_expire' => 'تاریخ انقضاء',
        'discount.code' => 'کد',
    ];

    public function updated($code)
    {
        $this->validateOnly($code);
    }


    public function categoryForm()
    {
        
        // dd($this->validate());
        $data =$this->validate()['discount'];

        $code = mt_rand(1000000000,  9999999999999);
        $gift = Discount::query()->create([
            'date_expire' =>  $data['date_expire'],
            'price' =>  $data['price']=='' ? null : $data['price'],
            'percent' =>  $data['percent'],
            'product_id' =>  $data['product_id'],
            'category_id' =>  $data['category_id'],
            'vendor_id' =>  $data['vendor_id'],
            'code' => $data['code'] ? $data['code'] : $code,
            'status' =>  $data['status'] ? true : false,
        ]);
        if ( $data['percent'] != '') {
            $gift->update([
                'type' => 0
            ]);
        }
        if ($this->discount->price != '') {
            $gift->update([
                'type' => 1
            ]);
        }


        $this->discount->code = "";
        $this->discount->date_expire = "";
        $this->discount->price = "";
        $this->discount->percent = "";
        $this->discount->product_id = "";
        $this->discount->category_id = "";
        $this->discount->vendor_id = "";
        $this->discount->status = false;
        $this->createLog('کد تخفیف', 'admin/discount', auth()->user()->name, 'ایجاد');
    }

    public function deleteGift($id)
    {
        $discount = Discount::find($id);

        $discount->delete();
        $this->emit('toast', 'success', ' کد تخفیف با موفقیت حذف شد.');
    }


    public function render()
    {

        $discounts = $this->readyToLoad ? Discount::where('code', 'LIKE', "%{$this->search}%")->orWhere('price', 'LIKE', "%{$this->search}%")->orWhere('percent', 'LIKE', "%{$this->search}%")->orWhere('product_id', 'LIKE', "%{$this->search}%")->orWhere('id', $this->search)->latest()->paginate(15) : [];
        return view('livewire.admin.discount.index-discount', compact('discounts'));
    }
}

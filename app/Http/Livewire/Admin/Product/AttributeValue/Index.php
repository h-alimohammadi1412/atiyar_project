<?php

namespace App\Http\Livewire\Admin\Product\AttributeValue;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Log;
use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public AttributeValue $attribute;

    public function mount()
    {
        $this->attribute = new AttributeValue();
    }



    protected $rules = [
        'attribute.product_id' => 'required',
        'attribute.attribute_id' => 'required',
        'attribute.value' => 'required',
        'attribute.status' => 'required',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }


    public function categoryForm()
    {
        $this->validate();
        AttributeValue::query()->create([
            'attribute_id' => $this->attribute->attribute_id,
            'product_id' => $this->attribute->product_id,
            'value' => $this->attribute->value,
            'status' => $this->attribute->status ? 1:0 ,
        ]);

        $this->attribute->attribute_id = null;
        $this->attribute->product_id = null;
        $this->attribute->value = "";
        $this->attribute->status = false;
        Log::create([
            'user_id' => auth()->user()->id,
            'url' => 'افزودن مقدار مشخصات کالا' .'-'. $this->attribute->value,
            'actionType' => 'ایجاد'
        ]);
        alert()->success(' مقدار مشخصات کالا با موفقیت ایجاد شد.', ' مقدار مشخصات کالا با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }


    public function deleteCategory($id)
    {
        $attribute = AttributeValue::find($id);
        $attribute->delete();
        Log::create([
            'user_id' => auth()->user()->id,
            'url' => 'حذف کردن مقدار مشخصات کالا' .'-'. $attribute->value,
            'actionType' => 'حذف'
        ]);
        alert()->success('مقدار مشخصات کالا با موفقیت حذف شد.', ' مقدار مشخصات کالا با موفقیت حذف شد.');
    }


    public function render()
    {

        $attributes = $this->readyToLoad ? AttributeValue::where('value', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.product.attribute-value.index',compact('attributes'));
    }
}

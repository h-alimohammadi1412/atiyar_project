<?php

namespace App\Http\Livewire\Admin\Product\Attribute;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\ChildCategory;
use App\Models\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Product extends AdminControllerLivewire
{
    use WithPagination;


    public AttributeValue $attribute;
    public \App\Models\Product $product;

    public function mount()
    {
        $this->attribute = new AttributeValue();
    }



    protected $rules = [
        'attribute.product_id' => 'nullable',
        'attribute.attribute_id' => 'required',
        'attribute.value' => 'required',
        'attribute.status' => 'nullable',
    ];


    public function categoryForm()
    {

        $this->validate();
        AttributeValue::query()->create([
            'attribute_id' => $this->attribute->attribute_id,
            'product_id' => $this->product->id,
            'value' => $this->attribute->value,
            'status' => $this->attribute->status ? 1:0 ,
        ]);

        $this->attribute->attribute_id = null;
        $this->attribute->product_id = null;
        $this->attribute->value = "";
        $this->attribute->status = false;
        $this->createLog('مشخصه کالا', 'admin/attribute/product/'.$this->product->id, $this->attribute->value, 'ایجاد');
        $this->emit('toast', 'success', ' مقدار مشخصه کالا با موفقیت ایجاد شد.');
        return redirect()->back();
    }


    public function render()
    {

        $product = $this->product;

        $attributeValues =
            $this->readyToLoad ? AttributeValue::with(['product','attribute'])->
            where('product_id', $product->id)->
            orderBy('product_id')->paginate(15): [];
            $attributeParent =Attribute::where('parent', '>', '0')->where('category_id', $product->category_id)->get();
        return view('livewire.admin.product.attribute.product',compact('attributeValues','product','attributeParent'));
    }
}

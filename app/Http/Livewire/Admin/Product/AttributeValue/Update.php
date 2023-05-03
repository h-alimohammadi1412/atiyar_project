<?php

namespace App\Http\Livewire\Admin\Product\AttributeValue;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Product;

class Update extends AdminControllerLivewire
{
    public AttributeValue $attribute;

    protected $rules = [
        'attribute.attribute_id' => 'required',
        'attribute.value' => 'required',
        'attribute.status' => 'nullable',
    ];
    public function categoryForm()
    {
        $this->validate();
        $this->attribute->update($this->validate());
        if (!$this->attribute->status) {
            $this->attribute->update([
                'status' => 0
            ]);
        }
        $this->createLog('مشخصه کالا', 'admin/attribute/product/' . $this->attribute->product_id, $this->attribute->value, 'آپدیت');
        alert()->success(' با موفقیت آپدیت شد.', 'مقدار مشخصه مورد نظر با موفقیت آپدیت شد.');
        return redirect(route('product.attribute', ['product' => $this->attribute->product_id]));

    }


    public function render()
    {
        if ($this->attribute->status == 1) {
            $this->attribute->status = true;
        } else {
            $this->attribute->status = false;
        }
        $attribute = $this->attribute;
        $product = Product::find($attribute->product_id);
        $attributeParents = Attribute::where('parent', '>', '0')->where('category_id', $product->category_id)->get();
        return view('livewire.admin.product.attribute-value.update', compact('attribute', 'product', 'attributeParents'));
    }
}
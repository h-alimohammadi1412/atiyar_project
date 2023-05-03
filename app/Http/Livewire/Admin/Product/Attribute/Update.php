<?php

namespace App\Http\Livewire\Admin\Product\Attribute;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Attribute;

class Update extends AdminControllerLivewire
{
    public Attribute $attribute;

    protected $rules = [
        'attribute.title' => 'required',
        'attribute.position' => 'required',
        'attribute.parent' => 'nullable',
        'attribute.status' => 'required',
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
        $this->createLog('مشخصات کالا', 'admin/attribute/'.$this->attribute->category_id, $this->attribute->title, 'آپدیت');
        alert()->success(' با موفقیت آپدیت شد.', 'مشخصات محصول مورد نظر با موفقیت آپدیت شد.');
        return redirect(route('attribute.index',['category'=>$this->attribute->category_id]));

    }


    public function render()
    {
        if ($this->attribute->status == 1){
            $this->attribute->status = true;
        }else
        {
            $this->attribute->status = false;
        }
        $attribute = $this->attribute;
        $attributeParents = Attribute::where(['category_id'=>$this->attribute->category_id,'parent'=>0])->get();
        return view('livewire.admin.product.attribute.update',compact('attribute','attributeParents'));
    }
}

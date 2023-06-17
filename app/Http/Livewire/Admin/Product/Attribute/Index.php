<?php

namespace App\Http\Livewire\Admin\Product\Attribute;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Log;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithPagination;


    public $search;

    protected $queryString = ['search'];

    public Attribute $attribute;
    public $category;
    public function mount($category)
    {
        $this->category = Category::findOrFail($category);
        $this->attribute = new Attribute();
    }



    protected $rules = [
        'attribute.title' => 'required',
        'attribute.position' => 'required',
        'attribute.parent' => 'nullable',
        'attribute.status' => 'required',
    ];

    public function categoryForm()
    {
        $this->validate();
          Attribute::query()->create([
            'category_id' => $this->category->id,
            'position' => $this->attribute->position,
            'title' => $this->attribute->title,
            'parent' => $this->attribute->parent ?? 0 ,
            'status' => $this->attribute->status ? 1:0 ,
        ]);

        $this->attribute->parent = null;
        $this->attribute->title = "";
        $this->attribute->position = null;
        $this->attribute->status = false;
        $this->createLog('مشخصه کالا', 'admin/attribute/product/'.$this->category->id, $this->attribute->title, 'ایجاد');
        alert()->success('مشخصات کالا با موفقیت ایجاد شد.', ' مشخصات کالا با موفقیت ایجاد شد.');

    }

    public function render()
    {

        $attributes = $this->readyToLoad ? Attribute::with('getParent')->
        where('category_id',$this->category->id)->
        where('title', 'LIKE', "%{$this->search}%")->
        latest()->paginate(15) : [];
        $attributeParents = Attribute::where(['category_id'=>$this->category->id,'parent'=>0])->get();
        return view('livewire.admin.product.attribute.index',compact('attributes','attributeParents'));
    }
}

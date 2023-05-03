<?php

namespace App\Http\Livewire\Admin\Product\AttributeValue;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\AttributeValue;
use Livewire\WithPagination;

class Trashed extends AdminControllerLivewire
{
    use WithPagination;

    public function render()
    {

        $attributeValues = $this->readyToLoad ? AttributeValue::with(['product','attribute'])->onlyTrashed()->
            latest()->paginate(15) : [];
        return view('livewire.admin.product.attribute-value.trashed',compact('attributeValues'));
    }
}

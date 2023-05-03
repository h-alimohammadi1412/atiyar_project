<?php

namespace App\Http\Livewire\Admin\Product\Attribute;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Attribute;
use Livewire\WithPagination;

class Trashed extends AdminControllerLivewire
{
    use WithPagination;

    public function render()
    {
        $attributes = $this->readyToLoad ? Attribute::with('getParent')->onlyTrashed()->
            latest()->paginate(15) : [];
        return view('livewire.admin.product.attribute.trashed',compact('attributes'));
    }
}

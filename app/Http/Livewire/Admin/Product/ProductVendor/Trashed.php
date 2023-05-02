<?php

namespace App\Http\Livewire\Admin\Product\ProductVendor;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Log;
use App\Models\ProductSeller;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Trashed extends AdminControllerLivewire
{
    use WithPagination;
  
    public function render()
    {

        $productSellers = $this->readyToLoad ? ProductSeller::with(['product','color','vendor','warranty'])->onlyTrashed()->latest()->paginate(15) : [];
        return view('livewire.admin.product.product-vendor.trashed', compact('productSellers'));
    }
}

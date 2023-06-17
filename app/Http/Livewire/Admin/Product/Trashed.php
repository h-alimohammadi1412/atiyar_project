<?php

namespace App\Http\Livewire\Admin\Product;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Log;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class Trashed extends AdminControllerLivewire
{
    use WithPagination;


    public function deleteCategory($id)
    {
        $product = Product::withTrashed()->findOrFail($id);
        if ($product->img) {Storage::disk('public')->delete("storage",$product->img);}
        $product->forceDelete();
        alert()->success(' محصول به صورت کامل با موفقیت حذف شد.', ' محصول به صورت کامل با موفقیت حذف شد.');
    }
    public function trashedProduct($id)
    {
        $product = Product::withTrashed()->where('id', $id)->first();
        $product->restore();
        Log::create([
            'user_id' => auth()->user()->id,
            'title' => 'بازیابی محصول' .'-'. $product->title,
            'url'=>'admin/category',
            'actionType' => 'بازیابی'
        ]);
        alert()->success('محصول با موفقیت بازیابی شد.', ' محصول با موفقیت بازیابی شد.');
    }

    public function render()
    {

        $products =  $this->readyToLoad ? Product::with(['category','user','brand'])
            ->onlyTrashed()
            ->latest()->paginate(15) : [];
        return view('livewire.admin.product.trashed',compact('products'));
    }
}

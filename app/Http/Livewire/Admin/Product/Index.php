<?php

namespace App\Http\Livewire\Admin\Product;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Category;
use App\Models\Log;
use App\Models\Product;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithPagination;

    protected $listeners = [
        'category.added' => '$refresh'
    ];
    protected $paginationTheme = 'bootstrap';

    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }


    public function deleteCategory($id)
    {
        $product = Product::find($id);

        $product->delete();
        Log::create([
            'user_id' => auth()->user()->id,
            'title' => 'حذف کردن محصول' .'-'. $product->title,
            'url'=> 'admin/product',
            'actionType' => 'حذف'
        ]);
        $this->emit('toast', 'success', ' محصول با موفقیت حذف شد.');
    }


    public function render()
    {

        $products = $this->readyToLoad ? Product::with(['category','user','brand'])->
        where('title', 'LIKE', "%{$this->search}%")->
        orWhere('en_name', 'LIKE', "%{$this->search}%")->
        orWhere('link', 'LIKE', "%{$this->search}%")->
        orWhere('body', 'LIKE', "%{$this->search}%")->
        orWhere('description', 'LIKE', "%{$this->search}%")->
        orWhere('tags', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];

        return view('livewire.admin.product.index',compact('products'));
    }
}

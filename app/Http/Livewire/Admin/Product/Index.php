<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Log;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
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
    public function updateCategoryStatus($id)
    {
        $product = Product::find($id);
        if($product){
            if($product->status_product == 0){
                $product->update([
                    'status_product' => 1
                ]);
                Log::create([
                    'user_id' => auth()->user()->id,
                    'title' => 'فعال کردن وضعیت محصول' .'-'. $product->title,
                    'url'=> 'admin/product',
                    'actionType' => 'فعال'
                ]);
                $this->emit('toast', 'success', 'وضعیت محصول با موفقیت فعال شد.');
            }else{
                $product->update([
                    'status_product' => 0
                ]);
                Log::create([
                    'user_id' => auth()->user()->id,
                    'title' => 'غیرفعال کردن وضعیت محصول' .'-'. $product->title,
                    'url'=> 'admin/product',
                    'actionType' => 'غیرفعال'
                ]);
                $this->emit('toast', 'success', 'وضعیت محصول با موفقیت غیرفعال شد.');
            }
        }
        
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

<?php

namespace App\Http\Livewire\Admin\Product\Selected;

use App\Models\CategoryIndex;
use App\Models\Log;
use App\Models\ProductNewSelected;
use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithPagination;

class NewProduct extends AdminControllerLivewire
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public ProductNewSelected $product;

    public function mount()
    {
        $this->product = new ProductNewSelected();
    }


    protected $rules = [
        'product.product_id' => 'required',
        'product.category_id' => 'required',
        'product.subCategory_id' => 'required',
        'product.childCategory_id' => 'required',
        'product.status' => 'nullable',
    ];

    public function updated($product_id)
    {
        $this->validateOnly($product_id);
    }


    public function categoryForm()
    {
        $this->validate();

        ProductNewSelected::query()->create([
            'product_id' => $this->product->product_id,
            'category_id' => $this->product->category_id,
            'subCategory_id' => $this->product->subCategory_id,
            'childCategory_id' => $this->product->childCategory_id,
            'status' => $this->product->status ? 1 : 0,
        ]);

        $this->product->product_id = null;
        $this->product->category_id = null;
        $this->product->subCategory_id = null;
        $this->product->childCategory_id = null;
        $this->product->status = false;
        Log::create([
            'user_id' => auth()->user()->id,
            'url' => 'افزودن محصول منتخب' . '-' . $this->product->product_id,
            'actionType' => 'ایجاد'
        ]);
        alert()->success('محصول منتخب با موفقیت ایجاد شد.', ' محصول منتخب با موفقیت ایجاد شد.');

    }
    public function loadCategory()
    {
        $this->readyToLoad = true;
    }



    public function deleteCategory($id)
    {
        $category = ProductNewSelected::find($id);
        $category->delete();
        Log::create([
            'user_id' => auth()->user()->id,
            'url' => 'حذف کردن محصول منتخب' . '-' . $category->category_id,
            'actionType' => 'حذف'
        ]);
        alert()->success(' محصول منتخب با موفقیت حذف شد.', ' محصول منتخب با موفقیت حذف شد.');

    }


    public function render()
    {

        $products = $this->readyToLoad ? ProductNewSelected::where('category_id', 'LIKE', "%{$this->search}%")->
        orWhere('subCategory_id', 'LIKE', "%{$this->search}%")->
        orWhere('childCategory_id', 'LIKE', "%{$this->search}%")->
        orWhere('product_id', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.product.selected.new-product',compact('products'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Product\Gallery;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Gallery;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Product extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $img;
    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public Gallery $gallery;
    public \App\Models\Product $product;

    public function mount()
    {
        $this->gallery = new Gallery();
    }
    public function loadCategory()
    {
        $this->readyToLoad = true;
    }


    public function render()
    {
        $product = $this->product;

        $galleries =
            $this->readyToLoad ? Gallery::with('product')->
                where('product_id', $this->product->id)->
                orderBy('position')->paginate(15) : [];


        return view('livewire.admin.product.gallery.product', compact('galleries', 'product'));
    }
}
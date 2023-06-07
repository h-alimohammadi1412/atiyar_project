<?php

namespace App\Http\Livewire\Admin\Product;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Log;
use App\Models\Product;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithPagination;

    protected $listeners = [
        'category.added' => '$refresh'
    ];


    public function render()
    {

        $products = $this->readyToLoad ? Product::where('title', 'LIKE', "%{$this->search}%")->
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

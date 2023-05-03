<?php

namespace App\Http\Livewire\Admin\Product\Warranty;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Warranty;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Trashed extends AdminControllerLivewire
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;


    public function render()
    {

        $warranties = $this->readyToLoad ? Warranty::onlyTrashed()->
            latest()->paginate(15) : [];

        return view('livewire.admin.product.warranty.trashed',compact('warranties'));
    }
}

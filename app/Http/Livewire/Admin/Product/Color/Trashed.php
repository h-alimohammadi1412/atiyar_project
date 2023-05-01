<?php

namespace App\Http\Livewire\Admin\Product\Color;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Color;
use Livewire\WithPagination;

class Trashed extends AdminControllerLivewire
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {

        $colors = $this->readyToLoad ? Color::whereNotNull('deleted_at')
        ->onlyTrashed()
        ->latest()->paginate(15) : [];

        return view('livewire.admin.product.color.trashed',compact('colors'));
    }
}

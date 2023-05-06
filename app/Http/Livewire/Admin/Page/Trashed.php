<?php

namespace App\Http\Livewire\Admin\Page;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Page;
use Livewire\WithPagination;

class Trashed extends AdminControllerLivewire
{
    use WithPagination;
    public $img;
    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $pages = $this->readyToLoad ? Page::onlyTrashed()->latest()->paginate(15) : [];
        return view('livewire.admin.page.trashed',compact('pages'));
    }
}

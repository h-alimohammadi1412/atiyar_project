<?php

namespace App\Http\Livewire\Admin\Category;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Category;
use App\Models\Log;
use App\Models\Warranty;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Trashed extends AdminControllerLivewire
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $img;
    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {

        $categories = $this->readyToLoad ? Category::onlyTrashed()->latest()->paginate(15) : [];

        return view('livewire.admin.category.trashed', compact('categories'));
    }
}

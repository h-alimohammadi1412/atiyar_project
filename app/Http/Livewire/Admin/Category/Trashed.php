<?php

namespace App\Http\Livewire\Admin\Category;

use App\Http\Controllers\AdminControllerLivewire;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Warranty;
use App\Models\Category;
use App\Models\Log;

class Trashed extends AdminControllerLivewire
{
    use WithPagination;

    public $img;


    public function render()
    {

        $categories = $this->readyToLoad ? Category::onlyTrashed()->latest()->paginate(15) : [];

        return view('livewire.admin.category.trashed', compact('categories'));
    }
}

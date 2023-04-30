<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Brand;
use App\Models\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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

        $brands = $this->readyToLoad ? DB::table('brands')
            ->whereNotNull('deleted_at')->
            latest()->paginate(15) : [];

        return view('livewire.admin.brand.trashed',compact('brands'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\FavList;
use App\Models\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithPagination;

class FavlistProfileShow extends AdminControllerLivewire
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    protected $queryString = ['search'];



    public function render()
    {
        $fave_id = Request::segment(4);
        $fav = FavList::find($fave_id);


        return view('livewire.admin.dashboard.favlist-profile-show',compact('fave_id','fav'));
    }
}

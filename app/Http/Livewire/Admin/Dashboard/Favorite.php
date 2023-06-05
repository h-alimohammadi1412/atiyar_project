<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Log;
use Livewire\WithPagination;

class Favorite extends AdminControllerLivewire
{
    use WithPagination;

    public function deleteCategory($id)
    {
        $favorites = \App\Models\Favorite::with('product')->where('id',$id)->first();
        $this->createLog('علاقه مندی', 'admin/dashboard/favorite', $favorites->product->title, 'حذف');
        $favorites->delete();
    }

    public function render()
    {

        $favorites = $this->readyToLoad ? \App\Models\Favorite::with(['product','users'])->where('user_id', 'LIKE', "%{$this->search}%")->
        orWhere('product_id', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.dashboard.favorite', compact('favorites'));
    }
}

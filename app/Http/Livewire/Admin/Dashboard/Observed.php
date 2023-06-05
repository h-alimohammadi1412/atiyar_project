<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Observed extends AdminControllerLivewire
{
    use WithPagination;
    public function deleteCategory($id)
    {
        $favorites = \App\Models\Observed::with(['product','user'])->where('id',$id)->first();

        $favorites->delete();
        $this->createLog('اطلاع رسانی', 'admin/dashboard/observed', $favorites->product->title, 'حذف');

    }

    public function render()
    {

        $observeds = $this->readyToLoad ? \App\Models\Observed::where('user_id', 'LIKE', "%{$this->search}%")->
        orWhere('product_id', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.dashboard.observed',compact('observeds'));
    }
}

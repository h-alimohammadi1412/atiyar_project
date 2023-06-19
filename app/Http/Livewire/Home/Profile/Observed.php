<?php

namespace App\Http\Livewire\Home\Profile;

use App\Models\Observed as ModelObserved;
use App\Http\Controllers\AdminControllerLivewire;

class Observed extends AdminControllerLivewire
{
    public $observeds;

    public function mount()
    {
        $this->observeds = ModelObserved::with(['product'=>['category','brand']])->where('user_id', auth()->user()->id)->get();
    }
    public function deleteFavorite($id)
    {
        $favorites = ModelObserved::where('id', $id)->firstOrFail();
        $favorites->delete();
        $this->observeds = ModelObserved::with(['product'=>['category','brand']])->where('user_id', auth()->user()->id)->get();
        alert()->success('محصول از لیست اطلاع رسانی های شما حذف شد.', 'محصول از لیست اطلاع رسانی های شما حذف شد.');
    }


    public function render()
    {
        // dd($this->favorites);

        return view('livewire.home.profile.observed')->layout('layouts.home1');
    }
}

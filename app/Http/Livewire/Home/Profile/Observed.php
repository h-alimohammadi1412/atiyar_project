<?php

namespace App\Http\Livewire\Home\Profile;

use App\Models\Observed as ModelObserved;
use Livewire\Component;

class Observed extends Component
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
        $this->emit('toast', 'success', 'محصول از لیست اطلاع رسانی های شما حذف شد.');
    }


    public function render()
    {
        // dd($this->favorites);

        return view('livewire.home.profile.observed')->layout('layouts.home1');
    }
}
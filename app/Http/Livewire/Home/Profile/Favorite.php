<?php

namespace App\Http\Livewire\Home\Profile;

use App\Models\Favorite as ModelsFavorite;
use Livewire\Component;

class Favorite extends Component
{
    public $favorites;

    public function mount()
    {
        $this->favorites = ModelsFavorite::with(['product'=>['category','brand']])->where('user_id', auth()->user()->id)->get();
    }
    public function deleteFavorite($id)
    {
        $favorites = ModelsFavorite::where('id', $id)->firstOrFail();
        $favorites->delete();
        $this->favorites = ModelsFavorite::with(['product'=>['category','brand']])->where('user_id', auth()->user()->id)->get();
        $this->emit('toast', 'success', 'محصول از لیست علاقه مندی های شما حذف شد.');
    }


    public function render()
    {
        // dd($this->favorites);

        return view('livewire.home.profile.favorite')->layout('layouts.home1');
    }
}
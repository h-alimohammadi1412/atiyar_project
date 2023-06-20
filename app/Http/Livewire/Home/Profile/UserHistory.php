<?php

namespace App\Http\Livewire\Home\Profile;

use App\Http\Controllers\AdminControllerLivewire;

class UserHistory extends AdminControllerLivewire
{
    public  $userHistories;
    public function mount()
    {
        $this->userHistories = \App\Models\UserHistory::with(['product'])->where('user_id', auth()->user()->id)->latest()->get();
    }

    public function deleteUserHistory($id)
    {
        $userHistory = \App\Models\UserHistory::find($id);
        $userHistory->delete();
        $this->userHistories = \App\Models\UserHistory::with(['product'])->where('user_id', auth()->user()->id)->latest()->get();
        alert()->success('تاریخچه بازدید شما با موفقیت حذف شد.', ' تاریخچه بازدید شما با موفقیت حذف شد.');
    }
    public function render()
    {
        return view('livewire.home.profile.user-history')
            ->layout('layouts.home1');
    }
}

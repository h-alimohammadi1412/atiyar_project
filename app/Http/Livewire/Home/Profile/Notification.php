<?php

namespace App\Http\Livewire\Home\Profile;

use App\Models\Notification as ModelsNotification;
use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithPagination;

class Notification extends AdminControllerLivewire
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public function deleteAllNotification($id)
    {
     $notifics =   \App\Models\Notification::where('user_id',$id)
         ->where('type',1)->get();

       foreach ($notifics as $not){
           $not->delete();
       }
        alert()->success('پیغام ها با موفقیت حذف شدند.', ' پیغام ها با موفقیت حذف شدند.');
    }



    public function render()
    {
        $notifications = \App\Models\Notification::with(['product'])->where('type',1)->where('user_id', auth()->user()->id)->latest()->paginate(5);
        return view('livewire.home.profile.notification',compact('notifications'))->layout('layouts.home1');
    }
}

<?php

namespace App\Http\Livewire\Home\Profile;

use Livewire\Component;

class Notification extends Component
{
    public  $notifications;

    public function mount()
    {
        $this->notifications = \App\Models\Notification::with(['product'])->where('user_id', auth()->user()->id)->latest()->get();
    }
    public function deleteAllNotification($id)
    {
     $notifics =   \App\Models\Notification::where('user_id',$id)
         ->where('type',1)->get();
       foreach ($notifics as $not){
           $not->delete();
       }
        $this->emit('toast', 'success', ' پیغام ها با موفقیت حذف شدند.');
    }



    public function render()
    {
        return view('livewire.home.profile.notification')->layout('layouts.home1');
    }
}

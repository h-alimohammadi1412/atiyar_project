<?php

namespace App\Http\Livewire\Home\Profile;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    public $img;
    public User $user;

    public function mount()
    {
        $this->user = User::findOrFail(auth()->user()->id);
    }
    protected $rules = [
        'user.name' => 'nullable',
        'user.email' => 'nullable',
        'user.birthday' => 'nullable',
        'user.job' => 'nullable',
        'user.money_back' => 'nullable',
        'user.newsletter' => 'nullable',
        'user.mobile' => 'nullable',

    ];
    public function profileData()
    {
        // dd($this->user);

        $data = $this->validate()['user'];
        
        if ($this->img) {
            $data['img'] = $this->uploadImage('users');
            $this->user->img = $data['img'];
        }
        if ($data['newsletter'] == true) {
            $data['newsletter'] = 1;
        }else{
            $data['newsletter'] = 0;
        }
        unset($data['mobile']);

        $this->user->update($data);
       
        $this->createLog('اطلاعات کاربری', 'profile', $this->user->name, 'آپدیت');
        return $this->redirect('profile');
    }
    public function render()
    {
        if ($this->user->newsletter == 1){
            $this->user->newsletter  = true;
        }else
        {
            $this->user->newsletter  = false;
        }
        return view('livewire.home.profile.index')->layout('layouts.home1');
    }
}
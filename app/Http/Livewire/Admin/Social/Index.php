<?php

namespace App\Http\Livewire\Admin\Social;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Log;
use App\Models\Social;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];


    public Social $social;

    public function mount()
    {
        $this->social = new Social();
    }



    protected $rules = [
        'social.img' => 'nullable',
        'social.icon' => 'nullable',
        'social.title' => 'required',
        'social.link' => 'required',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }


    public function categoryForm()
    {
        $this->validate();

      Social::query()->create([
            'img' => $this->social->img,
            'icon' => $this->social->icon,
            'title' => $this->social->title,
            'link' => $this->social->link,
        ]);


        $this->social->img = "";
        $this->social->icon = "";
        $this->social->title = "";
        $this->social->link = "";
        $this->createLog('شبکه اجتماعی', 'admin/social', $this->social->title, 'ایجاد');
        alert()->success(' شبکه اجتماعی با موفقیت ایجاد شد.', ' شبکه اجتماعی با موفقیت ایجاد شد.');

    }


    public function render()
    {

        $socials = $this->readyToLoad ? Social::where('title', 'LIKE', "%{$this->search}%")->
        orWhere('link', 'LIKE', "%{$this->search}%")->
        orWhere('icon', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.social.index',compact('socials'));
    }
}

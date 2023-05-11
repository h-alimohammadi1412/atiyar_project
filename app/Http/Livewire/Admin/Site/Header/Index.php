<?php

namespace App\Http\Livewire\Admin\Site\Header;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\SiteHeader;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;


    public $img;
    public $search;

    protected $queryString = ['search'];

    public SiteHeader $header;

    public function mount()
    {
        $this->header = new SiteHeader();
    }



    protected $rules = [
        'header.title' => 'required|min:3',
        'header.status' => 'nullable',
        'header.link' => 'required',
        'header.icon' => 'nullable',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }


    public function categoryForm()
    {

        $this->validate();

        $header =  SiteHeader::query()->create([
            'title' => $this->header->title,
            'link' => $this->header->link,
            'icon' => $this->header->icon,
            'status' => $this->header->status ? true:false ,
        ]);

        if ($this->img){
            $header->update([
                'img' => $this->uploadImage('site')
            ]);
        }

        $this->header->title = "";
        $this->header->link = "";
        $this->header->icon = "";
        $this->header->status = false;
        $this->img = null;
        $this->createLog('منو هدر ', 'admin/header', $this->header->title, 'ایجاد');

    }
    public function render()
    {

        $headers = $this->readyToLoad ? SiteHeader::where('title', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];

        return view('livewire.admin.site.header.index',compact('headers'));
    }
}

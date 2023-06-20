<?php

namespace App\Http\Livewire\Admin\Page;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Page;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;


    public $img;
    public $search;

    protected $queryString = ['search'];

    public Page $site_page;

    public function mount()
    {
        $this->site_page = new Page();
    }



    protected $rules = [
        'site_page.title' => 'required',
        'site_page.link' => 'required',
    ];

    public function categoryForm()
    {
        $this->validate();

        $page = Page::query()->create([
            'title' => $this->site_page->title,
            'link' => $this->site_page->link,
        ]);

        if ($this->img){
            $page->update([
                'img' => $this->uploadImage('page')
            ]);
        }

        $this->site_page->title = "";
        $this->site_page->link = "";
        $this->img = null;
        $this->createLog('صفحه سایت', 'admin/page', $this->site_page->title, 'ایجاد');
        alert()->success('صفحه سایت با موفقیت ایجاد شد.', ' صفحه سایت با موفقیت ایجاد شد.');

    }


    public function render()
    {
        $pages = $this->readyToLoad ? Page::where('title', 'LIKE', "%{$this->search}%")->
        orWhere('link', 'LIKE', "%{$this->search}%")->
        latest()->paginate(15) : [];
        return view('livewire.admin.page.index',compact('pages'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Page;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Brand;
use App\Models\Log;
use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends AdminControllerLivewire
{
    use WithFileUploads;
    public Page $page;

    public $img;
    protected $rules = [
        'page.title' => 'required',
        'page.link' => 'required',
    ];
    public function categoryForm()
    {
        $this->validate();
        if ($this->img){
            $this->page->img = $this->uploadImage('page');
        }

        $this->page->update($this->validate());
        $this->createLog('صفحه سایت', 'admin/page', $this->page->title, 'آپدیت');
        alert()->success(' با موفقیت آپدیت شد.', 'صفحه سایت مورد نظر با موفقیت آپدیت شد.');
        return redirect(route('page.index'));

    }

    public function render()
    {
        $page = $this->page;
        return view('livewire.admin.page.update',compact('page'));
    }
}

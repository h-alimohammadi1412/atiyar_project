<?php

namespace App\Http\Livewire\Admin\Footer\Link;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\FooterLinkTitle;
use App\Models\Log;

class Title extends AdminControllerLivewire
{
    public FooterLinkTitle $footerLinkTitle;

    public function mount()
    {
        $this->footerLinkTitle = new FooterLinkTitle();
    }



    protected $rules = [
        'footerLinkTitle.page_id' => 'required',
    ];

    public function updated($page_id)
    {
        $this->validateOnly($page_id);
    }


    public function categoryForm()
    {
        $this->validate();
       if ($this->footerLinkTitle->count() >2){
           alert()->error('عنوان فوتر صفحه سایت آپدیت نشد.', 'عنوان فوتر صفحه سایت نباید بیشتر از 3 تا باشد.');
           return redirect(route('footer_page_title.index'));
       }else
       {
           FooterLinkTitle::query()->create([
               'page_id' => $this->footerLinkTitle->page_id,
           ]);
           $this->footerLinkTitle->page_id = "";
        $this->createLog('صفحه فوتر سایت', 'admin/footer/linktitle', 'صفحه فوتر سایت', 'ایجاد');
           alert()->success('صفحه به فوتر سایت با موفقیت ایجاد شد.', ' صفحه به فوتر سایت با موفقیت ایجاد شد.');
       }


    }

    public function render()
    {

        $footer_links = FooterLinkTitle::with('getPage')->latest()->get();
        return view('livewire.admin.footer.link.title',compact('footer_links'));
    }
}

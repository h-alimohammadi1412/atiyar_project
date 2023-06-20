<?php

namespace App\Http\Livewire\Admin\Footer\Link;

use App\Models\FooterLinkTitle;
use App\Http\Controllers\AdminControllerLivewire;

class TitleUpdate extends AdminControllerLivewire
{
    public FooterLinkTitle $footer_page;

    protected $rules = [
        'footer_page.page_id' => 'required',
    ];
    public function categoryForm()
    {
        $this->validate();
        $this->footer_page->update($this->validate());
        $this->createLog('صفحه فوتر سایت', 'admin/footer/linktitle', 'صفحه فوتر سایت', 'آپدیت');
        alert()->success('عنوان فوتر صفحه سایت با موفقیت ایجاد شد.', 'عنوان فوتر صفحه سایت آپدیت شد.');

        return redirect(route('footer_page_title.index'));

    }


    public function render()
    {
        $footer_page = $this->footer_page;
        return view('livewire.admin.footer.link.title-update',compact('footer_page'));
    }
}

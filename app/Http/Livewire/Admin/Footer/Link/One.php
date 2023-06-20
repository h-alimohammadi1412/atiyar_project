<?php

namespace App\Http\Livewire\Admin\Footer\Link;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\FooterLinkOne;

class One extends AdminControllerLivewire
{

    public FooterLinkOne $footerLinkOne;

    public function mount()
    {
        $this->footerLinkOne = new FooterLinkOne();
    }



    protected $rules = [
        'footerLinkOne.page_id' => 'required',
    ];

    public function updated($page_id)
    {
        $this->validateOnly($page_id);
    }


    public function categoryForm()
    {
        $this->validate();

        FooterLinkOne::query()->create([
            'page_id' => $this->footerLinkOne->page_id,
        ]);
        $this->footerLinkOne->page_id = "";
        $this->createLog('صفحه فوتر سایت', 'admin/footer/link1', 'صفحه فوتر سایت', 'ایجاد');
        alert()->success('صفحه به فوتر سایت با موفقیت ایجاد شد.', ' صفحه به فوتر سایت با موفقیت ایجاد شد.');

    }

    public function render()
    {

        $footer_links = FooterLinkOne::with('getPage')->latest()->get();
        return view('livewire.admin.footer.link.one',compact('footer_links'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Footer\Link;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\FooterLinkThree;

class Three extends AdminControllerLivewire
{

    public FooterLinkThree $footerLinkThree;

    public function mount()
    {
        $this->footerLinkThree = new FooterLinkThree();
    }



    protected $rules = [
        'footerLinkThree.page_id' => 'required',
    ];

    public function updated($page_id)
    {
        $this->validateOnly($page_id);
    }


    public function categoryForm()
    {
        $this->validate();

        FooterLinkThree::query()->create([
            'page_id' => $this->footerLinkThree->page_id,
        ]);
        $this->footerLinkThree->page_id = "";
        $this->createLog('صفحه فوتر سایت', 'admin/footer/link3', 'صفحه فوتر سایت', 'ایجاد');

        alert()->success('صفحه به فوتر سایت با موفقیت ایجاد شد.', ' صفحه به فوتر سایت با موفقیت ایجاد شد.');

    }

    public function render()
    {

        $footer_links = FooterLinkThree::with('getPage')->latest()->get();

        return view('livewire.admin.footer.link.three',compact('footer_links'));
    }
}

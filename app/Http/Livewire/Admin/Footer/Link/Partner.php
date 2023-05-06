<?php

namespace App\Http\Livewire\Admin\Footer\Link;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\FooterLinkOne;
use App\Models\FooterPartner;
use App\Models\Log;
use Livewire\Component;

class Partner extends AdminControllerLivewire
{

    public FooterPartner $footerLinkOne;

    public function mount()
    {
        $this->footerLinkOne = new FooterPartner();
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

        FooterPartner::query()->create([
            'page_id' => $this->footerLinkOne->page_id,
        ]);
        $this->footerLinkOne->page_id = "";
        $this->createLog('صفحه فوتر سایت', 'admin/footer/partner', 'صفحه فوتر سایت', 'ایجاد');
        $this->emit('toast', 'success', ' صفحه به فوتر سایت با موفقیت ایجاد شد.');

    }

    public function render()
    {

        $footer_links = FooterPartner::with('getPage')->latest()->get();

        return view('livewire.admin.footer.link.partner',compact('footer_links'));
    }
}

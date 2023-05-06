<?php

namespace App\Http\Livewire\Admin\Footer\Link;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\FooterLinkTwo;
use App\Models\Log;
use Livewire\Component;

class Two extends AdminControllerLivewire
{

    public FooterLinkTwo $footerLinkTwo;

    public function mount()
    {
        $this->footerLinkTwo = new FooterLinkTwo();
    }



    protected $rules = [
        'footerLinkTwo.page_id' => 'required',
    ];

    public function updated($page_id)
    {
        $this->validateOnly($page_id);
    }


    public function categoryForm()
    {
        $this->validate();

        FooterLinkTwo::query()->create([
            'page_id' => $this->footerLinkTwo->page_id,
        ]);
        $this->footerLinkTwo->page_id = "";
        $this->createLog('صفحه فوتر سایت', 'admin/footer/link2', 'صفحه فوتر سایت', 'ایجاد');
        $this->emit('toast', 'success', ' صفحه به فوتر سایت با موفقیت ایجاد شد.');

    }

    public function render()
    {

        $footer_links = FooterLinkTwo::latest()->get();

        return view('livewire.admin.footer.link.two',compact('footer_links'));
    }
}

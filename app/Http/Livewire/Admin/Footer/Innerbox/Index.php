<?php

namespace App\Http\Livewire\Admin\Footer\Innerbox;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\FooterInnerBox;

class Index extends AdminControllerLivewire
{

    public FooterInnerBox $footerInnerBox;

    public function mount()
    {
        $this->footerInnerBox = new FooterInnerBox();
    }



    protected $rules = [
        'footerInnerBox.page_id' => 'required',
        'footerInnerBox.top' => 'required',
    ];

    public function updated($page_id)
    {
        $this->validateOnly($page_id);
    }


    public function categoryForm()
    {
        $this->validate();

        FooterInnerBox::query()->create([
            'page_id' => $this->footerInnerBox->page_id,
            'top' => $this->footerInnerBox->top ? true : false,
        ]);
        $this->footerInnerBox->page_id = "";
        $this->footerInnerBox->top = false;
        $this->createLog('صفحه فوتر سایت', 'admin/footer', $this->footerInnerBox->title, 'ایجاد');
        $this->emit('toast', 'success', ' صفحه به فوتر سایت با موفقیت ایجاد شد.');
    }
    public function render()
    {
        $footer_pages = FooterInnerBox::with('getPage')->latest()->get();
        return view('livewire.admin.footer.innerbox.index', compact('footer_pages'));
    }
}
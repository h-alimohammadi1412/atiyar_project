<?php

namespace App\Http\Livewire\Admin\Footer\Title;

use App\Models\FooterTitle;
use App\Models\Log;
use App\Http\Controllers\AdminControllerLivewire;

class Index extends AdminControllerLivewire
{
    public $readyToLoad = false;

    public FooterTitle $footerTitle;

    public function mount()
    {
        $this->footerTitle = new FooterTitle();
    }



    protected $rules = [
        'footerTitle.title' => 'required',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }


    public function categoryForm()
    {
        $this->validate();
        if ($this->footerTitle->count() >17){
            alert()->error('عنوان فوتر  آپدیت نشد.', 'عنوان فوتر  نباید بیشتر از 15 مورد باشد.');
            return redirect(route('footer_title.index'));
        }else
        {
            FooterTitle::query()->create([
                'title' => $this->footerTitle->title,
            ]);
            $this->footerTitle->title = "";
            $this->createLog('صفحه فوتر سایت', 'admin/footer/title', $this->footerTitle->title, 'ایجاد');
            alert()->success('عنوان فوتر سایت با موفقیت ایجاد شد.', ' عنوان فوتر سایت با موفقیت ایجاد شد.');
        }


    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }


    public function render()
    {

        $footer_titles = FooterTitle::latest()->get();
        return view('livewire.admin.footer.title.index',compact('footer_titles'));
    }
}

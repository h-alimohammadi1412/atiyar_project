<?php

namespace App\Http\Livewire\Admin\Newsletter;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\NewsLetter;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public NewsLetter $newsletter;

    public function mount()
    {
        $this->newsletter = new NewsLetter();
    }



    protected $rules = [
        'newsletter.email' => 'required',
    ];

    public function updated($email)
    {
        $this->validateOnly($email);
    }


    public function categoryForm()
    {
        $this->validate();

        NewsLetter::query()->create([
            'email' => $this->newsletter->email,
        ]);


        $this->newsletter->email = "";
        $this->createLog('صفحه سایت', 'admin/page', $this->newsletter->email , 'ایجاد');
        alert()->success('خبرنامه با موفقیت ایجاد شد.', ' خبرنامه با موفقیت ایجاد شد.');

    }
    public function render()
    {

        $newsletters = $this->readyToLoad ? NewsLetter::where('email', 'LIKE', "%{$this->search}%")->
        latest()->paginate(15) : [];
        return view('livewire.admin.newsletter.index',compact('newsletters'));
    }
}

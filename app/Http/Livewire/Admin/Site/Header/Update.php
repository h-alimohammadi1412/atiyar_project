<?php

namespace App\Http\Livewire\Admin\Site\Header;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\SiteHeader;
use Livewire\WithFileUploads;

class Update extends AdminControllerLivewire
{
    use WithFileUploads;
    public $img;
    public $status = null;
    public SiteHeader $header;

    protected $rules = [
        'header.title' => 'required|min:3',
        'header.status' => 'required',
        'header.link' => 'required',
        'header.icon' => 'nullable',
    ];
    public function headerForm()
    {

        $this->validate();
        if ($this->img) {
            $this->header->img = $this->uploadImage('site');
        }
        $this->header->update($this->validate());
        if (!$this->header->status) {
            $this->header->update([
                'status' => 0
            ]);
        }
        $this->createLog('منو هدر ', 'admin/header', $this->header->title, 'آپدیت');
        return redirect(route('header.index'));

    }

    public function render()
    {
        if ($this->header->status == 1){
            $this->header->status = true;
        }else
        {
            $this->header->status = false;
        }

        $header = $this->header;
        return view('livewire.admin.site.header.update',compact('header'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Index\Title;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\TitleCategoryIndex;

class Update extends AdminControllerLivewire
{

    protected $rules = [
        'index.title' => 'required',
    ];
    public function categoryForm()
    {

        $this->validate();
        $this->index->update($this->validate());
        $this->createLog('عنوان دسته صفحه اصلی سایت', 'admin/category/title', $this->index->title, 'آپدیت');
        return redirect(route('index.title.index'));

    }

    public TitleCategoryIndex $index;

    public function render()
    {
        $index = $this->index;
        return view('livewire.admin.index.title.update',compact('index'));
    }
}

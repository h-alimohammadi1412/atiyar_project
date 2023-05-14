<?php

namespace App\Http\Livewire\Admin\Index\Title;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\TitleCategoryIndex;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithPagination;

    public TitleCategoryIndex $index;

    public function mount()
    {
        $this->index = new TitleCategoryIndex();
    }


    protected $rules = [
        'index.title' => 'required',
    ];

    public function categoryForm()
    {
        $this->validate();

        TitleCategoryIndex::query()->create([
            'title' => $this->index->title,
        ]);

        $this->index->title = '';
        $this->createLog('عنوان دسته صفحه اصلی سایت', 'admin/category/title', $this->index->title, 'ایجاد');

    }
    public function render()
    {

        $indexes = $this->readyToLoad ? TitleCategoryIndex::where('title', 'LIKE', "%{$this->search}%")->
            orWhere('id', $this->search)->
            latest()->paginate(15) : [];
        return view('livewire.admin.index.title.index', compact('indexes'));
    }
}
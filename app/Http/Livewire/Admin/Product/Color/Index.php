<?php

namespace App\Http\Livewire\Admin\Product\Color;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Color;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $img;
    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public Color $color;

    public function mount()
    {
        $this->color = new Color();
    }



    protected $rules = [
        'color.name' => 'required',
        'color.value' => 'required',
        'color.status' => 'nullable',
    ];

    public function updated($title)
    {
        $this->validateOnly($title);
    }


    public function categoryForm()
    {
        $this->validate();

        $color =    Color::query()->create([
            'name' => $this->color->name,
            'value' => $this->color->value,
            'status' => $this->color->status ? 1:0 ,
        ]);
        $this->color->name = "";
        $this->color->value = "";
        $this->color->status = false;
        $this->createLog('رنگ', 'admin/color', $this->color->name, 'ایجاد');
        $this->emit('toast', 'success', ' رنگ با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }
    public function updateCategoryDisable($id)
    {
        $color = Color::find($id);
        $color->update([
            'status' => 0
        ]);
        $this->createLog('رنگ', 'admin/color', $this->color->name, 'غیرفعال');
        $this->emit('toast', 'success', 'وضعیت رنگ با موفقیت غیرفعال شد.');
    }

    public function updateCategoryEnable($id)
    {
        $color = Color::find($id);
        $color->update([
            'status' => 1
        ]);
        $this->createLog('رنگ', 'admin/color', $this->color->name, 'فعال');
        $this->emit('toast', 'success', 'وضعیت رنگ با موفقیت فعال شد.');
    }

    public function deleteCategory($id)
    {
        $color = Color::find($id);
        $color->delete();
        $this->createLog('رنگ', 'admin/color', $this->color->name, 'حذف');
        $this->emit('toast', 'success', ' رنگ با موفقیت حذف شد.');
    }


    public function render()
    {

        $colors = $this->readyToLoad ? Color::where('name', 'LIKE', "%{$this->search}%")->
        orWhere('value', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.product.color.index',compact('colors'));
    }
}

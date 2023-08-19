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

    public $img;
    public $search;

    protected $queryString = ['search'];

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

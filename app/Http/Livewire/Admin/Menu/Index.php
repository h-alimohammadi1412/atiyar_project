<?php

namespace App\Http\Livewire\Admin\Menu;

use App\Models\ChildCategory;
use App\Models\Log;
use App\Models\Menu;
use App\Models\SubCategory;
use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public Menu $menu;

    public function mount()
    {
        $this->menu = new Menu();
    }


    protected $rules = [
        'menu.category_id' => 'required',
        'menu.subCategory_id' => 'required',
        'menu.childCategory_id' => 'nullable',
        'menu.index' => 'nullable',
        'menu.status' => 'nullable',
    ];

    public function updated($category_id)
    {
        $this->validateOnly($category_id);
    }


    public function categoryForm()
    {
        $this->validate();

        Menu::query()->create([
            'category_id' => $this->menu->category_id,
            'subCategory_id' => $this->menu->subCategory_id,
            'childCategory_id' => $this->menu->childCategory_id,
            'status' => $this->menu->status ? 1 : 0,
        ]);

        $this->menu->category_id = null;
        $this->menu->subCategory_id = null;
        $this->menu->childCategory_id = null;
        $this->menu->status = false;
        $this->createLog('منو', 'admin/menu', $this->menu->category_id, 'ایجاد');

        alert()->success('منو با موفقیت ایجاد شد.', ' منو با موفقیت ایجاد شد.');

    }
    public function loadCategory()
    {
        $this->readyToLoad = true;
    }



    public function deleteCategory($id)
    {
        $category = Menu::find($id);
        $childCategory = Menu::where('subCategory_id', $id)->first();
        if ($childCategory == null) {
            $category->delete();
            $this->createLog('منو', 'admin/menu', $this->menu->category_id, 'حذف');

            alert()->success('منو با موفقیت حذف شد.', ' منو با موفقیت حذف شد.');
        } else {
            alert()->success('امکان حذف وجود ندارد زیرا این دسته، شامل دسته کودک است!', ' امکان حذف وجود ندارد زیرا این دسته، شامل دسته کودک است!');
        }

    }


    public function render()
    {

        $menus = $this->readyToLoad ? Menu::where('category_id', 'LIKE', "%{$this->search}%")->
        orWhere('subCategory_id', 'LIKE', "%{$this->search}%")->
        orWhere('childCategory_id', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.menu.index',compact('menus'));
    }
}

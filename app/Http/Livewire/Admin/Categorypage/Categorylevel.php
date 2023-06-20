<?php

namespace App\Http\Livewire\Admin\Categorypage;

use App\Http\Controllers\AdminControllerLivewire;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Log;



class Categorylevel extends AdminControllerLivewire
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;
    public $category_id;
    public $subCategory_id;
    public $childCategory_id;
    public $categorylevel4_id;
    public $property;
    public function categoryForm()
    {

        DB::table('category_levels')->insert([
            'category_id' => $this->category_id,
            'subCategory_id' => $this->subCategory_id,
            'childCategory_id' => $this->childCategory_id,
            'categorylevel4_id' => $this->categorylevel4_id,
            'property' => $this->property,
        ]);

        $this->category_id = null;
        $this->subCategory_id = null;
        $this->childCategory_id = null;
        $this->categorylevel4_id = null;
        $this->property = null;
        $this->createLog(' دسته های زیردسته ها ','admin/categorypage', $this->category_id,'ایجاد');
        alert()->success('دسته های زیردسته ها با موفقیت ایجاد شد.', ' دسته های زیردسته ها با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function updateCategoryDisable($id)
    {
        $category2 = DB::table('category_levels')
            ->where('id', $id)->first();
        $category = DB::table('category_levels')
            ->where('id', $id)->limit($id);
        $category->update([
            'status' => 0
        ]);
        $this->createLog('وضعیت دسته های زیردسته ها ','admin/categorypage',$category2->category_id,'غیرفعال');
        alert()->success('وضعیت دسته های زیردسته ها با موفقیت غیرفعال شد.', 'وضعیت دسته های زیردسته ها با موفقیت غیرفعال شد.');
    }

    public function updateCategoryEnable($id)
    {
        $category2 = DB::table('category_levels')
            ->where('id', $id)->first();
        $category = DB::table('category_levels')
            ->where('id', $id)->limit($id);
        $category->update([
            'status' => 1
        ]);
        $this->createLog('وضعیت دسته های زیردسته ها ','admin/categorypage',$category2->category_id,'فعال');
        alert()->success('وضعیت دسته های زیردسته ها با موفقیت فعال شد.', 'وضعیت دسته های زیردسته ها با موفقیت فعال شد.');
    }

    public function deleteCategory($id)
    {
        $amazing2 = DB::table('category_levels')
            ->where('id', $id)->first();
        $amazing = DB::table('category_levels')
            ->where('id', $id)->limit($id);
        $amazing->delete();
        $this->createLog(' دسته های زیردسته ها ','admin/categorypage',$amazing2->category_id,'حذف');
        alert()->success(' دسته های زیردسته ها با موفقیت حذف شد.', ' دسته های زیردسته ها با موفقیت حذف شد.');

    }


    public function render()
    {

        $categorylevels = $this->readyToLoad ?
            DB::table('category_levels')
                ->where('category_id', 'LIKE', "%{$this->search}%")->
                orWhere('subCategory_id', 'LIKE', "%{$this->search}%")->
                orWhere('childCategory_id', 'LIKE', "%{$this->search}%")->
                orWhere('id', $this->search)->
                latest()->paginate(15) : [];
        return view('livewire.admin.categorypage.categorylevel',compact('categorylevels'));
    }
}

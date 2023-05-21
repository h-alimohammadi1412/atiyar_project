<?php

namespace App\Http\Livewire\Admin\Categorypage;

use App\Http\Controllers\AdminControllerLivewire;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Log;

class Amazing extends AdminControllerLivewire
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;
    public $product_id;
    public $category_id;
    public $subCategory_id;
    public $childCategory_id;
    public $status;
    public $c_id;
    public $property1;
    public $property2;


    public function categoryForm()
    {

//        DB::connection('mysql-category')->table('category_amazing')->insert([
        DB::table('category_amazing')->insert([
            'product_id' => $this->product_id,
            'category_id' => $this->category_id,
            'subCategory_id' => $this->subCategory_id,
            'childCategory_id' => $this->childCategory_id,
            'status' => $this->status,
            'c_id' => $this->c_id,
            'property1' => $this->property1,
            'property2' => $this->property2,
        ]);

        $this->product_id = null;
        $this->category_id = null;
        $this->subCategory_id = null;
        $this->childCategory_id = null;
        $this->status = false;
        $this->property1 = null;
        $this->c_id = false;
        $this->property2 = false;
        $this->createLog('پیشنهاد شگفت انگیز','admin/categorypage', $this->product_id,'ایجاد');
        $this->emit('toast', 'success', ' پیشنهاد شگفت انگیز با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function updateCategoryDisable($id)
    {
//        $category2 = DB::connection('mysql-category')->table('category_amazing')
        $category2 = DB::table('category_amazing')
            ->where('id', $id)->first();
//        $category = DB::connection('mysql-category')->table('category_amazing')
        $category = DB::table('category_amazing')
            ->where('id', $id)->limit($id);
        $category->update([
            'status' => 0
        ]);
        $this->createLog('وضعیت پیشنهاد شگفت انگیز','admin/categorypage', $category2->category_id,'غیرفعال');
        $this->emit('toast', 'success', 'وضعیت پیشنهاد شگفت انگیز با موفقیت غیرفعال شد.');
    }

    public function updateCategoryEnable($id)
    {
//        $category2 = DB::connection('mysql-category')->table('category_amazing')
        $category2 = DB::table('category_amazing')
            ->where('id', $id)->first();
//        $category = DB::connection('mysql-category')->table('category_amazing')
        $category = DB::table('category_amazing')
            ->where('id', $id)->limit($id);
        $category->update([
            'status' => 1
        ]);
        $this->createLog('وضعیت پیشنهاد شگفت انگیز','admin/category/vehicle', $category2->category_id,'فعال');
        $this->emit('toast', 'success', 'وضعیت پیشنهاد شگفت انگیز با موفقیت فعال شد.');
    }

    public function deleteCategory($id)
    {
//        $amazing2 = DB::connection('mysql-category')->table('category_amazing')
        $amazing2 = DB::table('category_amazing')
            ->where('id', $id)->first();
//        $amazing = DB::connection('mysql-category')->table('category_amazing')
        $amazing = DB::table('category_amazing')
            ->where('id', $id)->limit($id);
        $amazing->delete();
        $this->createLog(' پیشنهاد شگفت انگیز','admin/categorypage', $amazing2->category_id,'حذف');
        $this->emit('toast', 'success', ' پیشنهاد شگفت انگیز با موفقیت حذف شد.');

    }

    public function render()
    {

        $specialProducts = $this->readyToLoad ?
//            DB::connection('mysql-category')->table('category_amazing')
            DB::table('category_amazing')
                ->where('category_id', 'LIKE', "%{$this->search}%")->
                orWhere('subCategory_id', 'LIKE', "%{$this->search}%")->
                orWhere('childCategory_id', 'LIKE', "%{$this->search}%")->
                orWhere('product_id', 'LIKE', "%{$this->search}%")->
                orWhere('id', $this->search)->
                latest()->paginate(15) : [];
        return view('livewire.admin.categorypage.amazing',compact('specialProducts'));
    }
}

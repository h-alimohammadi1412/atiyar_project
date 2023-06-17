<?php

namespace App\Http\Livewire\Admin\Categorypage\Vehicle;

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
    public $property1;
    public $property2;


    public function categoryForm()
    {

        DB::connection('mysql-vehicle')->table('category_vehicle_amazing')->insert([
            'product_id' => $this->product_id,
            'category_id' => $this->category_id,
            'subCategory_id' => $this->subCategory_id,
            'childCategory_id' => $this->childCategory_id,
            'status' => $this->status,
            'property1' =>  $this->property1,
            'property2' =>  $this->property2,
        ]);

        $this->product_id = null;
        $this->category_id = null;
        $this->subCategory_id = null;
        $this->childCategory_id = null;
        $this->status = false;
        $this->property1 = null;
        $this->property2 = false;
        $this->createLog('پیشنهاد شگفت انگیز','admin/categorypage/vehicle', $this->product_id,'ایجاد');
        alert()->success('پیشنهاد شگفت انگیز با موفقیت ایجاد شد.', ' پیشنهاد شگفت انگیز با موفقیت ایجاد شد.');

    }
    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function updateCategoryDisable($id)
    {
        $category2 = DB::connection('mysql-vehicle')->table('category_vehicle_amazing')
            ->where('id',$id)->first();
        $category = DB::connection('mysql-vehicle')->table('category_vehicle_amazing')
            ->where('id',$id)->limit($id);
        $category->update([
            'status' => 0
        ]);
        $this->createLog('وضعیت پیشنهاد شگفت انگیز','admin/categorypage/vehicle', $category2->category_id,'غیرفعال');
        alert()->success('وضعیت پیشنهاد شگفت انگیز با موفقیت غیرفعال شد.', 'وضعیت پیشنهاد شگفت انگیز با موفقیت غیرفعال شد.');
    }

    public function updateCategoryEnable($id)
    {
        $category2 = DB::connection('mysql-vehicle')->table('category_vehicle_amazing')
            ->where('id',$id)->first();
        $category = DB::connection('mysql-vehicle')->table('category_vehicle_amazing')
            ->where('id',$id)->limit($id);
        $category->update([
            'status' => 1
        ]);
        $this->createLog('وضعیت پیشنهاد شگفت انگیز','admin/categorypage/vehicle', $category2->category_id,'فعال');
        alert()->success('وضعیت پیشنهاد شگفت انگیز با موفقیت فعال شد.', 'وضعیت پیشنهاد شگفت انگیز با موفقیت فعال شد.');
    }

    public function deleteCategory($id)
    {
        $amazing2 = DB::connection('mysql-vehicle')->table('category_vehicle_amazing')
            ->where('id',$id)->first();
        $amazing = DB::connection('mysql-vehicle')->table('category_vehicle_amazing')
            ->where('id',$id)->limit($id);
        $amazing->delete();
        $this->createLog(' پیشنهاد شگفت انگیز','admin/categorypage/vehicle', $amazing2->category_id,'حذف');
        alert()->success('پیشنهاد شگفت انگیز با موفقیت حذف شد.', ' پیشنهاد شگفت انگیز با موفقیت حذف شد.');

    }


    public function render()
    {

        $specialProducts = $this->readyToLoad ?
            DB::connection('mysql-vehicle')->table('category_vehicle_amazing')
                ->where('category_id', 'LIKE', "%{$this->search}%")->
                orWhere('subCategory_id', 'LIKE', "%{$this->search}%")->
                orWhere('childCategory_id', 'LIKE', "%{$this->search}%")->
                orWhere('product_id', 'LIKE', "%{$this->search}%")->
                orWhere('id', $this->search)->
                latest()->paginate(15) : [];
        return view('livewire.admin.categorypage.vehicle.amazing',compact('specialProducts'));
    }
}

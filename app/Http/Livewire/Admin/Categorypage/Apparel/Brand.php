<?php

namespace App\Http\Livewire\Admin\Categorypage\Apparel;

use App\Http\Controllers\AdminControllerLivewire;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Log;

class Brand extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $brand_id;
    public $search;


    protected $queryString = ['search'];

    public $readyToLoad = false;


    public function categoryForm()
    {
//        $banner = DB::connection('mysql-apparel')->table('category_apparel_brand')->insert([
        $banner = DB::table('category_apparel_brand')->insert([
            'brand_id' => $this->brand_id,
        ]);
//        $banner2 = DB::connection('mysql-apparel')->table('category_apparel_brand')
        $banner2 = DB::table('category_apparel_brand')
            ->where('brand_id', $this->brand_id)->first();

//        $banner3 = DB::connection('mysql-apparel')->table('category_apparel_brand')
        $banner3 = DB::table('category_apparel_brand')
            ->where('id', $banner2->id)->limit($banner2->id);


        $this->brand_id = null;
        $this->createLog(' محصول ','admin/categorypage/apparel', $this->brand_id,'ایجاد');
        $this->emit('toast', 'success', ' محصول با موفقیت ایجاد شد.');

    }


    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function deleteCategory($id)
    {
//        $banner2 = DB::connection('mysql-apparel')->table('category_apparel_brand')
        $banner2 = DB::table('category_apparel_brand')
            ->where('id', $id)->first();
//        $banner = DB::connection('mysql-apparel')->table('category_apparel_brand')
        $banner = DB::table('category_apparel_brand')
            ->where('id', $id)->limit($id);
        $banner->delete();
        $this->createLog(' محصول ','admin/categorypage/apparel', $banner2->brand_id,'حذف');
        $this->emit('toast', 'success', ' محصول با موفقیت حذف شد.');

    }

    public function render()
    {

//        $brands = $this->readyToLoad ? DB::connection('mysql-apparel')
        $brands = $this->readyToLoad ? DB::table('category_apparel_brand')
            ->where('brand_id', 'LIKE', "%{$this->search}%")->
            orWhere('id', $this->search)->
            latest()->paginate(15) : [];

        return view('livewire.admin.categorypage.apparel.brand',compact('brands'));
    }
}

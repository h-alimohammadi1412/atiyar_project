<?php

namespace App\Http\Livewire\Admin\Categorypage;

use App\Http\Controllers\AdminControllerLivewire;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Log;

class Product extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $product_id;
    public $title_id;
    public $category_id;
    public $subCategory_id;
    public $childCategory_id;
    public $status;
    public $c_id;
    public $search;


    protected $queryString = ['search'];

    public $readyToLoad = false;


    public function categoryForm()
    {
        $banner = DB::table('category_product_swiper')->insert([
//        $banner = DB::connection('mysql-category')->table('category_product_swiper')->insert([
            'title_id' => $this->title_id,
            'product_id' => $this->product_id,
            'category_id' => $this->category_id,
            'subCategory_id' => $this->subCategory_id,
            'childCategory_id' => $this->childCategory_id,
            'c_id' => $this->c_id,
            'status' => $this->status,
        ]);
//        $banner2 = DB::connection('mysql-category')->table('category_product_swiper')
        $banner2 = DB::table('category_product_swiper')
            ->where('title_id', $this->title_id)->first();

        $banner3 = DB::table('category_product_swiper')
//        $banner3 = DB::connection('mysql-category')->table('category_product_swiper')
            ->where('id', $banner2->id)->limit($banner2->id);


        $this->title_id = null;
        $this->product_id = null;
        $this->category_id = null;
        $this->subCategory_id = null;
        $this->c_id = false;
        $this->childCategory_id = null;
        $this->status = false;
        $this->createLog(' محصول ','admin/categorypage', $this->title_id,'ایجاد');
        alert()->success('محصول با موفقیت ایجاد شد.', ' محصول با موفقیت ایجاد شد.');

    }


    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function deleteCategory($id)
    {
//        $banner2 = DB::connection('mysql-category')->table('category_product_swiper')
        $banner2 = DB::table('category_product_swiper')
            ->where('id', $id)->first();
//        $banner = DB::connection('mysql-category')->table('category_product_swiper')
        $banner = DB::table('category_product_swiper')
            ->where('id', $id)->limit($id);
        $banner->delete();
        $this->createLog(' محصول ','admin/categorypage', $banner2->title_id,'حذف');
        alert()->success('محصول با موفقیت حذف شد.', ' محصول با موفقیت حذف شد.');

    }

    public function render()
    {

//        $products = $this->readyToLoad ? DB::connection('mysql-category')
        $products = $this->readyToLoad ? DB::table('category_product_swiper')
            ->where('title_id', 'LIKE', "%{$this->search}%")->
            orWhere('id', $this->search)->
            latest()->paginate(15) : [];
//        $titles = DB::connection('mysql-category')->table('category_title_swiper')->get();
        $titles = DB::table('category_title_swiper')->get();

        return view('livewire.admin.categorypage.product',compact('products','titles'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Categorypage\Apparel;

use App\Http\Controllers\AdminControllerLivewire;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Log;

class Title extends AdminControllerLivewire
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public $title;
    public $link;
    public $search;


    protected $queryString = ['search'];

    public $readyToLoad = false;


    public function categoryForm()
    {
//        $titles = DB::connection('mysql-apparel')->table('category_apparel_title_swiper')->insert([
        $titles = DB::table('category_apparel_title_swiper')->insert([
            'title' => $this->title,
            'link' => $this->link,
        ]);
        $this->title = "";
        $this->link = "";
        $this->createLog(' عناوین','admin/categorypage/apparel', $this->title,'ایجاد');
        alert()->success(' عناوین با موفقیت ایجاد شد.', ' عناوین با موفقیت ایجاد شد.');

    }


    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function deleteCategory($id)
    {
        $banner2 = DB::table('category_apparel_title_swiper')
//        $banner2 = DB::connection('mysql-apparel')->table('category_apparel_title_swiper')
            ->where('id', $id)->first();
//        $banner = DB::connection('mysql-apparel')->table('category_apparel_title_swiper')
        $banner = DB::table('category_apparel_title_swiper')
            ->where('id', $id)->limit($id);
        $banner->delete();
        $this->createLog(' عناوین','admin/categorypage/apparel', $banner2->title,'حذف');
        alert()->success('عناوین با موفقیت حذف شد.', ' عناوین با موفقیت حذف شد.');

    }

    public function render()
    {

//        $titles = $this->readyToLoad ? DB::connection('mysql-apparel')->table('category_apparel_title_swiper')
        $titles = $this->readyToLoad ? DB::table('category_apparel_title_swiper')
            ->where('title', 'LIKE', "%{$this->search}%")->
            orWhere('id', $this->search)->
            latest()->paginate(15) : [];
        return view('livewire.admin.categorypage.apparel.title',compact('titles'));
    }
}

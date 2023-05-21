<?php

namespace App\Http\Livewire\Admin\Categorypage;

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
    public $c_id;
    public $search;


    protected $queryString = ['search'];

    public $readyToLoad = false;


    public function categoryForm()
    {
//        $titles = DB::connection('mysql-category')->table('category_title_swiper')->insert([
        $titles = DB::table('category_title_swiper')->insert([
            'title' => $this->title,
            'link' => $this->link,
            'c_id' => $this->c_id,
        ]);
        $this->title = "";
        $this->link = "";
        $this->c_id = false;
        $this->createLog(' عناوین','admin/category', $this->title,'ایجاد');
        $this->emit('toast', 'success', ' عناوین با موفقیت ایجاد شد.');

    }


    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function deleteCategory($id)
    {
//        $banner2 = DB::connection('mysql-category')->table('category_title_swiper')
        $banner2 = DB::table('category_title_swiper')
            ->where('id', $id)->first();
//        $banner = DB::connection('mysql-category')->table('category_title_swiper')
        $banner = DB::table('category_title_swiper')
            ->where('id', $id)->limit($id);
        $banner->delete();
        $this->createLog(' عناوین','admin/category', $banner2->title,'حذف');
        $this->emit('toast', 'success', ' عناوین با موفقیت حذف شد.');

    }

    public function render()
    {

//        $titles = $this->readyToLoad ? DB::connection('mysql-category')->table('category_title_swiper')
        $titles = $this->readyToLoad ? DB::table('category_title_swiper')
            ->where('title', 'LIKE', "%{$this->search}%")->
            orWhere('id', $this->search)->
            latest()->paginate(15) : [];
        return view('livewire.admin.categorypage.title',compact('titles'));
    }
}

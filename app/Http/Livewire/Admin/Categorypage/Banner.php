<?php

namespace App\Http\Livewire\Admin\Categorypage;

use App\Http\Controllers\AdminControllerLivewire;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Log;

class Banner extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $img;
    public $title;
    public $link;
    public $type;
    public $c_id;
    public $search;


    protected $queryString = ['search'];

    public $readyToLoad = false;


    public function categoryForm()
    {
//        $banner = DB::connection('mysql-category')->table('category_banner')->insert([
        $banner = DB::table('category_banner')->insert([
            'title' => $this->title,
            'link' => $this->link,
            'c_id' => $this->c_id,
            'type' => $this->type,
        ]);
//        $banner2 = DB::connection('mysql-category')->table('category_banner')
        $banner2 = DB::table('category_banner')
            ->where('link',$this->link)->first();

//        $banner3 = DB::connection('mysql-category')->table('category_banner')
        $banner3 = DB::table('category_banner')
            ->where('id',$banner2->id)->limit($banner2->id);

        if ($this->img) {
            $banner3->update([
                'img' => $this->uploadImage('categorypage')
            ]);
        }

        $this->title = "";
        $this->link = "";
        $this->type = false;
        $this->c_id = false;
        $this->img = null;
        $this->createLog(' بنر ','admin/categorypage', $this->title,'ایجاد');
        alert()->success('بنر با موفقیت ایجاد شد.', ' بنر با موفقیت ایجاد شد.');

    }
    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function deleteCategory($id)
    {
//        $banner2 = DB::connection('mysql-category')->table('category_banner')
        $banner2 = DB::table('category_banner')
            ->where('id',$id)->first();
//        $banner = DB::connection('mysql-category')->table('category_banner')
        $banner = DB::table('category_banner')
            ->where('id',$id)->limit($id);
        if ($banner->img) {
            Storage::disk('public')->delete("storage", $banner2->img);
        } $banner->delete();
        $this->createLog('  بنر','admin/categorypage', $banner2->title,'حذف');
        alert()->success(' بنر با موفقیت حذف شد.', ' بنر با موفقیت حذف شد.');

    }
    public function render()
    {

//        $banners = $this->readyToLoad ? DB::connection('mysql-category')->table('category_banner')
        $banners = $this->readyToLoad ? DB::table('category_banner')
            ->where('title', 'LIKE', "%{$this->search}%")->
            orWhere('link', 'LIKE', "%{$this->search}%")->
            orWhere('id', $this->search)->
            latest()->paginate(15) : [];
        return view('livewire.admin.categorypage.banner',compact('banners'));
    }
}

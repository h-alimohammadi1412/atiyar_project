<?php

namespace App\Http\Livewire\Admin\Categorypage\Electronic;

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
    public $search;


    protected $queryString = ['search'];

    public $readyToLoad = false;


    public function categoryForm()
    {
//        $banner = DB::connection('mysql-electronic')->table('category_electronic_banner')->insert([
        $banner = DB::table('category_electronic_banner')->insert([
            'title' => $this->title,
            'link' => $this->link,
            'type' => $this->type,
        ]);
//        $banner2 = DB::connection('mysql-electronic')->table('category_electronic_banner')
        $banner2 = DB::table('category_electronic_banner')
            ->where('link',$this->link)->first();

//        $banner3 = DB::connection('mysql-electronic')->table('category_electronic_banner')
        $banner3 = DB::table('category_electronic_banner')
            ->where('id',$banner2->id)->limit($banner2->id);

        if ($this->img) {
            $banner3->update([
                'img' => $this->uploadImage('categorypage/electronic')
            ]);
        }

        $this->title = "";
        $this->link = "";
        $this->type = false;
        $this->img = null;
        $this->createLog(' بنر ','admin/categorypage/electronic', $this->title,'ایجاد');
        $this->emit('toast', 'success', ' بنر با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function deleteCategory($id)
    {
//        $banner2 = DB::connection('mysql-electronic')->table('category_electronic_banner')
        $banner2 = DB::table('category_electronic_banner')
            ->where('id',$id)->first();
//        $banner = DB::connection('mysql-electronic')->table('category_electronic_banner')
        $banner = DB::table('category_electronic_banner')
            ->where('id',$id)->limit($id);
        if ($banner->img) {
            Storage::disk('public')->delete("storage", $banner2->img);
        }$banner->delete();
        $this->createLog('  بنر','admin/categorypage/electronic', $banner2->title,'حذف');
        $this->emit('toast', 'success', ' بنر با موفقیت حذف شد.');

    }
    public function render()
    {

//        $banners = $this->readyToLoad ? DB::connection('mysql-electronic')->table('category_electronic_banner')
        $banners = $this->readyToLoad ? DB::table('category_electronic_banner')
            ->where('title', 'LIKE', "%{$this->search}%")->
            orWhere('link', 'LIKE', "%{$this->search}%")->
            orWhere('id', $this->search)->
            latest()->paginate(15) : [];
        return view('livewire.admin.categorypage.electronic.banner',compact('banners'));
    }
}

<?php

namespace App\Http\Livewire\Admin\Categorypage\Electronic;

use App\Http\Controllers\AdminControllerLivewire;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Log;

class Slider extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $img;
    public $title;
    public $link;
    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;


    public function categoryForm()
    {
//        $slider = DB::connection('mysql-electronic')->table('category_electronic_slider')->insert([
        $slider = DB::table('category_electronic_slider')->insert([
            'title' => $this->title,
            'link' => $this->link,
            'status' => 1,
        ]);
//        $slider2 = DB::connection('mysql-electronic')->table('category_electronic_slider')
        $slider2 = DB::table('category_electronic_slider')
            ->where('link',$this->link)->first();

//        $slider3 = DB::connection('mysql-electronic')->table('category_electronic_slider')
        $slider3 = DB::table('category_electronic_slider')
            ->where('id',$slider2->id)->limit($slider2->id);
        if ($this->img) {
            $slider3->update([
                'img' => $this->uploadImage('categorypage/electronic')
            ]);
        }

        $this->title = "";
        $this->link = "";
        $this->img = null;
        $this->createLog(' اسلایدر','admin/categorypage/electronic',  $this->title,'ایجاد');
        alert()->success(' اسلایدر با موفقیت ایجاد شد.', ' اسلایدر با موفقیت ایجاد شد.');

    }

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function deleteCategory($id)
    {
//        $slider2 = DB::connection('mysql-electronic')->table('category_electronic_slider')
        $slider2 = DB::table('category_electronic_slider')
            ->where('id',$id)->first();
//        $slider = DB::connection('mysql-electronic')->table('category_electronic_slider')
        $slider = DB::table('category_electronic_slider')
            ->where('id',$id)->limit($id);
        if ($slider->img) {
            Storage::disk('public')->delete("storage", $slider2->img);
        }$slider->delete();
        $this->createLog(' اسلایدر','admin/categorypage/electronic',  $slider2->title,'حذف');
        alert()->success(' اسلایدر با موفقیت حذف شد.', ' اسلایدر با موفقیت حذف شد.');

    }
    public function updateCategoryDisable($id)
    {
//        $slider2 = DB::connection('mysql-electronic')->table('category_electronic_slider')
        $slider2 = DB::table('category_electronic_slider')
            ->where('id',$id)->first();
//        $slider = DB::connection('mysql-electronic')->table('category_electronic_slider')
        $slider = DB::table('category_electronic_slider')
            ->where('id',$id)->limit($id);

        $slider->update([
            'status' => 0
        ]);
        $this->createLog(' اسلایدر','admin/categorypage/electronic',  $slider2->title,'غیرفعال');
        alert()->success('اسلایدر با موفقیت غیرفعال شد.', 'اسلایدر با موفقیت غیرفعال شد.');
    }

    public function updateCategoryEnable($id)
    {
//        $slider2 = DB::connection('mysql-electronic')->table('category_electronic_slider')
        $slider2 = DB::table('category_electronic_slider')
            ->where('id',$id)->first();
//        $slider = DB::connection('mysql-electronic')->table('category_electronic_slider')
        $slider = DB::table('category_electronic_slider')
            ->where('id',$id)->limit($id);
        $slider->update([
            'status' => 1
        ]);
        $this->createLog(' اسلایدر','admin/categorypage/electronic',  $slider2->title,'فعال');
        alert()->success('اسلایدر با موفقیت فعال شد.', 'اسلایدر با موفقیت فعال شد.');
    }

    public function render()
    {

//        $sliders = $this->readyToLoad ? DB::connection('mysql-electronic')->table('category_electronic_slider')
        $sliders = $this->readyToLoad ? DB::table('category_electronic_slider')
            ->where('title', 'LIKE', "%{$this->search}%")->
        orWhere('link', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.categorypage.electronic.slider',compact('sliders'));
    }
}

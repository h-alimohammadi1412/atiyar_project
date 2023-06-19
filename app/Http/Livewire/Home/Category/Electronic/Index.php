<?php

namespace App\Http\Livewire\Home\Category\Electronic;


use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminControllerLivewire;

class Index extends AdminControllerLivewire
{
    public function render()
    {
        //        $users = DB::connection('mysql-electronic')->table('users')->get();

//        $category_name = request()->segment(count(request()->segments()));
        $category_name = request()->path();
        $category = Category::where('link', '/' . $category_name . '/')->first();
//        $sliders = DB::connection('mysql-electronic')->table('category_electronic_slider')
        $sliders = DB::table('category_electronic_slider')
            ->where('status',1)->get();
//        $amazings = DB::connection('mysql-electronic')->table('category_electronic_amazing')
        $amazings = DB::table('category_electronic_amazing')
            ->get();
//        $banners = DB::connection('mysql-electronic')->table('category_electronic_banner')->
        $banners = DB::table('category_electronic_banner')->
         where('type',0)->get();
//        $bigbanners = DB::connection('mysql-electronic')->table('category_electronic_banner')->
        $bigbanners = DB::table('category_electronic_banner')->
          where('type',1)->take(2)->get();
//        $bigbanners2 = DB::connection('mysql-electronic')->table('category_electronic_banner')->
        $bigbanners2 = DB::table('category_electronic_banner')->
          where('type',1)->skip(2)->take(2)->get();
//        $title_count = DB::connection('mysql-electronic')->table('category_electronic_title_swiper')->
        $title_count = DB::table('category_electronic_title_swiper')->
          get();
//        $products =  DB::connection('mysql-electronic')->table('category_electronic_product_swiper')->
        $products =  DB::table('category_electronic_product_swiper')->
        where('status',1)->get();

        return view('livewire.home.category.electronic.index',
            compact('category','sliders','amazings','banners',
                'bigbanners','bigbanners2','title_count','products'))->layout('layouts.home');
    }
}

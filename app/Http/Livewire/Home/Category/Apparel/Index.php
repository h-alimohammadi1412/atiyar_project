<?php

namespace App\Http\Livewire\Home\Category\Apparel;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminControllerLivewire;

class Index extends AdminControllerLivewire
{
    public function render()
    {
        $category_name = request()->path();

        $category = Category::where('link', '/' . $category_name . '/')->first();

//        $sliders = DB::connection('mysql-apparel')->table('category_apparel_slider')
        $sliders = DB::table('category_apparel_slider')
            ->where('status', 1)->get();
//        $amazings = DB::connection('mysql-apparel')->table('category_apparel_amazing')
        $amazings = DB::table('category_apparel_amazing')
            ->get();
//        $banners = DB::connection('mysql-apparel')->table('category_apparel_banner')->
        $banners = DB::table('category_apparel_banner')->
        where('type', 0)->take(4)->get();
//        $bigbanners = DB::connection('mysql-apparel')->table('category_apparel_banner')->
        $bigbanners = DB::table('category_apparel_banner')->
        where('type', 1)->take(2)->get();
//        $bigbanners2 = DB::connection('mysql-apparel')->table('category_apparel_banner')->
        $bigbanners2 = DB::table('category_apparel_banner')->
        where('type', 1)->skip(2)->take(2)->get();
//        $title_count = DB::connection('mysql-apparel')->table('category_apparel_title_swiper')->
        $title_count = DB::table('category_apparel_title_swiper')->
        get();
//        $products = DB::connection('mysql-apparel')->table('category_apparel_product_swiper')->
        $products = DB::table('category_apparel_product_swiper')->
        where('status', 1)->get();
//        $brands = DB::connection('mysql-apparel')->table('category_apparel_brand')->get();
        $brands = DB::table('category_apparel_brand')->get();

        return view('livewire.home.category.apparel.index',
            compact('category', 'sliders', 'amazings', 'banners',
            'bigbanners', 'bigbanners2', 'title_count', 'products','brands'))->layout('layouts.home');
    }
}

<?php

namespace App\Http\Livewire\Home\Category;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class Index extends AdminControllerLivewire
{

    public $category;
    public function mount(){
        $this->category= Category::where('link', 'electronic-devices')->first();
    }
    public function render()
    {
        $products = Product::where('category_id', $this->category->id)->get();
        // $sliders = DB::connection('mysql-category')->table('category_slider')->
        //     where('c_id',$category->id)->where('status', 1)->get();

        // $amazings = DB::connection('mysql-category')->table('category_amazing')->
        //    where('c_id',$category->id) ->get();

        // $banners = DB::connection('mysql-category')->table('category_banner')->
        // where('type', 0)-> where('c_id',$category->id) ->get();

        // $bigbanners = DB::connection('mysql-category')->table('category_banner')->
        // where('type', 1)->where('c_id',$category->id) ->take(2)->get();
        // $bigbanners2 = DB::connection('mysql-category')->table('category_banner')->
        // where('type', 1)->skip(2)->where('c_id',$category->id) ->take(2)->get();
        // $title_count = DB::connection('mysql-category')->table('category_title_swiper')->
        // where('c_id',$category->id) -> get();
        // $products = DB::connection('mysql-category')->table('category_product_swiper')->
        // where('c_id',$category->id) -> where('status', 1)->get();
        // $brands = DB::connection('mysql-category')->table('category_brand')->
        // where('c_id',$category->id) ->get();
        // dd($this->category);

        return view('livewire.home.category.base.index',compact('products'))->layout('layouts.home1');
    }
}
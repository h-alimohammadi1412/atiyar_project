<?php

namespace App\Http\Livewire\Home\Category;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;


class Index extends AdminControllerLivewire
{

    public $category;
    public $color_ids = [];
    public $brand_ids = [];
    public $ddd = 'zzzzzz';

    protected $listeners = ['changeColor' => 'changeBrand'];
    public function mount()
    {
        $this->category = Category::with('getChild.getChild')->where('link', 'electronic-devices')->first();
    }
    public function changeColor($id)
    {
        if (in_array($id, $this->color_ids)) {
            unset($this->color_ids[$id]);
        } else {
            $this->color_ids[$id] = $id;
        }
    }
    public function changeBrand($id)
    {
        if (in_array($id, $this->brand_ids)) {
            unset($this->brand_ids[$id]);
        } else {
            $this->brand_ids[$id] = $id;
        }
    }
    public function render()
    {
        $maxPrice = Product::where(['category_id' => $this->category->id, 'status_product' => 1])->orderBy('price', 'ASC')->first()->price;
        $res = Product::with(['category', 'brand'])->where('category_id', $this->category->id);

        if (sizeof($this->color_ids) > 0) {
            $res->with('color', function ($query) {
                return $query->whereIn('color_id', $this->color_ids);
            });
        }
        if (sizeof($this->brand_ids) > 0) {
            $res->whereIn('brand_id', $this->brand_ids);
        }
        $res = $res->get();

        $products = [];
        if (sizeof($this->color_ids) > 0) {
            foreach ($res as $product) {
                if (!empty($product->color->all())) {
                    array_push($products, $product);
                }
            }
        } else {
            $products = $res;
        }
        
        $brands = Brand::all();
        $colors = Color::all();
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
        // dd($this->category->getChild);

        return view('livewire.home.category.index', compact('products', 'maxPrice', 'brands', 'colors'))->layout('layouts.home1');
    }
}
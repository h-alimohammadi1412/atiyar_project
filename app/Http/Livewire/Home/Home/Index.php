<?php

namespace App\Http\Livewire\Home\Home;

use App\Mail\SellerRegister;
use App\Mail\UserRegister;
use App\Models\Favorite;
use App\Models\FooterLinkTitle;
use App\Models\NewsLetter;
use App\Models\Notification as ModelsNotification;
use App\Models\Product;
use App\Models\SMS;
use App\Models\User;
use App\Services\Notification as ServicesNotification;
use App\Services\Notification\Notification;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Mail;

class Index extends Component
{

    public function favoriteProduct($id)
    {
        if(auth()->check()){
            $favorites = Favorite::where('product_id', $id)->where('user_id', auth()->user()->id)->first();
            if ($favorites) {
                $favorites->delete();
                $this->emit('toast', 'success', 'محصول از علاقه مندی ها حذف شد.');
            } else {
                Favorite::create([
                    'product_id' => $id,
                    'user_id' => auth()->user()->id
                ]);
                $this->emit('toast', 'success', 'محصول به علاقه مندی ها اضافه شد.');
            }
        }else{
            $this->emit('toast', 'success', 'برای اضافه کردن به علاقه مندی ها باید وارد شوید.');
        }
    }
    public function render()
    {
        auth()->loginUsingId(1);
        if (!cache('categories')) {
            $categories = \App\Models\Category::where('parent_id', 0)->with('getChild.getChild')->get();
            cache(['categories' => $categories], now()->addDay(29));
        }
        if (!cache('siteHeader')) {
            $siteHeader = \App\Models\SiteHeader::get();
            cache(['siteHeader' => $siteHeader], now()->addDay(29));
        }
        if (!cache('footerLinkTitle')) {
            $footerLinkTitle = \App\Models\FooterLinkTitle::with('getPage')->get();
            cache(['footerLinkTitle' => $footerLinkTitle], now()->addDay(29));
        }
        if (!cache('footerLinkOne')) {
            $footerLinkOne = \App\Models\FooterLinkOne::with('getPage')->get();
            cache(['footerLinkOne' => $footerLinkOne], now()->addDay(29));
        }
        if (!cache('footerInnerBox')) {
            $footerInnerBox = \App\Models\FooterInnerBox::with('getPage')->where('top', 1)->get();
            cache(['footerInnerBox' => $footerInnerBox], now()->addDay(29));
        }
        if (!cache('social')) {
            $social = \App\Models\Social::all();
            cache(['social' => $social], now()->addDay(29));
        }
        if (!cache('footerTitle')) {
            $footerTitle = \App\Models\FooterTitle::get();
            cache(['footerTitle' => $footerTitle], now()->addDay(29));
        }
        if (!cache('slider')) {
            $slider = \App\Models\Slider::all();
            cache(['slider' => $slider], now()->addDay(29));
        }
        if (!cache('specialProduct')) {
            $specialProduct = \App\Models\SpecialProduct::with(['product', 'category'])->get();
            cache(['specialProduct' => $specialProduct], now()->addDay(29));
        }
        if (!cache('productsGrid')) {
            $productsGrid = \App\Models\Product::orderBy('view', 'ASC')->limit(8)->get();
            cache(['productsGrid' => $productsGrid], now()->addDay(29));
        }
        if (!cache('featuredCategory')) {
            $categoryIndex = \App\Models\TitleCategoryIndex::find(1);
            $featuredCategory = \App\Models\CategoryIndex::with('product', 'category')->where('title_id', $categoryIndex->id)->limit(12)->get();
            cache(['featuredCategory' => $featuredCategory], now()->addDay(29));
        }
        if (!cache('mostVisited')) {
            $mostVisited = \App\Models\Product::with('category')->orderBy('view', 'ASC')->get();
            cache(['mostVisited' => $mostVisited], now()->addDay(29));
        }
        if (!cache('footerLinkThree')) {
            $footerLinkThree = \App\Models\FooterLinkThree::with('getPage')->get();
            cache(['footerLinkThree' => $footerLinkThree], now()->addDay(29));
        }




        // dd(cache('siteHeader'));

        // auth()->loginUsingId(1);
        // $ip = Request::ip();
        // if (auth()->user()) {
        //     $no = ModelsNotification::where('user_id', auth()->user()->id)->
        //         where('type', 'ip')->get()->last();

        //     if ($no != null) {

        //         if ($no->ip != $ip) {

        //             $type = 'ip';
        //             $ip = Request::ip();
        //             // Notification::create([
        //             //     'user_id' => auth()->user()->id,
        //             //     'type' => $type,
        //             //     'sms' => 0,
        //             //     'email' => 0,
        //             //     'ip' => $ip,
        //             //     'system' => 1,
        //             //     'text' => ' هشدار: یک ورود موفق با آی پی ' . $ip . ' در سیستم ثبت شده است. ',
        //             // ]);
        //         }

        //     } elseif ($no == null) {

        //         $type = 'ip';
        //         $ip = Request::ip();
        //         // Notification::create([
        //         //     'user_id' => auth()->user()->id,
        //         //     'type' => $type,
        //         //     'sms' => 0,
        //         //     'ip' => $ip,
        //         //     'email' => 0,
        //         //     'system' => 1,
        //         //     'text' => ' هشدار: یک ورود موفق با آی پی ' . $ip . ' در سیستم ثبت شده است. ',
        //         // ]);
        //     }


        // }



        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is my page description');
        SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('http://current.url.com');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Homepage');
        TwitterCard::setSite('@LuizVinicius73');

        JsonLd::setTitle('Homepage');
        JsonLd::setDescription('This is my page description');
        JsonLd::addImage('https://codecasts.com.br/img/logo.jpg');

        // OR

        SEOTools::setTitle('Home');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('http://current.url.com');
        SEOTools::setCanonical('https://codecasts.com.br/lesson');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage('https://codecasts.com.br/img/logo.jpg');
        //        $this->seo()
//            ->setTitle(' ')
//            ->setDescription('هر آنچه که نیاز دارید با بهترین قیمت از دیجی‌کالا بخرید! جدیدترین انواع گوشی موبایل، لپ تاپ، لباس، لوازم آرایشی و بهداشتی، کتاب، لوازم خانگی، خودرو و... با امکان تعویض و مرجوعی آسان | ✓ارسال رايگان ✓پرداخت در محل ✓ضمانت بازگشت کالا - برای خرید کلیک کنید!')
//        ;
//        SEOMeta::addKeyword(['فروشگاه اینترنتی', 'خرید آنلاین', 'تبلت', 'لپ تاپ', 'تلویزیون', 'کامپیوتر', 'دوربین', 'کتاب','لوازم' , 'عطر و ادکلن', 'فروش اینترنتی','دیجی‌کالا']);
        return view('livewire.home.home.index1')->layout('layouts.home1');
    }
}

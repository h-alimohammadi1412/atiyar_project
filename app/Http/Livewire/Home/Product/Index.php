<?php

namespace App\Http\Livewire\Home\Product;


use App\Models\Cart;
use App\Models\Gallery;
use App\Models\Attribute;
use App\Models\ProductColor;
use App\Models\Color;
use App\Models\Comment;
use App\Models\Compare;
use App\Models\Favorite;
use App\Models\Notification;
use App\Models\Observed;
use App\Models\PriceDate;
use App\Models\Product;
use App\Models\ProductSeller;
use App\Models\Rate;
use App\Models\Review;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\AdminControllerLivewire;
use Stevebauman\Location\Facades\Location;

class Index extends AdminControllerLivewire
{
    public $product;
    public $product_count = 1;
    public $product_seller_id;
    public $product_seller_selected;
    public $addToCart = false;

    public $color;
    public $comment;
    public $vendor_new;
    public $new_price;
    public $show_form_notification = false;
    public $notification_show = false;
    public $favoriteProduct = false;
    public $observedProduct = false;
    public $queryString = ['filters'];
    public Notification $notification;
    //    public Comment $comment;
    public $readyToLoad = false;

    public array $filterOptions = [
        'like' => ['1'],
        'parent_a' => ['1'],
        'parent_b' => ['0'],
        'my_q' => ['1'],
    ];
    public array $filters = array();
    public array $filterToMerge = [
        'like' => [],
        'parent_a' => [],
        'parent_b' => [],
        'my_q' => [],
    ];
    public $orderSelect;
    public $orderBy = [
        'key' => 'created_at',
        'direction' => 'desc'
    ];

    public function mount($id,Request $request)
    {

        $this->product = Product::with('category', 'brand')->where('id', $id)->firstOrFail();
        $this->product_seller_selected = ProductSeller::where(['product_id' => $id, 'status' => 1])->orderBy('discount_price', 'ASC')->first();
        if (auth()->check()) {
            $favorite = Favorite::where('product_id', $id)->where('user_id', auth()->user()->id)->first();
            $favorite ? $this->favoriteProduct = true : $this->favoriteProduct = false;

            $notification = Notification::where('product_id', $id)->where('user_id', auth()->user()->id)->first();
            if ($notification) {
                $this->notification_show = true;
                // $this->notification = $notification;
            } else {
                $this->notification_show = false;
                // $this->notification->system = true;
            }
            if ($this->product_seller_selected) {
                $ps = Cart::where(['product_seller_id' => $this->product_seller_selected->id, 'user_id' => auth()->user()->id])->first();
                if ($ps) {
                    $this->addToCart = true;
                } else {
                    $this->addToCart = false;
                }
            }

        }else{
            if ($this->product_seller_selected) {
                $ip = $request->ip();
                $ps = Cart::where(['product_seller_id' => $this->product_seller_selected->id, 'ip' => $ip])->first();
                if ($ps) {
                    $this->addToCart = true;
                } else {
                    $this->addToCart = false;
                }
            }
        }
        $this->notification = new Notification();
    }

    protected $rules = [
        'notification.sms' => 'nullable',
        'notification.email' => 'nullable',
        'notification.system' => 'nullable',
        'comment.comment' => 'nullable',
    ];

    public function updated($sms)
    {
        $this->validateOnly($sms);
    }

    public function likequestion($id)
    {
        if (auth()->user()) {
            $com = Comment::find($id);
            $rate = Rate::where('comment_id', $id)->where('user_id', auth()->user()->id)
                ->where('product_id', $com->product_id)->first();
            if ($rate) {
                $rate->delete();
                alert()->success(' امتیاز شما حذف شد.', ' امتیاز شما حذف شد.');
            } else {
                Rate::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $com->product_id,
                    'comment_id' => $id,
                    'like' => 1,
                ]);
            }
            alert()->success('امتیاز شما ثبت شد.', ' امتیاز شما ثبت شد.');
        } else {
            return $this->redirect('/login');
        }
    }

    public function reportquestion($id)
    {
        if (auth()->user()) {
            $com = Comment::find($id);

            if ($com->report == 1) {
                alert()->success(' گزارش شما ثبت شد.', ' گزارش شما ثبت شد.');
            } else {
                $com->update([
                    'report' => 1
                ]);
            }
            alert()->success(' گزارش شما ثبت شد.', ' گزارش شما ثبت شد.');
        } else {
            return $this->redirect('/login');
        }
    }


    public function likeReview($id)
    {
        if (auth()->user()) {
            $review = Review::find($id);
            $review->update([
                'liked' => 1,
                'dislike' => 0
            ]);
            $rate = Rate::where('review_id', $id)->where('user_id', auth()->user()->id)
                ->where('product_id', $review->product_id)->first();
            if ($rate) {
                $rate->delete();
                alert()->success(' امتیاز شما حذف شد.', ' امتیاز شما حذف شد.');
            } else {
                Rate::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $review->product_id,
                    'review_id' => $id,
                    'like' => 1,
                ]);
            }

            alert()->success(' امتیاز شما ثبت شد.', ' امتیاز شما ثبت شد.');
        } else {
            return $this->redirect('/login');
        }
    }

    public function dislikeReview($id)
    {
        if (auth()->user()) {
            $review = Review::find($id);
            $review->update([
                'liked' => 0,
                'dislike' => 1
            ]);
            alert()->success(' امتیاز شما ثبت شد.', ' امتیاز شما ثبت شد.');
        } else {
            return $this->redirect('/login');
        }
    }

    public function reportReview($id)
    {
        if (auth()->user()) {
            $review = Review::find($id);


            if ($review->report == 1) {
                alert()->success('گزارش شما ثبت شد.', ' گزارش شما ثبت شد.');
            } else {
                $review->update([
                    'report' => 1,
                ]);
            }
            alert()->success(' گزارش شما ثبت شد.', ' گزارش شما ثبت شد.');
        } else {
            return $this->redirect('/login');
        }
    }


    public function addQuestion()
    {
       // dd('addQuestion');
        if (auth()->user()) {
            Comment::create([
                'user_id' => auth()->user()->id,
                'product_id' => $this->product->id,
                'comment' => $this->comment,
                'like' => 0,
                'report' => 0,
                'parent' => 0,
                'status' => 0,
            ]);
            alert()->success('نظر شما با موفقیت ثبت شد و پس از تایید مدیریت نمایش داده خواهد شد.', ' نظر شما با موفقیت ثبت شد و پس از تایید مدیریت نمایش داده خواهد شد.');

            return back();
        } else {
            return $this->redirect('/login');
        }
    }

    public function addToCart($id, Request $request)
    {
        // $cartProductSeller = null;
        $userIp = $request->ip();

        if (auth()->check()) {
            // dd(auth()->user()->id);
            $cartProductSeller = Cart::where(['product_seller_id' => $id, 'user_id' => auth()->user()->id])->first();
        } else {
            $cartProductSeller = Cart::where(['product_seller_id' => $id, 'ip' => $userIp])->first();
        }
        // dd($cartProductSeller);

        if ($cartProductSeller) {
            $this->addToCart = true;
        } else {
            if ($userIp == '127.0.0.1') {
                if (auth()->user()) {
                    $cart = Cart::create([
                        // 'ip' => $userIp,
                        'user_id' => auth()->user()->id,
                        'product_seller_id' => $this->product_seller_selected->id,
                        'product_id' => $this->product_seller_selected->product_id,
                        'count' =>  $this->product_count,
                        'product_price' => $this->product_seller_selected->price,
                        'product_price_discount' => $this->product_seller_selected->discount_price,
                        'product_color' => $this->product_seller_selected->color_id,
                        'product_vendor' => $this->product_seller_selected->vendor_id,
                        'product_warranty' => $this->product_seller_selected->warranty_id,
                    ]);
                    $this->addToCart = true;
                } else {
                    $cart = Cart::create([
                        'ip' => $userIp,
                        'product_seller_id' => $this->product_seller_selected->id,
                        'product_id' => $this->product_seller_selected->product_id,
                        'count' => $this->product_count,
                        'product_price' => $this->product_seller_selected->price,
                        'product_price_discount' => $this->product_seller_selected->discount_price,
                        'product_color' => $this->product_seller_selected->color_id,
                        'product_vendor' => $this->product_seller_selected->vendor_id,
                        'product_warranty' => $this->product_seller_selected->warranty_id,
                    ]);
                    $this->addToCart = true;
                }
            } else {
                $userIp2 = $request->ip();
                $location = Location::get($userIp2);
                if (auth()->user()) {
                    $cart = Cart::create([
                        'user_id' => auth()->user()->id,
                        'ip' => $userIp2,
                        'product_seller_id' => $this->product_seller_selected->id,
                        'product_id' => $this->product_seller_selected->product_id,
                        'count' => 1,
                        'product_price' => $this->product_seller_selected->price,
                        'product_price_discount' => $this->product_seller_selected->discount_price,
                        'product_color' => $this->product_seller_selected->color_id,
                        'product_vendor' => $this->product_seller_selected->vendor_id,
                        'product_warranty' => $this->product_seller_selected->warranty_id,
                        'countryName' => $location->countryName,
                        'regionName' => $location->regionName,
                        'cityName' => $location->cityName,
                        'countryCode' => $location->countryCode,
                        'regionCode' => $location->regionCode,
                        'zipCode' => $location->zipCode,
                        'areaCode' => $location->areaCode,
                        'latitude' => $location->latitude,
                        'longitude' => $location->longitude,
                    ]);
                    $this->addToCart = true;
                } else {
                    $cart = Cart::create([
                        'ip' => $userIp2,
                        'product_seller_id' => $this->product_seller_selected->id,
                        'product_id' => $this->product_seller_selected->product_id,
                        'count' => 1,
                        'product_price' => $this->product_seller_selected->price,
                        'product_price_discount' => $this->product_seller_selected->discount_price,
                        'product_color' => $this->product_seller_selected->color_id,
                        'product_vendor' => $this->product_seller_selected->vendor_id,
                        'product_warranty' => $this->product_seller_selected->warranty_id,
                        'countryName' => $location->countryName,
                        'regionName' => $location->regionName,
                        'cityName' => $location->cityName,
                        'countryCode' => $location->countryCode,
                        'regionCode' => $location->regionCode,
                        'zipCode' => $location->zipCode,
                        'areaCode' => $location->areaCode,
                        'latitude' => $location->latitude,
                        'longitude' => $location->longitude,
                    ]);
                    $this->addToCart = true;
                }
            }
        }
    }
    public function addToCartProductSeller($id)
    {
        $productSeller = ProductSeller::find($id);
        $carts = Cart::where('product_seller_id', $id)->first();
        $userIp = Request::ip();
        if ($carts) {
            $carts->update([
                'count' => $carts->count + 1,
            ]);
        }
    }
    public function loadComment()
    {
        $this->readyToLoad = true;
    }


    public function changeColor($id)
    {
        $color = Color::find($id);
        $this->color = $color->name;
    }

    public function changeProductDetail($id)
    {
        $seller = ProductSeller::where('id', $id)->first();

        $this->vendor_new = $seller;
    }

    public function showNotificationForm()
    {
        if (auth()->check()) {
            $this->show_form_notification = true;
        } else {
            return redirect('login');
        }
    }
    public function notificationReModal($id)
    {
        $this->validate();
        $notification = Notification::where('product_id', $this->product->id)->where('user_id', auth()->user()->id)->first();
        if ($notification) {

            if ($this->notification->sms == null && $this->notification->email == null && $this->notification->system == null) {
                $notification->delete();
                $this->show_form_notification = false;
                $this->notification_show = false;
            } else {
                $notification->update([
                    'user_id' => auth()->user()->id,
                    'product_id' => $this->product->id,
                    'sms' => $this->notification->sms ? 1 : 0,
                    'email' => $this->notification->email ? 1 : 0,
                    'system' => $this->notification->system ? 1 : 0,
                    'type' => 'موجود شدن',
                ]);
                $this->notification_show = true;
                $this->show_form_notification = false;
            }
        } else {
            Notification::create([
                'user_id' => auth()->user()->id,
                'product_id' => $this->product->id,
                'sms' => $this->notification->sms ? 1 : 0,
                'email' => $this->notification->email ? 1 : 0,
                'system' => $this->notification->system ? 1 : 0,
                'type' => 'موجود شدن',
            ]);
            $this->notification_show = true;
            $this->show_form_notification = false;
        }
        alert()->success(' محصول ثبت شد و در صورت موجود بودن با روش های انتخابی اطلاع رسانی خواهد شد.', ' محصول ثبت شد و در صورت موجود بودن با روش های انتخابی اطلاع رسانی خواهد شد.');
    }

    public function favoriteProduct($id)
    {
        if (auth()->check()) {
            $favorites = Favorite::where('product_id', $id)->where('user_id', auth()->user()->id)->first();
            if ($favorites) {
                $favorites->delete();
                alert()->success('محصول از علاقه مندی ها حذف شد.', 'محصول از علاقه مندی ها حذف شد.');
                $this->product->id == $id ? $this->favoriteProduct = false : null;
            } else {
                Favorite::create([
                    'product_id' => $id,
                    'user_id' => auth()->user()->id
                ]);

                $this->product->id == $id ? $this->favoriteProduct = true : null;
                alert()->success('محصول به علاقه مندی ها اضافه شد.', 'محصول به علاقه مندی ها اضافه شد.');
            }
        } else {
            return $this->redirect('login');
        }
    }
    public function observedProduct($id)
    {
        if (auth()->check()) {
            $observed = Observed::where('product_id', $id)->where('user_id', auth()->user()->id)->first();
            if ($observed) {
                $observed->delete();
                alert()->success('محصول از اطلاع رسانی ها حذف شد.', 'محصول از اطلاع رسانی ها حذف شد.');
                $this->observedProduct = false;
            } else {
                Observed::create([
                    'product_id' => $id,
                    'user_id' => auth()->user()->id
                ]);

                $this->observedProduct = true;
                alert()->success('محصول به علاقه مندی ها اضافه شد.', 'محصول به علاقه مندی ها اضافه شد.');
            }
        } else {
            return $this->redirect('login');
        }
    }
    public function compareAdd($id)
    {
        if (auth()->user()) {
            //dd(Compare::where('user_id',auth()->user()->id)->first());
            if (Compare::where('user_id', auth()->user()->id)->first()) {
                if (Compare::where('product_id', $id)->where('user_id', auth()->user()->id)->first() == null) {
                    $com = Compare::create([
                        'user_id' => auth()->user()->id,
                        'product_id' => $id,
                    ]);
                    $first = Compare::where('user_id', auth()->user()->id)->first();
                    $url = '/compare/dkp-' . $first->product_id . '/dkp-' . $id;
                    return $this->redirect($url);
                } else {
                    return $this->redirect(route('compare.step1', $id));
                }
            } else {
                Compare::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $id,
                ]);

                return $this->redirect(route('compare.step1', $id));
            }
        } else {
            $this->redirect('/login');
        }
    }

    public function ProductSellerSelected($id,Request $request)
    {
        $this->product_seller_selected = ProductSeller::find($id);
        if(auth()->check()){
            $ps = Cart::where(['product_seller_id' => $id, 'user_id' => auth()->user()->id])->first();
            if ($ps) {
                $this->addToCart = true;
            } else {
                $this->addToCart = false;
            }
        }else{
            $ip = $request->ip();
            $ps = Cart::where(['product_seller_id' => $id, 'ip' => $ip])->first();
            if ($ps) {
                $this->addToCart = true;
            } else {
                $this->addToCart = false;
            }
        }
        $this->product_count = 1;
    }
    public function render()
    {



        $product = $this->product;
        $productGallerys = Gallery::where(['product_id' => $product->id, 'status' => 1])->get();
        $productSellers = ProductSeller::with(['color', 'user', 'warranty'])->where(['product_id' => $product->id, 'status' => 1])->orderBy('discount_price', 'ASC')->get();
        $productCategories = Product::with(['category', 'attributes'])->where(['category_id' => $product->category_id])->limit(10)->get();
        $productAttributes = Attribute::with([
            'getChild' => [
                'getvalue' => function ($query) {
                    return $query->where('product_id', $this->product->id);
                }
            ]
        ])->has('getChild.getvalue')->where(['category_id' => $product->category_id, 'parent' => 0])->get();
        // dd($productAttributes);

        $productGallerys = Gallery::where(['product_id' => $product->id, 'status' => 1])->get();


        if (auth()->check()) {
            $userhistory = \App\Models\UserHistory::where('user_id', auth()->user()->id)->where('product_id', $product->id)->first();

            if ($userhistory == null) {
                \App\Models\UserHistory::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $product->id
                ]);
            }
        }

        $c = Comment::where('status', 1)->where('product_id', $product->id)->where('parent', 0)->latest()->get();
        // dd($c);


        // dd($productAttributes);

        // $productSeller = ProductSeller::where('product_id', $product->id)->get();
        // $productSeller = $productSeller->unique('color_id');
        $productSeller_max_price = ProductSeller::where('product_id', $product->id)->orderBy('discount_price', 'ASC')->get();

        $productSeller_min_price_first = ProductSeller::where('product_id', $product->id)->orderBy('discount_price', 'ASC')->first();
        $productSeller_max_price_first = ProductSeller::where('product_id', $product->id)->orderBy('discount_price', 'ASC')->first();

        $productSeller_max_price_all = ProductSeller::where('product_id', $product->id)->orderBy('discount_price', 'ASC')->take('3')->get();
        $productSeller_max_price_all_init = ProductSeller::where('product_id', $product->id)->orderBy('discount_price', 'ASC')->skip('3')->take(PHP_INT_MAX)->get();
        $productSeller_count = ProductSeller::where('product_id', $product->id)->count();



        $priceDate = PriceDate::where('product_id', $product->id)->get();

        $priceDate_min_price = PriceDate::where('product_id', $product->id)->orderBy('discount_price', 'ASC')->get();

        ///
        $priceDate_min_price_first = PriceDate::where('product_id', $product->id)->orderBy('discount_price', 'ASC')->first();

        $priceDate_min_price_first1 = PriceDate::where('product_id', $product->id)->orderBy('discount_price', 'ASC')->get();



        // ;        if ($priceDate_min_price_first1) {
        //             // $date1 = $priceDate_min_price_first->created_at;
        //             $date2 = $priceDate_min_price_first1->created_at;
        //             $different = $date2->diff($date1);

        //         }
        // $day = $different->format('%d');
        // $mo = $different->format('%m');


        SEOMeta::setTitle($product->title);
        SEOMeta::setDescription($product->resume);
        SEOMeta::addMeta('product:published_time', $product->created_at, 'property');
        SEOMeta::addMeta('product:section', $product->category, 'property');
        SEOMeta::addKeyword(['key1', 'key2', 'key3']);

        OpenGraph::setDescription($product->resume);
        OpenGraph::setTitle($product->title);
        OpenGraph::setUrl('http://digikala.ir');
        OpenGraph::addProperty('type', 'product');
        OpenGraph::addProperty('locale', 'fa_IR');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us', 'fa_IR']);

        OpenGraph::addImage($product->img);
        OpenGraph::addImage($product->img);
        OpenGraph::addImage(['url' => 'http://image.url.com/cover.jpg', 'size' => 300]);
        OpenGraph::addImage('http://image.url.com/cover.jpg', ['height' => 300, 'width' => 300]);

        JsonLd::setTitle($product->title);
        JsonLd::setDescription($product->title);
        JsonLd::setType('product');
        JsonLd::addImage($product->img);

        // OR with multi

        JsonLdMulti::setTitle($product->title);
        JsonLdMulti::setDescription($product->title);
        JsonLdMulti::setType('product');
        JsonLdMulti::addImage($product->img);
        if (!JsonLdMulti::isEmpty()) {
            JsonLdMulti::newJsonLd();
            JsonLdMulti::setType('WebPage');
            JsonLdMulti::setTitle('Page product - ' . $product->title);
        }

        // Namespace URI: http://ogp.me/ns/product#
        // product
        OpenGraph::setTitle('product')
            ->setDescription('Some product')
            ->setType('product')
            ->setproduct([
                'published_time' => 'datetime',
                'modified_time' => 'datetime',
                'expiration_time' => 'datetime',
                'author' => 'profile / array',
                'section' => 'string',
                'tag' => 'string / array'
            ]);

        // Namespace URI: http://ogp.me/ns/book#
        // book
        OpenGraph::setTitle('product')
            ->setDescription('Some product')
            ->setType('product')
            ->setBook([
                'author' => 'profile / array',
                'isbn' => 'string',
                'release_date' => 'datetime',
                'Availability' => 'new',
                'tag' => 'string / array'
            ]);

        // Namespace URI: http://ogp.me/ns/profile#
        // profile
        OpenGraph::setTitle('Profile')
            ->setDescription('Some Person')
            ->setType('profile')
            ->setProfile([
                'first_name' => 'string',
                'last_name' => 'string',
                'username' => 'string',
                'gender' => 'enum(male, female)'
            ]);

        // Namespace URI: http://ogp.me/ns/music#
        // music.song
        OpenGraph::setType('music.song')
            ->setMusicSong([
                'duration' => 'integer',
                'album' => 'array',
                'album:disc' => 'integer',
                'album:track' => 'integer',
                'musician' => 'array'
            ]);

        // music.album
        OpenGraph::setType('music.album')
            ->setMusicAlbum([
                'song' => 'music.song',
                'song:disc' => 'integer',
                'song:track' => 'integer',
                'musician' => 'profile',
                'release_date' => 'datetime'
            ]);

        //music.playlist
        OpenGraph::setType('music.playlist')
            ->setMusicPlaylist([
                'song' => 'music.song',
                'song:disc' => 'integer',
                'song:track' => 'integer',
                'creator' => 'profile'
            ]);

        // music.radio_station
        OpenGraph::setType('music.radio_station')
            ->setMusicRadioStation([
                'creator' => 'profile'
            ]);

        // Namespace URI: http://ogp.me/ns/video#
        // video.movie
        OpenGraph::setType('video.movie')
            ->setVideoMovie([
                'actor' => 'profile / array',
                'actor:role' => 'string',
                'director' => 'profile /array',
                'writer' => 'profile / array',
                'duration' => 'integer',
                'release_date' => 'datetime',
                'tag' => 'string / array'
            ]);

        // video.episode
        OpenGraph::setType('video.episode')
            ->setVideoEpisode([
                'actor' => 'profile / array',
                'actor:role' => 'string',
                'director' => 'profile /array',
                'writer' => 'profile / array',
                'duration' => 'integer',
                'release_date' => 'datetime',
                'tag' => 'string / array',
                'series' => 'video.tv_show'
            ]);

        // video.tv_show
        OpenGraph::setType('video.tv_show')
            ->setVideoTVShow([
                'actor' => 'profile / array',
                'actor:role' => 'string',
                'director' => 'profile /array',
                'writer' => 'profile / array',
                'duration' => 'integer',
                'release_date' => 'datetime',
                'tag' => 'string / array'
            ]);

        // video.other
        OpenGraph::setType('video.other')
            ->setVideoOther([
                'actor' => 'profile / array',
                'actor:role' => 'string',
                'director' => 'profile /array',
                'writer' => 'profile / array',
                'duration' => 'integer',
                'release_date' => 'datetime',
                'tag' => 'string / array'
            ]);

        // og:video
        OpenGraph::addVideo('http://example.com/movie.swf', [
            'secure_url' => 'https://example.com/movie.swf',
            'type' => 'application/x-shockwave-flash',
            'width' => 400,
            'height' => 300
        ]);

        // og:audio
        OpenGraph::addAudio('http://example.com/sound.mp3', [
            'secure_url' => 'https://secure.example.com/sound.mp3',
            'type' => 'audio/mpeg'
        ]);

        // og:place
        OpenGraph::setTitle('Place')
            ->setDescription('Some Place')
            ->setType('place')
            ->setPlace([
                'location:latitude' => 'float',
                'location:longitude' => 'float',
            ]);


        $comments = $this->readyToLoad ? Comment::where('status', 1)->where('product_id', $product->id)->where('parent', 0)->latest()->paginate(15) : [];
        return view(
            'livewire.home.product.index',
            compact(
                'product',
                'productGallerys',
                'productCategories',
                'productAttributes',
                'productSeller_count',
                'productSellers',
                'productSeller_max_price',
                'productSeller_max_price_first',
                'productSeller_max_price_all',
                'priceDate_min_price_first',
                'productSeller_max_price_all_init',
                'productSeller_min_price_first',
                'comments'
            )
        )->layout('layouts.home1');
    }
}

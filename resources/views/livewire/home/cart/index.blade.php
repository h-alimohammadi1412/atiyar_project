{{-- <div>
    <main id="main">
        <div id="HomePageTopBanner"></div>
        <div id="content">
            <section class="o-page c-cart-page">
                <div class="container">
                    @include('livewire.home.cart.allfile')
                </div>
            </section>
        </div>
        <div id="sidebar">
            <aside></aside>
        </div>
    </main>
</div> --}}
@section('title','سبد خرید')
<div>
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item">
                            <a class="text-nowrap" href="index-2.html"><i class="ci-home"></i>خانه</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap">
                            <a href="shop-grid-ls.html">فروشگاه</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">
                            سبد خرید
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">سبد خرید شما</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <!-- List of items-->
            <section class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center pt-3 pb-4 pb-sm-5 mt-1">
                    <h2 class="h6 text-light mb-0">محصولات</h2>
                    <a class="btn btn-outline-primary btn-sm ps-2" href="shop-grid-ls.html"><i
                            class="ci-arrow-left me-2"></i>ادامه خرید</a>
                </div>
                @if (sizeof($carts)>0)
                @foreach ($carts as $cart)
                <!-- Item-->
                <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
                    <div class="d-block d-sm-flex align-items-center text-center text-sm-start">
                        <a class="d-inline-block flex-shrink-0 mx-auto me-sm-4"
                            href="{{ url('/product/at-' . $cart->productSeller->product->id . '/' . $cart->productSeller->product->link) }}"><img
                                src="/storage/{{ $cart->productSeller->product->img }}" width="160" alt="محصول" /></a>
                        <div class="pt-2">
                            <h3 class="product-title fs-base mb-2">
                                <a
                                    href="{{ url('/product/at-' . $cart->productSeller->product->id . '/' . $cart->productSeller->product->link) }}">{{
                                    $cart->productSeller->product->title }}</a>
                            </h3>
                            {{-- <div class="fs-sm">
                                <span class="text-muted me-2">سایز : </span>8.5
                            </div> --}}
                            <div class="fs-sm">
                                <span class="text-muted me-2">رنگ:</span>{{ $cart->productSeller->color->name }}
                            </div>
                            <div class="fs-sm">
                                <span class="text-muted me-2">گارانتی:</span>{{ $cart->productSeller->warranty->name }}
                            </div>
                            <div class="fs-sm">
                                <span class="text-muted me-2">فروشنده:</span>{{ $cart->productSeller->vendor->name }}
                            </div>
                            @if ($cart->productSeller->anbar == 1)
                            <div class="fs-sm">
                                <span class="me-2">موجود در انبار فروشنده</span> | <span class="me-2">ارسال از {{
                                    $cart->productSeller->time }} روز کاری دیگر</span>
                            </div>
                            @else
                            <div class="fs-sm">
                                <span class="me-2">موجود در انبار آتی یار</span> | @if($cart->productSeller->time == 0)
                                <span class="me-2">ارسال از آتی یار</span> @else <span class="me-2">ارسال از {{
                                    $cart->productSeller->time }} روز کاری دیگر</span> @endif
                            </div>
                            @endif
                            <div class="align-items-center d-flex fs-lg justify-content-around pt-2 text-accent"
                                style="width: 385px;">
                                <span class="" style="font-size: 22px;">{{
                                    number_format($cart->productSeller->discount_price) }} <span
                                        class="fs-6">تومان</span></span> |
                                <span class=" text-primary" style="font-size: 15px;"><span class="">تخفیف :</span> {{
                                    number_format($cart->productSeller->price - $cart->productSeller->discount_price) }}
                                    <span class="">تومان</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center mx-auto mx-sm-0 ps-sm-3 pt-2 pt-sm-0 text-center text-sm-start"
                        style="max-width: 9rem">
                        <div class="align-items-center border d-flex justify-content-between px-2 rounded-pill"
                            style="width:120px;height: 40px">
                            <i class="ci-add me-2" wire:click="updateCountProduct({{ $cart->id }},'add')"
                                style="font-size: 13px;font-weight: bold;cursor:@if($cart->count < $cart->productSeller->limit_order) pointer; @else not-allowed;color: #7d879c6e !important; @endif"></i>
                            <span>{{ $cart->count }}</span>
                            <i class="ci-a me-2" wire:click="updateCountProduct({{ $cart->id }},'minus')"
                                style="font-size: 33px;font-weight: bold;margin-top: -13px; cursor: @if($cart->count > 1) pointer; @else not-allowed;color: #7d879c6e !important; @endif">-</i>
                        </div>
                        <button class="btn btn-link fs-md px-0 py-2 text-danger"
                            wire:click="addToCartOtherFromCart({{ $cart->id }})">
                            <i class="ci-add-document me-2"></i><span class="fs-sm">انتقال به خرید بعدی</span>
                        </button>
                        <button class="btn btn-link px-0 py-0 text-danger"
                            wire:click="deleteCartProduct({{ $cart->id }})">
                            <i class="ci-close-circle me-2"></i><span class="fs-sm">حذف</span>
                        </button>
                    </div>
                </div>
                @endforeach
                @else
                <div class="alert alert-warning text-center py-10">سبد خرید شما خالی است</div>
                @endif

                <button class="btn btn-outline-accent d-block w-100 mt-4" wire:click="updateBasket">
                    <i class="ci-loading fs-base me-2"></i>به روز رسانی
                </button>
            </section>
            <!-- Sidebar-->

            <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                <div class="bg-white rounded-3 shadow-lg p-4">
                    <div class="py-2 px-xl-2">
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-6">قیمت کالاها ({{ sizeof($carts) }})</h2>
                            <h3 class="fw-normal fs-5">{{ number_format($total_price_products) }}</h3>
                        </div>
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-6">جمع سبد خرید</h2>
                            <h3 class="fw-normal fs-5">{{ number_format($total_price_cart) }}</h3>
                        </div>
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-6">سود شما از خرید</h2>
                            <h3 class="fw-normal fs-5 text-primary">{{ number_format($total_discount_price_cart) }}</h3>
                        </div>
                        <a class="btn btn-primary btn-shadow d-block w-100 mt-4"></i>ثبت سفارش</a>
                        <p class="text-center mt-4">هزینه این سفارش هنوز پرداخت نشده‌ و در صورت اتمام موجودی، کالاها از
                            سبد حذف می‌شوند. </p>
                    </div>
                </div>
            </aside>
        </div>

        {{-- <section class="pt-5 pt-md-5">
            <!-- Heading-->
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
                <h2 class="h3 fs-5 mb-0 pt-3 me-3">خریداران این محصولات، محصولات زیر را هم خریده‌اند</h2>
            </div>
            <div class="tns-carousel tns-controls-static tns-controls-outside tns-nav-enabled pt-2 ltr">
                <div class="tns-carousel-inner"
                    data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 "><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/01.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">تخم مرغ</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">نارگیل ،
                                        اندونزی (قطعه)</a></h3>
                                <div class="product-price"><span class="text-accent">10<small>99</small></span>
                                    <del class="fs-sm text-muted">20<small>99</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/02.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">میوه و
                                    سبزیحات</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">نارگیل ،
                                        اندونزی (قطعه)</a></h3>
                                <div class="product-price"><span class="text-accent">20<small>99</small></span>
                                    <del class="fs-sm text-muted">30<small>99</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/03.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">نوشابه</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">نارگیل ،
                                        اندونزی (قطعه)</a></h3>
                                <div class="product-price"><span class="text-accent">10<small>00</small></span>
                                    <del class="fs-sm text-muted">10<small>25</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/04.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">تخم مرغ</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">نارگیل ،
                                        اندونزی (قطعه)</a></h3>
                                <div class="product-price"><span class="text-accent">10<small>15</small></span>
                                    <del class="fs-sm text-muted">10<small>75</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/05.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">بهداشت
                                    شخصی</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">نارگیل ،
                                        اندونزی (قطعه)</a></h3>
                                <div class="product-price"><span class="text-accent">40<small>20</small></span>
                                    <del class="fs-sm text-muted">50<small>99</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/06.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">نارگیل ،
                                    اندونزی (قطعه)</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">خمیر شکلات
                                        آجیل (750 گرم)</a></h3>
                                <div class="product-price"><span class="text-accent">60<small>50</small></span>
                                    <del class="fs-sm text-muted">70<small>99</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/07.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">میوه و
                                    سبزیحات</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">پنیر کوچک
                                        موزارلا</a></h3>
                                <div class="product-price"><span class="text-accent">30<small>50</small></span>
                                    <del class="fs-sm text-muted">40<small>99</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}


        <section class="pt-5 pt-md-5">
            <!-- Heading-->
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
                <h2 class="h3 fs-5 mb-0 pt-3 me-3">بازدید های اخیر شما</h2>
            </div>
            <div class="tns-carousel tns-controls-static tns-controls-outside tns-nav-enabled pt-2 ltr">
                <div class="tns-carousel-inner"
                    data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:2}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:2}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:4}, &quot;1500&quot;:{&quot;items&quot;:5}}}">
                    <!-- Product-->
                    @foreach ($userHistories as $userHistory )
                    dd();
                    <div class="">
                        <div class="card product-card">
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="" data-bs-original-title="اضافه کردن به علاقه مندی"
                                aria-label="اضافه کردن به علاقه مندی"
                                wire:click="favoriteProduct({{ $userHistory->product->id }})"><i
                                    class="ci-heart"></i></button><a target="_blank"
                                class="card-img-top d-block overflow-hidden"
                                href="{{ url('/product/at-' . $userHistory->product->id . '/' . $userHistory->product->link) }}"><img
                                    src="/storage/{{ $userHistory->product->img }}" alt="محصول"></a>
                            <div class="card-body py-2 cart_body_product"><a target="_blank"
                                    class="product-meta d-block fs-xs pb-1"
                                    href="{{ url('/main/' . $userHistory->product->category->link) }}">{{
                                    $userHistory->product->category->title }}</a>
                                <h3 class="product-title fs-sm text-center"><a target="_blank"
                                        href="{{ url('/product/at-' . $userHistory->product->id . '/' . $userHistory->product->link) }}">{{
                                        substr($userHistory->product->title, 50) . '...' }}</a>
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text-accent">
                                            @if ($userHistory->product->price > 0 && $userHistory->product->price !=
                                            null)
                                            <del>{{ number_format($userHistory->product->discount_price) }}</del>
                                            @else
                                            {{-- ناموجود --}}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-5">
                                <span class="d-block fs- fs-4 text-center">{{
                                    number_format($userHistory->product->price) }}</span>

                            </div>
                        </div>
                        <hr class="d-sm-none">
                    </div>
                    @endforeach
                    {{--
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/02.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">میوه و
                                    سبزیحات</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">نارگیل ،
                                        اندونزی (قطعه)</a></h3>
                                <div class="product-price"><span class="text-accent">20<small>99</small></span>
                                    <del class="fs-sm text-muted">30<small>99</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/03.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">نوشابه</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">نارگیل ،
                                        اندونزی (قطعه)</a></h3>
                                <div class="product-price"><span class="text-accent">10<small>00</small></span>
                                    <del class="fs-sm text-muted">10<small>25</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/04.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">تخم مرغ</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">نارگیل ،
                                        اندونزی (قطعه)</a></h3>
                                <div class="product-price"><span class="text-accent">10<small>15</small></span>
                                    <del class="fs-sm text-muted">10<small>75</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/05.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">بهداشت
                                    شخصی</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">نارگیل ،
                                        اندونزی (قطعه)</a></h3>
                                <div class="product-price"><span class="text-accent">40<small>20</small></span>
                                    <del class="fs-sm text-muted">50<small>99</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/06.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">نارگیل ،
                                    اندونزی (قطعه)</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">خمیر شکلات
                                        آجیل (750 گرم)</a></h3>
                                <div class="product-price"><span class="text-accent">60<small>50</small></span>
                                    <del class="fs-sm text-muted">70<small>99</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <div>
                        <div class="card product-card card-static rtl pb-3 rtl"><span
                                class="badge bg-danger badge-shadow">فروش</span>
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="grocery-single.html"><img src="img/grocery/catalog/07.jpg" alt="Product"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">میوه و
                                    سبزیحات</a>
                                <h3 class="product-title fs-sm text-truncate"><a href="grocery-single.html">پنیر کوچک
                                        موزارلا</a></h3>
                                <div class="product-price"><span class="text-accent">30<small>50</small></span>
                                    <del class="fs-sm text-muted">40<small>99</small></del>
                                </div>
                            </div>
                            <div class="product-floating-btn">
                                <button class="btn btn-primary btn-shadow btn-sm" type="button">+<i
                                        class="ci-cart fs-base ms-1"></i></button>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </div>
</div>
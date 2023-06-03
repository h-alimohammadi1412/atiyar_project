<section class="container mb-4 pb-3 pb-sm-0 mb-sm-5">
    <div class="row">
        @php
            $categoryIndex = \App\Models\TitleCategoryIndex::find(1);
        @endphp
        <!-- Banner with controls-->
        <div class="col-md-5">
            <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #e2e9ef;">
                <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                    <div>
                        <h3 class="mb-1">{{ $categoryIndex->title }}</h3><a class="fs-md" href="shop-grid-ls.html">خرید
                            لباس هودی<i class="ci-arrow-right fs-xs align-middle ms-1"></i></a>
                    </div>
                    <div class="tns-carousel-controls" id="hoodie-day">
                        <button type="button"><i class="ci-arrow-left"></i></button>
                        <button type="button"><i class="ci-arrow-right"></i></button>
                    </div>
                </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100"
                        src="img/home/categories/cat-lg04.jpg" alt="For Women"></a>
            </div>
        </div>
        <!-- Product grid (carousel)-->
        <div class="col-md-7 pt-4 pt-md-0">
            <div class="swiper featured_category">
                <div class="swiper-wrapper">
                    @foreach (cache('featuredCategory') as $product)
                        <div class="swiper-slide">
                            <div>
                                <div class="card product-card">
                                    <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="اضافه کردن به علاقه مندی"  wire:click="favoriteProduct({{ $product->id }})"><i
                                            class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="{{ url('/product/at-' . $product->id . '/' . $product->link) }}"><img
                                            src="/storage/{{ $product->product->img }}" alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="{{ url('/main/' . $product->category->link) }}">{{ $product->category->title }}</a>
                                        <h3 class="product-title fs-sm"><a
                                                href="{{ url('/product/at-' . $product->id . '/' . $product->link) }}">{{ substr($product->product->title, 50) . '...' }}</a>
                                        </h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">{{ number_format($product->product->price) }}</span>
                                            </div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-half active"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i
                                                class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                                    </div>
                                </div>
                                <hr class="d-sm-none">
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-pagination-featured_category"></div>
            </div>
            {{-- <div class="tns-carousel ltr">
                <div class="tns-carousel-inner"
                    data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#hoodie-day&quot;}">
                    <!-- Carousel item-->
                    <div>
                        <div class="row mx-n2">
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static rtl">
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/20.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">24.<small>99</small></span></div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static rtl">
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/21.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">26.<small>99</small></span></div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static rtl"><span
                                        class="badge badge-danger badge-shadow">تخفیف</span>
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/23.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">17.<small>99</small></span>
                                                <del class="fs-sm text-muted">24.<small>99</small></del>
                                            </div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-half active"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static rtl">
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/51.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">21.<small>99</small></span></div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                <div class="card product-card card-static rtl">
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/24.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">24.<small>99</small></span></div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-half active"></i><i
                                                    class="star-rating-icon ci-star"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                <div class="card product-card card-static rtl">
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/54.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">21.<small>99</small></span></div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel item-->
                    <div>
                        <div class="row mx-n2">
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                <div class="card product-card card-static rtl">
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/53.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">21.<small>99</small></span></div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-half active"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4 d-none d-lg-block">
                                <div class="card product-card card-static rtl">
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/52.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">25.<small>99</small></span></div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-half active"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static rtl">
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/22.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">24.<small>99</small></span></div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static rtl">
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/56.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">25.<small>99</small></span></div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static rtl">
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/55.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">24.<small>99</small></span></div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-half active"></i><i
                                                    class="star-rating-icon ci-star"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                <div class="card product-card card-static rtl">
                                    <button class="btn-wishlist btn-sm" type="button"
                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                        class="card-img-top d-block overflow-hidden"
                                        href="shop-single-v1.html"><img src="img/shop/catalog/57.jpg"
                                            alt="محصول"></a>
                                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                            href="#">هودی</a>
                                        <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کلاه
                                                دار</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span
                                                    class="text-accent">23.<small>99</small></span></div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<style>
    .featured_category {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .featured_category .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        height: calc((100% - 30px) / 2) !important;

        /* Center slide text vertically */
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

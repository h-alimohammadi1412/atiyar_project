<div>
    @section('head')
        <link rel="stylesheet" media="screen" href="{{ asset('vendor/drift-zoom/dist/drift-basic.min.css') }}" />
        <link rel="stylesheet" media="screen" href="{{ asset('vendor/lightgallery.js/dist/css/lightgallery.min.css') }}" />
    @endsection
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i
                                    class="ci-home"></i>خانه</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="#">فروشگاه</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">{{ $product->title }}</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-2">{{ $product->title }}</h1>
                <div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                            class="star-rating-icon ci-star-filled active"></i><i
                            class="star-rating-icon ci-star-filled active"></i><i
                            class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                    </div><span class="d-inline-block fs-sm text-white opacity-70 align-middle mt-1 ms-1">74 نظر</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bg-light shadow-lg rounded-3">
            <!-- Tabs-->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link py-4 px-sm-4 active" href="#general" data-bs-toggle="tab"
                        role="tab"><span class='d-none d-sm-inline'>توضیحات کالا</span></a></li>
                <li class="nav-item"><a class="nav-link py-4 px-sm-4" href="#specs" data-bs-toggle="tab"
                        role="tab"><span class='d-none d-sm-inline'>مشخصات کالا</span></a></li>
                <li class="nav-item"><a class="nav-link py-4 px-sm-4" href="#reviews" data-bs-toggle="tab"
                        role="tab">نظرات <span class="fs-sm opacity-60">(74)</span></a></li>
            </ul>
            <div class="px-4 pt-lg-3 pb-3 mb-5">
                <div class="tab-content px-lg-3">
                    <!-- General info tab-->
                    @include('livewire.home.product.general_information')
                    <!-- Tech specs tab-->
                    @include('livewire.home.product.tech_specs')
                    <!-- Reviews tab-->
                    @include('livewire.home.product.reviews')
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Product description-->
    <div class="container pt-lg-3 pb-4 pb-sm-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                {{ $product->body }}
            </div>
        </div>
    </div>
    <hr class="mb-5">
    <!-- Product carousel (ممکن است دوست داشته باشید)-->
    <div class="container pt-lg-2 pb-5 mb-md-3">
        <h2 class="h3 text-center pb-4">ممکن است دوست داشته باشید</h2>
        <div class="tns-carousel ltr tns-controls-static tns-controls-outside">
            <div class="tns-carousel-inner"
                data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
                @foreach ($productCategories as $productCategory)
                    <div>
                        <div class="card product-card card-static rtl">
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="اضافه کردن به علاقه مندی" wire:click="favoriteProduct({{ $product->id }})"><i
                                    class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                href="/product/dkp-{{ $productCategory->id }}/{{ $productCategory->link }}"><img src="/storage/{{ $productCategory->img }}" alt="محصول"></a>
                            <div class="card-body py-2">
                                <h3 class="product-title fs-sm"><a
                                        href="/product/dkp-{{ $productCategory->id }}/{{ $productCategory->link }}">{{ substr($productCategory->title, 50) . '...' }}</a>
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="product-price text-accent">26.<small>99</small></div>
                                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-half active"></i><i
                                            class="star-rating-icon ci-star"></i><i
                                            class="star-rating-icon ci-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Product bundles carousel (Cheaper together)-->
    {{-- <div class="container pt-lg-1 pb-5 mb-md-3">
        <div class="card card-body pt-5">
            <h2 class="h3 text-center pb-4">با هم ارزان تر</h2>
            <div class="tns-carousel ltr">
                <div class="tns-carousel-inner"
                    data-carousel-options="{&quot;items&quot;: 1, &quot;controls&quot;: false, &quot;nav&quot;: true}">
                    <div class="rtl">
                        <div class="row align-items-center">
                            <div class="col-md-3 col-sm-5">
                                <div class="card product-card card-static rtl text-center mx-auto"
                                    style="max-width: 20rem;"><a class="card-img-top d-block overflow-hidden"
                                        href="#"><img src="img/shop/catalog/70.jpg" alt="محصول"></a>
                                    <div class="card-body py-2"><span
                                            class="d-inline-block bg-secondary fs-ms rounded-1 py-1 px-2 mb-3">محصول</span>
                                        <h3 class="product-title fs-sm"><a href="#">تلفن های هوشمند</a></h3>
                                        <div class="product-price text-accent">124.<small>99</small></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-2 text-center">
                                <div class="display-4 fw-light text-muted px-4">+</div>
                            </div>
                            <div class="col-md-3 col-sm-5">
                                <div class="card product-card card-static rtl text-center mx-auto"
                                    style="max-width: 20rem;"><a class="card-img-top d-block overflow-hidden"
                                        href="#"><img src="img/shop/catalog/72.jpg" alt="محصول"></a>
                                    <div class="card-body py-2"><span
                                            class="d-inline-block bg-danger fs-ms text-white rounded-1 py-1 px-2 mb-3">-20%</span>
                                        <h3 class="product-title fs-sm"><a href="#">ساعت هوشمند سلامتی و تناسب
                                                اندام</a></h3>
                                        <div class="product-price"><span
                                                class="text-accent">16.<small>00</small></span>
                                            <del class="fs-sm text-muted">20.<small>00</small></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-md-block col-md-1 text-center">
                                <div class="display-4 fw-light text-muted px-4">=</div>
                            </div>
                            <div class="col-md-4 pt-3 pt-md-0">
                                <div class="bg-secondary p-4 rounded-3 text-center mx-auto" style="max-width: 20rem;">
                                    <div class="h3 fw-normal text-accent mb-3 me-1">140.<small>99</small></div>
                                    <button class="btn btn-primary" type="button">ساعت هوشمند سلامتی و تناسب
                                        اندام</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rtl">
                        <div class="row align-items-center">
                            <div class="col-md-3 col-sm-5">
                                <div class="card product-card card-static rtl text-center mx-auto"
                                    style="max-width: 20rem;"><a class="card-img-top d-block overflow-hidden"
                                        href="#"><img src="img/shop/catalog/70.jpg" alt="محصول"></a>
                                    <div class="card-body py-2"><span
                                            class="d-inline-block bg-secondary fs-ms rounded-1 py-1 px-2 mb-3">محصول</span>
                                        <h3 class="product-title fs-sm"><a href="#">تلفن های هوشمند</a></h3>
                                        <div class="product-price text-accent">124.<small>99</small></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-2 text-center">
                                <div class="display-4 fw-light text-muted px-4">+</div>
                            </div>
                            <div class="col-md-3 col-sm-5">
                                <div class="card product-card card-static rtl text-center mx-auto"
                                    style="max-width: 20rem;"><a class="card-img-top d-block overflow-hidden"
                                        href="#"><img src="img/shop/catalog/71.jpg" alt="محصول"></a>
                                    <div class="card-body py-2"><span
                                            class="d-inline-block bg-danger fs-ms text-white rounded-1 py-1 px-2 mb-3">-15%</span>
                                        <h3 class="product-title fs-sm"><a href="#">ساعت هوشمند سلامتی و تناسب
                                                اندام</a></h3>
                                        <div class="product-price"><span
                                                class="text-accent">59.<small>00</small></span>
                                            <del class="fs-sm text-muted">69.<small>00</small></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-md-block col-md-1 text-center">
                                <div class="display-4 fw-light text-muted px-4">=</div>
                            </div>
                            <div class="col-md-4 pt-3 pt-md-0">
                                <div class="bg-secondary p-4 rounded-3 text-center mx-auto" style="max-width: 20rem;">
                                    <div class="h3 fw-normal text-accent mb-3 me-1">183.<small>99</small></div>
                                    <button class="btn btn-primary" type="button">ساعت هوشمند سلامتی و تناسب
                                        اندام</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @section('script')
        <script src="{{ asset('vendor/drift-zoom/dist/Drift.min.js') }}"></script>
        <script src="{{ asset('vendor/lightgallery.js/dist/js/lightgallery.min.js') }}"></script>
        <script src="{{ asset('vendor/lg-video.js/dist/lg-video.min.js') }}"></script>
    @endsection
</div>






























{{-- <div>
    <main id="main">
        <div id="HomePageTopBanner"></div>
        <div id="content">

            <div data-category-id="11" data-product-id="3048126" class="o-page js-product-page c-product-page">
                <div class="container">
                    <div class="c-product__nav-container">
                        @include('livewire.home.product.detail.nav')
                        @include('livewire.home.product.detail.article')
                        @include('livewire.home.product.detail.seller')
                        @include('livewire.home.product.detail.buybox')
                        @include('livewire.home.product.detail.buy_product')
                    </div>
                </div>
            </div>
            </div>
    </main>
</div>

@include('livewire.home.product.cssjs')
@include('livewire.home.product.modals') --}}

<div>
    @section('title')
        {{ $category->title }}
    @endsection
    @section('head')
        <link rel="stylesheet" media="screen" href="{{ asset('vendor/nouislider/dist/nouislider.min.css') }}" />
    @endsection

    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="ci-home"></i>آتی
                                یار</a>
                        </li>
                        {{-- <li class="breadcrumb-item text-nowrap"><a href="#">فروشگاه</a>
                    </li> --}}
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">{{ $category->title }}</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">{{ $category->title }} -- {{ print_r($brand_ids) }}</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4">
                <!-- Sidebar-->
                <div class="offcanvas offcanvas-collapse bg-white w-100 rounded-3 shadow-lg py-1" id="shop-sidebar"
                    style="max-width: 22rem;">
                    <div class="offcanvas-header align-items-center shadow-sm">
                        <h2 class="h5 mb-0">فیلتر</h2>
                        <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                        <!-- Categories-->
                        <div class="widget widget-categories mb-4 pb-4 border-bottom">
                            <h3 class="widget-title">دسته بندی فرزند</h3>
                            <div class="accordion mt-n1" id="shop-categories">
                                <!-- Clothing-->
                                @if (sizeof($category->getChild) > 0)
                                    @foreach ($category->getChild as $key => $categoryChild)
                                        <div class="accordion-item">
                                            <h3 class="accordion-header"><a class="accordion-button"
                                                    href="#{{ $categoryChild->link }}" role="button"
                                                    data-bs-toggle="collapse" aria-expanded="true"
                                                    aria-controls="clothing">{{ $categoryChild->title }}</a></h3>

                                            <div class="accordion-collapse collapse" id="{{ $categoryChild->link }}"
                                                data-bs-parent="#shop-categories">
                                                <div class="accordion-body">
                                                    <div class="widget widget-links widget-filter">
                                                        <div class="input-group input-group-sm mb-2">
                                                            <input class="widget-filter-search form-control rounded-end"
                                                                type="text" placeholder="جستجو"><i
                                                                class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                                                        </div>
                                                        <ul class="widget-list widget-filter-list pt-1"
                                                            style="height: 12rem;" data-simplebar
                                                            data-simplebar-auto-hide="false">
                                                            <li class="widget-list-item widget-filter-item"><a
                                                                    class="widget-list-link d-flex justify-content-between align-items-center"
                                                                    href="{{ url('main/' . $categoryChild->link) }}"><span
                                                                        class="widget-filter-item-text">{{ $categoryChild->title }}</span><span
                                                                        class="fs-xs text-muted ms-3">والد</span></a>
                                                            </li>
                                                            @if (sizeof($categoryChild->getChild) > 0)
                                                                @foreach ($categoryChild->getChild as $categoryChild2)
                                                                    <li class="widget-list-item widget-filter-item"><a
                                                                            class="widget-list-link d-flex justify-content-between align-items-center"
                                                                            href="{{ url('main/' . $categoryChild2->link) }}"><span
                                                                                class="widget-filter-item-text">{{ $categoryChild2->title }}</span><span
                                                                                class="fs-xs text-muted ms-3">فرزند</span></a>
                                                                    </li>
                                                                @endforeach
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                @else
                                    <span class="alert alert-danger">بدون دسته</span>
                                @endif

                            </div>
                        </div>
                        <!-- قیمت -->
                        <div class="widget mb-4 pb-4 border-bottom">
                            <h3 class="widget-title">قیمت</h3>
                            <div class="range-slider" data-start-min="0" data-start-max="{{ $maxPrice }}"
                                data-min="0" data-max="{{ $maxPrice }}" data-step="1">
                                <div class="range-slider-ui"></div>
                                <div class="d-flex pb-1">
                                    <div class="w-50 pe-2 me-2">
                                        <div class="input-group input-group-sm"><span
                                                class="input-group-text">تومان</span>
                                            <input class="form-control range-slider-value-min" type="text">
                                        </div>
                                    </div>
                                    <div class="w-50 ps-2">
                                        <div class="input-group input-group-sm"><span
                                                class="input-group-text">تومان</span>
                                            <input class="form-control range-slider-value-max" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Filter by Brand-->
                        <div class="widget widget-filter mb-4 pb-4 border-bottom">
                            <h3 class="widget-title">برند</h3>
                            <div class="input-group input-group-sm mb-2">
                                <input class="widget-filter-search form-control rounded-end pe-5" type="text"
                                    placeholder="جستجو"><i
                                    class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                            </div>

                            <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;"
                                data-simplebar data-simplebar-auto-hide="false">
                                @foreach ($brands as $brand)
                                    <li
                                        class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="br-{{ $brand->link }}"
                                                wire:click="changeBrand('{{ $brand->id }}')">
                                            <label class="form-check-label widget-filter-item-text"
                                                for="br-{{ $brand->link }}">{{ $brand->name }}</label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Filter by Color-->
                        <div class="widget">
                            <h3 class="widget-title">رنگ</h3>

                            <div class="d-flex flex-wrap">
                                @foreach ($colors as $color)
                                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                        <input class="form-check-input" type="checkbox" id="{{ $color->value }}"
                                            wire:click="changeColor('{{ $color->id }}')">
                                        <label class="form-option-label rounded-circle"
                                            for="{{ $color->value }}"><span class="form-option-color rounded-circle"
                                                style="background-color: {{ $color->value }};"></span></label>
                                        <label class="d-block fs-xs text-muted mt-n1"
                                            for="{{ $color->value }}">{{ $color->name }}</label>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Content  -->
            <section class="col-lg-8">
                <!-- Toolbar-->
                <div
                    class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
                    <div class="d-flex flex-wrap">
                        <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                            <label class="text-light opacity-75 text-nowrap fs-sm me-2 d-none d-sm-block"
                                for="sorting">مرتب سازی:</label>
                            <select class="form-select" id="sorting">
                                <option>محبوبیت</option>
                                <option>قیمت کم به زیاد</option>
                                <option>قیمت زیاد به کم</option>
                                <option>امتیاز</option>
                            </select><span class="fs-sm text-light opacity-75 text-nowrap ms-2 d-none d-md-block">از
                                {{ \App\models\Product::where('category_id', $category->id)->count() }} محصول</span>
                        </div>
                    </div>
                    {{-- <div class="d-flex pb-3"><a class="nav-link-style nav-link-light me-3" href="#"><i class="ci-arrow-left"></i></a><span class="fs-md text-light">1 / 5</span><a class="nav-link-style nav-link-light ms-3" href="#"><i class="ci-arrow-right"></i></a></div> --}}
                    <div class="d-none d-sm-flex pb-3"><a
                            class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100 me-2"
                            href="#"><i class="ci-view-grid"></i></a><a
                            class="btn btn-icon nav-link-style nav-link-light" href="shop-list-ls.html"><i
                                class="ci-view-list"></i></a></div>
                </div>
                <!-- Products grid-->
                <div class="row mx-n2">
                    @foreach ($products as $product)
                        <div class="col-md-4 col-sm-6 px-2 mb-4">
                            <div class="card product-card">
                                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                        class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                                    href="shop-single-v1.html"><img src="/storage/{{ $product->img }}"
                                        alt="محصول"></a>
                                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                        href="{{ $product->id }}">{{ $product->category->title }}</a>
                                    <h3 class="product-title fs-sm"><a
                                            href="shop-single-v1.html">{{ substr($product->title, 50) . '...' }}</a>
                                    </h3>
                                    <div class="d-flex justify-content-between">
                                        <div class="product-price"><span
                                                class="text-accent">154.<small>00</small></span>
                                        </div>
                                        <div class="star-rating"><i
                                                class="star-rating-icon ci-star-filled active"></i><i
                                                class="star-rating-icon ci-star-filled active"></i><i
                                                class="star-rating-icon ci-star-filled active"></i><i
                                                class="star-rating-icon ci-star-filled active"></i><i
                                                class="star-rating-icon ci-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body card-body-hidden">
                                    {{-- <div class="text-center pb-2">
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="size1"
                                            id="s-75">
                                        <label class="form-option-label" for="s-75">7.5</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="size1" id="s-80"
                                            checked>
                                        <label class="form-option-label" for="s-80">8</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="size1"
                                            id="s-85">
                                        <label class="form-option-label" for="s-85">8.5</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="size1"
                                            id="s-90">
                                        <label class="form-option-label" for="s-90">9</label>
                                    </div>
                                </div> --}}
                                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i
                                            class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                                    {{-- <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view"
                                        data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a>
                                </div> --}}
                                </div>
                            </div>
                            <hr class="d-sm-none">
                        </div>
                    @endforeach
                </div>
                <hr class="my-3">
                <!-- Pagination-->
                <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="ci-arrow-left me-2"></i>قبلی</a></li>
                    </ul>
                    <ul class="pagination">
                        <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                        <li class="page-item active d-none d-sm-block" aria-current="page"><span
                                class="page-link">1<span class="visually-hidden">(جاری)</span></span></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                        <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
                    </ul>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next">بعدی<i
                                    class="ci-arrow-right ms-2"></i></a></li>
                    </ul>
                </nav>
            </section>
        </div>
    </div>

    @section('script')
        <script src="{{ asset('vendor/nouislider/dist/nouislider.min.js') }}"></script>
    @endsection
</div>
















{{-- <d> --}}
{{-- @include('livewire.home.category.base.css')
    <main id="main">
        <div id="HomePageTopBanner"></div>
        <div id="content">
            <div class="container">
                <div class="o-page">
                    <div class="o-page__row o-page__row--listing">
                        @include('livewire.home.category.base.aside')
                        <div class="o-page__content">
                            <div class="js-sticky-2">
                                <div class="js-products js-sticky-inner-2 c-listing-wrapper"
                                     style="position: relative;"> --}}
{{-- @if (DB::connection('mysql-category')->table('category_slider')->where('c_id', $category->id)->where('status', 1)->exists()) --}}
{{-- @if (DB::table('category_slider')->where('c_id', $category->id)->where('status', 1)->exists()) --}}
{{-- @include('livewire.home.category.base.slider') --}}
{{-- @endif --}}
{{-- @if (DB::connection('mysql-category')->table('category_amazing')->where('c_id', $category->id)->exists()) --}}
{{--                                    @if (DB::table('category_amazing')->where('c_id', $category->id)->exists()) --}}
{{-- @include('livewire.home.category.base.super-deal') --}}
{{-- @endif --}}
{{-- @if (DB::connection('mysql-category')->table('category_banner')->where('type', 0)->where('c_id', $category->id)->exists()) --}}
{{--                                    @if (DB::table('category_banner')->where('type', 0)->where('c_id', $category->id)->exists()) --}}
{{-- @include('livewire.home.category.base.aside2') --}}
{{-- @endif --}}
{{-- @if (DB::connection('mysql-category')->table('category_product_swiper')->where('c_id', $category->id)->where('status', 1)->exists()) --}}
{{--                                    @if (DB::table('category_product_swiper')->where('c_id', $category->id)->where('status', 1)->exists()) --}}
{{-- @include('livewire.home.category.base.swiper-product') --}}
{{-- @endif --}}
{{-- @if (DB::connection('mysql-category')->table('category_banner')->where('type', 1)->where('c_id', $category->id)->take(2)->exists()) --}}
{{--                                    @if (DB::table('category_banner')->where('type', 1)->where('c_id', $category->id)->take(2)->exists()) --}}
{{-- @include('livewire.home.category.base.aside3') --}}
{{-- @endif --}}
{{-- @if (DB::connection('mysql-category')->table('category_brand')->where('c_id', $category->id)->exists()) --}}
{{--                                    @if (DB::table('category_brand')->where('c_id', $category->id)->exists()) --}}
{{-- @include('livewire.home.category.base.brand') --}}
{{-- @endif --}}
{{-- @if ($category->description != null) --}}
{{-- @include('livewire.home.category.base.Desc') --}}
{{-- @endif --}}
{{-- 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sidebar">
            <aside></aside>
        </div>
    </main> --}}

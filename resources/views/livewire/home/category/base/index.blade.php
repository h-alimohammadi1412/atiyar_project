@section('title')
    {{ $category->title }}
@endsection

<!-- Page Title-->
<div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="ci-home"></i>آتی یار</a>
                    </li>
                    {{-- <li class="breadcrumb-item text-nowrap"><a href="#">فروشگاه</a>
            </li> --}}
                    <li class="breadcrumb-item text-nowrap active" aria-current="page">{{ $category->title }}</li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">{{ $category->title }}</h1>
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
                        <h3 class="widget-title">دسته بندی</h3>
                        <div class="accordion mt-n1" id="shop-categories">
                            <!-- Shoes-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shoes"
                                        role="button" data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="shoes">کفش</a></h3>
                                <div class="accordion-collapse collapse" id="shoes"
                                    data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links widget-filter">
                                            <div class="input-group input-group-sm mb-2">
                                                <input class="widget-filter-search form-control rounded-end"
                                                    type="text" placeholder="جستجو"><i
                                                    class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                                            </div>
                                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;"
                                                data-simplebar data-simplebar-auto-hide="false">
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">دیدن
                                                            همه</span><span
                                                            class="fs-xs text-muted ms-3">1,953</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">پمپ و کفش
                                                            پاشنه بلند</span><span
                                                            class="fs-xs text-muted ms-3">247</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">پمپ و کفش
                                                            پاشنه بلند</span><span
                                                            class="fs-xs text-muted ms-3">156</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">صندل</span><span
                                                            class="fs-xs text-muted ms-3">310</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">صندل</span><span
                                                            class="fs-xs text-muted ms-3">402</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">صندل</span><span
                                                            class="fs-xs text-muted ms-3">393</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">دمپایی</span><span
                                                            class="fs-xs text-muted ms-3">50</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">دمپایی</span><span
                                                            class="fs-xs text-muted ms-3">93</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">بوت
                                                            مردانه</span><span
                                                            class="fs-xs text-muted ms-3">122</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">بوت
                                                            مردانه</span><span
                                                            class="fs-xs text-muted ms-3">116</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">همه کفش
                                                            ها</span><span class="fs-xs text-muted ms-3">24</span></a>
                                                </li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">همه کفش
                                                            ها</span><span class="fs-xs text-muted ms-3">31</span></a>
                                                </li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">کفش
                                                            مجلسی</span><span
                                                            class="fs-xs text-muted ms-3">9</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">کفش
                                                            مجلسی</span><span
                                                            class="fs-xs text-muted ms-3">18</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Clothing-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button" href="#clothing"
                                        role="button" data-bs-toggle="collapse" aria-expanded="true"
                                        aria-controls="clothing">تن پوش</a></h3>
                                <div class="accordion-collapse collapse show" id="clothing"
                                    data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links widget-filter">
                                            <div class="input-group input-group-sm mb-2">
                                                <input class="widget-filter-search form-control rounded-end"
                                                    type="text" placeholder="جستجو"><i
                                                    class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                                            </div>
                                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;"
                                                data-simplebar data-simplebar-auto-hide="false">
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">دیدن
                                                            همه</span><span
                                                            class="fs-xs text-muted ms-3">2,548</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">تن
                                                            پوش</span><span
                                                            class="fs-xs text-muted ms-3">235</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">تن
                                                            پوش</span><span
                                                            class="fs-xs text-muted ms-3">410</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">لباس</span><span
                                                            class="fs-xs text-muted ms-3">107</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">لباس</span><span
                                                            class="fs-xs text-muted ms-3">93</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">هودی</span><span
                                                            class="fs-xs text-muted ms-3">122</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">هودی</span><span
                                                            class="fs-xs text-muted ms-3">116</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">کت</span><span
                                                            class="fs-xs text-muted ms-3">215</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">کت</span><span
                                                            class="fs-xs text-muted ms-3">150</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">جین</span><span
                                                            class="fs-xs text-muted ms-3">8</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">جین</span><span
                                                            class="fs-xs text-muted ms-3">26</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">پیراهن</span><span
                                                            class="fs-xs text-muted ms-3">164</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">پیراهن</span><span
                                                            class="fs-xs text-muted ms-3">147</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">تی
                                                            شرت</span><span
                                                            class="fs-xs text-muted ms-3">139</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">تی
                                                            شرت</span><span class="fs-xs text-muted ms-3">65</span></a>
                                                </li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">پیراهن</span><span
                                                            class="fs-xs text-muted ms-3">18</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">پیراهن</span><span
                                                            class="fs-xs text-muted ms-3">209</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">تاپ</span><span
                                                            class="fs-xs text-muted ms-3">132</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">تاپ</span><span
                                                            class="fs-xs text-muted ms-3">105</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">لباس
                                                            شنا</span><span class="fs-xs text-muted ms-3">87</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bags-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#bags"
                                        role="button" data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="bags">کیف</a></h3>
                                <div class="accordion-collapse collapse" id="bags"
                                    data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links widget-filter">
                                            <div class="input-group input-group-sm mb-2">
                                                <input class="widget-filter-search form-control rounded-end"
                                                    type="text" placeholder="جستجو"><i
                                                    class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                                            </div>
                                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;"
                                                data-simplebar data-simplebar-auto-hide="false">
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">دیدن
                                                            همه</span><span
                                                            class="fs-xs text-muted ms-3">801</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">مجلسی</span><span
                                                            class="fs-xs text-muted ms-3">238</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">مجلسی</span><span
                                                            class="fs-xs text-muted ms-3">116</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">اسپرت</span><span
                                                            class="fs-xs text-muted ms-3">104</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">اسپرت</span><span
                                                            class="fs-xs text-muted ms-3">115</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">پول</span><span
                                                            class="fs-xs text-muted ms-3">17</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">پول</span><span
                                                            class="fs-xs text-muted ms-3">9</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">ورزشی</span><span
                                                            class="fs-xs text-muted ms-3">93</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">ورزشی</span><span
                                                            class="fs-xs text-muted ms-3">5</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">مسافرتی</span><span
                                                            class="fs-xs text-muted ms-3">8</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">زنانه و
                                                            بچگانه</span><span
                                                            class="fs-xs text-muted ms-3">2</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">مسافرتی</span><span
                                                            class="fs-xs text-muted ms-3">31</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span class="widget-filter-item-text">زنانه و
                                                            بچگانه</span><span
                                                            class="fs-xs text-muted ms-3">45</span></a></li>
                                                <li class="widget-list-item widget-filter-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span
                                                            class="widget-filter-item-text">مسافرتی</span><span
                                                            class="fs-xs text-muted ms-3">18</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sunglasses-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#sunglasses"
                                        role="button" data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="sunglasses">عینک</a></h3>
                                <div class="collapse" id="sunglasses" data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links">
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>دیدن همه</span><span
                                                            class="fs-xs text-muted ms-3">1,842</span></a></li>
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>فشن</span><span
                                                            class="fs-xs text-muted ms-3">953</span></a></li>
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>اسپرت</span><span
                                                            class="fs-xs text-muted ms-3">589</span></a></li>
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>کلاسیک</span><span
                                                            class="fs-xs text-muted ms-3">300</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Watches-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed" href="#watches"
                                        role="button" data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="watches">جین</a></h3>
                                <div class="accordion-collapse collapse" id="watches"
                                    data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links">
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>دیدن همه</span><span
                                                            class="fs-xs text-muted ms-3">734</span></a></li>
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>جین فشن</span><span
                                                            class="fs-xs text-muted ms-3">572</span></a></li>
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>جین باکلاس</span><span
                                                            class="fs-xs text-muted ms-3">110</span></a></li>
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>جین فشن</span><span
                                                            class="fs-xs text-muted ms-3">34</span></a></li>
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>جین اسپرت</span><span
                                                            class="fs-xs text-muted ms-3">18</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Accessories-->
                            <div class="accordion-item">
                                <h3 class="accordion-header"><a class="accordion-button collapsed"
                                        href="#accessories" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="accessories">کیف</a></h3>
                                <div class="accordion-collapse collapse" id="accessories"
                                    data-bs-parent="#shop-categories">
                                    <div class="accordion-body">
                                        <div class="widget widget-links">
                                            <ul class="widget-list">
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>دیدن همه</span><span
                                                            class="fs-xs text-muted ms-3">920</span></a></li>
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>کمربندها</span><span
                                                            class="fs-xs text-muted ms-3">364</span></a></li>
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>کلاه</span><span
                                                            class="fs-xs text-muted ms-3">405</span></a></li>
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>جواهر</span><span
                                                            class="fs-xs text-muted ms-3">131</span></a></li>
                                                <li class="widget-list-item"><a
                                                        class="widget-list-link d-flex justify-content-between align-items-center"
                                                        href="#"><span>آرایشی</span><span
                                                            class="fs-xs text-muted ms-3">20</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- قیمت -->
                    <div class="widget mb-4 pb-4 border-bottom">
                        <h3 class="widget-title">قیمت</h3>
                        <div class="range-slider" data-start-min="250" data-start-max="680" data-min="0"
                            data-max="1000" data-step="1">
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
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="adidas">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="adidas">آدیداس</label>
                                </div><span class="fs-xs text-muted">425</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="ataylor">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="ataylor">آدیداس</label>
                                </div><span class="fs-xs text-muted">15</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="armani">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="armani">آدیداس</label>
                                </div><span class="fs-xs text-muted">18</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="banana">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="banana">آدیداس</label>
                                </div><span class="fs-xs text-muted">103</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="bilabong">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="bilabong">آدیداس</label>
                                </div><span class="fs-xs text-muted">27</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="birkenstock">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="birkenstock">نایک</label>
                                </div><span class="fs-xs text-muted">10</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="klein">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="klein">نایک</label>
                                </div><span class="fs-xs text-muted">365</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="columbia">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="columbia">نایک</label>
                                </div><span class="fs-xs text-muted">508</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="converse">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="converse">نایک</label>
                                </div><span class="fs-xs text-muted">176</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dockers">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="dockers">نایک</label>
                                </div><span class="fs-xs text-muted">54</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="fruit">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="fruit">نایک</label>
                                </div><span class="fs-xs text-muted">739</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="hanes">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="hanes">نایک</label>
                                </div><span class="fs-xs text-muted">92</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="choo">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="choo">نایک</label>
                                </div><span class="fs-xs text-muted">17</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="levis">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="levis">پوما</label>
                                </div><span class="fs-xs text-muted">361</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="lee">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="lee">پوما</label>
                                </div><span class="fs-xs text-muted">264</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="wearhouse">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="wearhouse">پوما</label>
                                </div><span class="fs-xs text-muted">75</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newbalance">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="newbalance">پوما</label>
                                </div><span class="fs-xs text-muted">218</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="nike">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="nike">پوما</label>
                                </div><span class="fs-xs text-muted">810</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="navy">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="navy">پوما</label>
                                </div><span class="fs-xs text-muted">147</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="polo">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="polo">پوما</label>
                                </div><span class="fs-xs text-muted">64</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="puma">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="puma">تامی</label>
                                </div><span class="fs-xs text-muted">370</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="reebok">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="reebok">تامی</label>
                                </div><span class="fs-xs text-muted">506</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="skechers">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="skechers">تامی</label>
                                </div><span class="fs-xs text-muted">209</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="hilfiger">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="hilfiger">تامی</label>
                                </div><span class="fs-xs text-muted">487</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="armour">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="armour">پوما</label>
                                </div><span class="fs-xs text-muted">90</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="urban">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="urban">پوما</label>
                                </div><span class="fs-xs text-muted">152</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="vsecret">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="vsecret">پوما</label>
                                </div><span class="fs-xs text-muted">238</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="wolverine">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="wolverine">نایک</label>
                                </div><span class="fs-xs text-muted">29</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="wrangler">
                                    <label class="form-check-label widget-filter-item-text"
                                        for="wrangler">نایک</label>
                                </div><span class="fs-xs text-muted">115</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Filter by Size-->
                    <div class="widget widget-filter mb-4 pb-4 border-bottom">
                        <h3 class="widget-title">سایز</h3>
                        <div class="input-group input-group-sm mb-2">
                            <input class="widget-filter-search form-control rounded-end pe-5" type="text"
                                placeholder="جستجو"><i
                                class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                        </div>
                        <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;"
                            data-simplebar data-simplebar-auto-hide="false">
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-xs">
                                    <label class="form-check-label widget-filter-item-text" for="size-xs">XS</label>
                                </div><span class="fs-xs text-muted">34</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-s">
                                    <label class="form-check-label widget-filter-item-text" for="size-s">S</label>
                                </div><span class="fs-xs text-muted">57</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-m">
                                    <label class="form-check-label widget-filter-item-text" for="size-m">M</label>
                                </div><span class="fs-xs text-muted">198</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-l">
                                    <label class="form-check-label widget-filter-item-text" for="size-l">L</label>
                                </div><span class="fs-xs text-muted">72</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-xl">
                                    <label class="form-check-label widget-filter-item-text" for="size-xl">XL</label>
                                </div><span class="fs-xs text-muted">46</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-39">
                                    <label class="form-check-label widget-filter-item-text" for="size-39">39</label>
                                </div><span class="fs-xs text-muted">112</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-40">
                                    <label class="form-check-label widget-filter-item-text" for="size-40">40</label>
                                </div><span class="fs-xs text-muted">85</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-41">
                                    <label class="form-check-label widget-filter-item-text" for="size-40">41</label>
                                </div><span class="fs-xs text-muted">210</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-42">
                                    <label class="form-check-label widget-filter-item-text" for="size-42">42</label>
                                </div><span class="fs-xs text-muted">57</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-43">
                                    <label class="form-check-label widget-filter-item-text" for="size-43">43</label>
                                </div><span class="fs-xs text-muted">30</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-44">
                                    <label class="form-check-label widget-filter-item-text" for="size-44">44</label>
                                </div><span class="fs-xs text-muted">61</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-45">
                                    <label class="form-check-label widget-filter-item-text" for="size-45">45</label>
                                </div><span class="fs-xs text-muted">23</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-46">
                                    <label class="form-check-label widget-filter-item-text" for="size-46">46</label>
                                </div><span class="fs-xs text-muted">19</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-47">
                                    <label class="form-check-label widget-filter-item-text" for="size-47">47</label>
                                </div><span class="fs-xs text-muted">15</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-48">
                                    <label class="form-check-label widget-filter-item-text" for="size-48">48</label>
                                </div><span class="fs-xs text-muted">12</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-49">
                                    <label class="form-check-label widget-filter-item-text" for="size-49">49</label>
                                </div><span class="fs-xs text-muted">8</span>
                            </li>
                            <li class="widget-filter-item d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="size-50">
                                    <label class="form-check-label widget-filter-item-text" for="size-50">50</label>
                                </div><span class="fs-xs text-muted">6</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Filter by Color-->
                    <div class="widget">
                        <h3 class="widget-title">رنگ</h3>

                        <div class="d-flex flex-wrap">
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-blue-gray">
                                <label class="form-option-label rounded-circle" for="color-blue-gray"><span
                                        class="form-option-color rounded-circle"
                                        style="background-color: #b3c8db;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-blue-gray">آبی</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-burgundy">
                                <label class="form-option-label rounded-circle" for="color-burgundy"><span
                                        class="form-option-color rounded-circle"
                                        style="background-color: #ca7295;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-burgundy">بنفش</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-teal">
                                <label class="form-option-label rounded-circle" for="color-teal"><span
                                        class="form-option-color rounded-circle"
                                        style="background-color: #91c2c3;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-teal">آبی</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-brown">
                                <label class="form-option-label rounded-circle" for="color-brown"><span
                                        class="form-option-color rounded-circle"
                                        style="background-color: #9a8480;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-brown">قهوه ای</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-coral-red">
                                <label class="form-option-label rounded-circle" for="color-coral-red"><span
                                        class="form-option-color rounded-circle"
                                        style="background-color: #ff7072;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-coral-red">قرمز</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-navy">
                                <label class="form-option-label rounded-circle" for="color-navy"><span
                                        class="form-option-color rounded-circle"
                                        style="background-color: #696dc8;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-navy">سورمه ای</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-charcoal">
                                <label class="form-option-label rounded-circle" for="color-charcoal"><span
                                        class="form-option-color rounded-circle"
                                        style="background-color: #4e4d4d;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-charcoal">زغالی</label>
                            </div>
                            <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                                <input class="form-check-input" type="checkbox" id="color-sky-blue">
                                <label class="form-option-label rounded-circle" for="color-sky-blue"><span
                                        class="form-option-color rounded-circle"
                                        style="background-color: #8bcdf5;"></span></label>
                                <label class="d-block fs-xs text-muted mt-n1" for="color-sky-blue">آبی آسمانی</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Content  -->
        <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
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
                                href="shop-single-v1.html"><img src="/storage/{{ $product->img }}" alt="محصول"></a>
                            <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                    href="#">زنانه و بچگانه</a>
                                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کفش کتانی</a></h3>
                                <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text-accent">154.<small>00</small></span>
                                    </div>
                                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body card-body-hidden">
                                <div class="text-center pb-2">
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
                                </div>
                                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i
                                        class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view"
                                        data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a>
                                </div>
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



















{{-- <div> --}}
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

</div>

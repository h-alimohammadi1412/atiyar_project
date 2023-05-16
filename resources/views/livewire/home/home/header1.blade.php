{{-- <header class="c-header   js-header">
    <div class="container">
        <div class="c-header__row js-header-sticky">
            <div class="c-header__right-side">
                @include('livewire.home.home.setting.header.logo')
                @livewire('global-search')
              @include('livewire.home.home.setting.header.search')
            </div>
            @include('livewire.home.home.setting.header.login')
        </div>
    </div>
    @include('livewire.home.home.setting.header.navbar')
</header>
<div class="c-navi-categories__overlay js-navi-overlay"></div> --}}

<div class="navbar-sticky bg-light">
    <div class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0" href="/">
                <img src="{{ asset('img/weblogo.png') }}" width="142" alt="آتی یار">
            </a>
            <a class="navbar-brand d-sm-none me-2" href="index-2.html"><img src="img/logo-icon.png"
                    width="74"alt="کارتزیلا"></a>
            <!-- Search-->
            <div class="input-group d-none d-lg-flex flex-nowrap mx-4">
                <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                <input class="form-control rounded-start w-100" type="text" placeholder="جستجو برای محصول">
                <select class="form-select flex-shrink-0" style="width: 10.5rem;">
                    <option>همه دسته بندی</option>
                    <option>کامپیوتر</option>
                    <option>موبایل</option>
                    <option>تی وی</option>
                    <option>دوربین</option>
                    <option>هدست</option>
                    <option>دوربین</option>
                    <option>هدست</option>
                    <option>بازی های ویدیویی</option>
                    <option>هدست</option>
                    <option>ذخیره سازی</option>
                </select>
            </div>
            <!-- Toolbar-->
            <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">

                @if (Auth::check())
                    <div class="dropdown">
                        <a href="{{ url('profile') }}" class="dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-expanded="false" style="color: #505764;">
                            {{ auth()->user()->mobile }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('/profile/orders') }}">سفارش های من</a>
                            {{-- <a class="dropdown-item" href="#">Another action</a> --}}
                            <a class="dropdown-item" href="{{ url('/users/logout') }}">خروج از حساب کاربری</a>
                        </div>
                    </div>
                @else
                    <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{ url('login') }}">
                        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                        <div class="navbar-tool-text ms-n3">ورود / ثبت نام</div>
                    </a>
                @endif
                {{-- <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                    <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                    <div class="navbar-tool-text ms-n3"><small>سلام وارد شوید</small>حساب من</div>
                </a> --}}
                <div class="navbar-tool dropdown ms-3">
                    <a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="{{ url('/cart') }}">
                        <span class="navbar-tool-label">4</span>
                        <i class="navbar-tool-icon ci-cart"></i>
                    </a>
                    <a class="navbar-tool-text" href="shop-cart.html"><small>سبدخرید</small>1,247.00</a>
                    <!-- Cart dropdown-->
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                            <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                <div class="widget-cart-item pb-2 border-bottom">
                                    <button class="btn-close text-danger" type="button" aria-label="Remove"><span
                                            aria-hidden="true">&times;</span></button>
                                    <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                            href="shop-single-v2.html"><img src="img/shop/cart/widget/05.jpg"
                                                width="64" alt="محصول"></a>
                                        <div class="ps-2">
                                            <h6 class="widget-product-title"><a href="shop-single-v2.html">هدفون</a>
                                            </h6>
                                            <div class="widget-product-meta"><span
                                                    class="text-accent me-2">259.<small>00</small></span><span
                                                    class="text-muted">x 1</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-cart-item py-2 border-bottom">
                                    <button class="btn-close text-danger" type="button" aria-label="Remove"><span
                                            aria-hidden="true">&times;</span></button>
                                    <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                            href="shop-single-v2.html"><img src="img/shop/cart/widget/06.jpg"
                                                width="64" alt="محصول"></a>
                                        <div class="ps-2">
                                            <h6 class="widget-product-title"><a href="shop-single-v2.html">هدفون</a>
                                            </h6>
                                            <div class="widget-product-meta"><span
                                                    class="text-accent me-2">122.<small>00</small></span><span
                                                    class="text-muted">x 1</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-cart-item py-2 border-bottom">
                                    <button class="btn-close text-danger" type="button" aria-label="Remove"><span
                                            aria-hidden="true">&times;</span></button>
                                    <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                            href="shop-single-v2.html"><img src="img/shop/cart/widget/07.jpg"
                                                width="64" alt="محصول"></a>
                                        <div class="ps-2">
                                            <h6 class="widget-product-title"><a href="shop-single-v2.html">هدفون</a>
                                            </h6>
                                            <div class="widget-product-meta"><span
                                                    class="text-accent me-2">799.<small>00</small></span><span
                                                    class="text-muted">x 1</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-cart-item py-2 border-bottom">
                                    <button class="btn-close text-danger" type="button" aria-label="Remove"><span
                                            aria-hidden="true">&times;</span></button>
                                    <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                            href="shop-single-v2.html"><img src="img/shop/cart/widget/08.jpg"
                                                width="64" alt="محصول"></a>
                                        <div class="ps-2">
                                            <h6 class="widget-product-title"><a href="shop-single-v2.html">هدفون</a>
                                            </h6>
                                            <div class="widget-product-meta"><span
                                                    class="text-accent me-2">67.<small>00</small></span><span
                                                    class="text-muted">x 1</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                <div class="fs-sm me-2 py-2"><span class="text-muted">جمع کل:</span><span
                                        class="text-accent fs-base ms-1">1,247.<small>00</small></span></div><a
                                    class="btn btn-outline-secondary btn-sm" href="shop-cart.html">ادامه خرید<i
                                        class="ci-arrow-right ms-1 me-n1"></i></a>
                            </div><a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html"><i
                                    class="ci-card me-2 fs-base align-middle"></i>بررسی</a>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-tool navbar-stuck-toggler" href="#">
                        <span class="navbar-tool-tooltip">منو</span>
                        <div class="navbar-tool-icon-box">
                            <i class="navbar-tool-icon ci-menu"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Search-->
                <div class="input-group d-lg-none my-3"><i
                        class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control rounded-start" type="text" placeholder="جستجو برای محصول">
                </div>
                <!-- Departments menu-->
                @php
                    $headers = cache('siteHeader');
                @endphp
                @include('livewire.home.home.home.navbar_categories',['headers6'=>$headers[7]])
                <!-- Primary menu-->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ url($headers[0]->link) }}"
                            data-bs-toggle="dropdown">{{ $headers[0]->title }}</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ url($headers[1]->link) }}"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">{{ $headers[1]->title }}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about.html">قوانین خریداران</a></li>
                            <li><a class="dropdown-item" href="contacts.html">قوانین فروشندگان</a></li>
                            <li><a class="dropdown-item" href="contacts.html">قوانین بازاریابان</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ url($headers[2]->link) }}"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">{{ $headers[2]->title }}</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ url($headers[3]->link) }}"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">{{ $headers[3]->title }}</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ url($headers[4]->link) }}"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">{{ $headers[4]->title }}</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{ url($headers[5]->link) }}"
                            data-bs-toggle="dropdown">{{ $headers[5]->title }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

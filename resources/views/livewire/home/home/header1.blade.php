<div class="navbar-sticky bg-light">

    <div class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0" href="/">
                <img src="{{ asset('img/weblogo.png') }}" width="80" alt="آتی یار">
            </a>
            <a class="navbar-brand d-sm-none me-2" href="index-2.html"><img src="img/logo-icon.png" width="74"
                    alt="کارتزیلا"></a>
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
                        @if (auth()->user()->admin == 1)    
                        <a class="border-bottom dropdown-item text-accent" href="{{ route('admin.index') }}">پنل ادمین</a>
                        @endif
                        @if (auth()->user()->seller == 1)    
                        <a class="border-bottom dropdown-item text-accent" href="{{ route('seller.dashboard.desk') }}">پنل فروشندگی</a>
                        @endif
    
                        <a class="dropdown-item" href="{{ url('/profile') }}">پروفایل کاربری</a>
                        <a class="dropdown-item" href="{{ url('/profile/orders') }}">سفارش های من</a>
                        {{-- <a class="dropdown-item" href="#">Another action</a> --}}
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <a href="{{ route('logout') }}" class="dropdown-item">خروج از حساب کاربری</a>
                        </form>
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
                        <span class="navbar-tool-label">{{ sizeof($carts) }}</span>
                        <i class="navbar-tool-icon ci-cart"></i>
                    </a>
                    {{-- @dd($carts) --}}
                    <a class="navbar-tool-text" href="{{ url('/cart') }}"><small>سبدخرید</small>{{
                        number_format($carts->totalPrice) }}</a>
                    <!-- Cart dropdown-->
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                            <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                @foreach ($carts as $cart)
                                <div class="widget-cart-item pb-2 border-bottom">
                                    <button class="btn-close text-danger" type="button" aria-label="Remove"><span
                                            aria-hidden="true">&times;</span></button>
                                    <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                            href="{{ url('/product/at-' . $cart->productSeller->product->id . '/' . $cart->productSeller->product->link) }}"><img
                                                src="/storage/{{ $cart->productSeller->product->img }}" width="64"
                                                alt="محصول"></a>
                                        <div class="ps-2">
                                            <h6 class="widget-product-title"><a href="shop-single-v2.html">{{
                                                    substr($cart->productSeller->product->title,0, 50) . '...' }}</a>
                                            </h6>
                                            <div class="widget-product-meta"><span class="text-accent me-2 ms-1">{{
                                                    number_format($cart->productSeller->discount_price) }}</span><span
                                                    class="text-muted">{{ 'x '. $cart->count }}</span></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                <div class="fs-sm me-2 py-2"><span class="text-muted">جمع کل:</span>
                                    <span class="text-accent fs-base ms-1">{{ number_format($carts->totalPrice)
                                        }}</span>
                                </div>
                                {{-- <a class="btn btn-outline-secondary btn-sm" href="{{ route('cart.index') }}">ادامه
                                    خرید<i class="ci-arrow-right ms-1 me-n1"></i></a> --}}
                            </div>
                            <a class="btn btn-primary btn-sm d-block w-100" href="{{ route('cart.index') }}">
                                <i class="ci-card me-2 fs-base align-middle"></i>سبد خرید
                            </a>
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
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                            href="{{ url($headers[0]->link) }}" data-bs-toggle="dropdown">{{ $headers[0]->title }}</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                            href="{{ url($headers[1]->link) }}" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">{{ $headers[1]->title }}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about.html">قوانین خریداران</a></li>
                            <li><a class="dropdown-item" href="contacts.html">قوانین فروشندگان</a></li>
                            <li><a class="dropdown-item" href="contacts.html">قوانین بازاریابان</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                            href="{{ url($headers[2]->link) }}" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">{{ $headers[2]->title }}</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                            href="{{ url($headers[3]->link) }}" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">{{ $headers[3]->title }}</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                            href="{{ url($headers[4]->link) }}" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">{{ $headers[4]->title }}</a>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                            href="{{ url($headers[5]->link) }}" data-bs-toggle="dropdown">{{ $headers[5]->title }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
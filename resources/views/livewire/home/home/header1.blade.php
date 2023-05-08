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
            <a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0" href="index-2.html">
                <img src="{{ asset('img/weblogo.png') }}" width="142" alt="کارتزیلا">
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
                            {{ auth()->user()->email }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('/profile/orders') }}">سفارش های من</a>
                            {{-- <a class="dropdown-item" href="#">Another action</a> --}}
                            <a class="dropdown-item" href="{{ url('/users/logout') }}">خروج از حساب کاربری</a>
                        </div>
                    </div>
                @else
                    <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
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
                @include('livewire.home.home.home.navbar_categories')
                <!-- Primary menu-->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown">خانه</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown position-static mb-0"><a class="dropdown-item border-bottom py-2"
                                    href="home-nft.html"><span class="d-block text-heading">بازار NFT<span
                                            class="badge bg-danger ms-1">جدید</span></span><small
                                        class="d-block text-muted">چند فروشندگی،مزایده</small></a>
                                <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                        href="home-nft.html" style="width: 250px;"><img
                                            src="img/home/preview/th08.jpg" alt="بازار NFT"></a></div>
                            </li>
                            <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                    href="home-fashion-store-v1.html"><span class="d-block text-heading">فروشگاه مد 1
                                    </span><small class="d-block text-muted">طرح کلاسیک فروشگاه</small></a>
                                <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                        href="home-fashion-store-v1.html" style="width: 250px;"><img
                                            src="img/home/preview/th01.jpg" alt="فروشگاه مد 1 "></a></div>
                            </li>
                            <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                    href="home-electronics-store.html"><span class="d-block text-heading">فروشگاه
                                        الکترونیکی</span><small class="d-block text-muted">اسلایدر+بنر
                                        تبلیغاتی</small></a>
                                <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                        href="home-electronics-store.html" style="width: 250px;"><img
                                            src="img/home/preview/th03.jpg" alt="فروشگاه الکترونیکی"></a></div>
                            </li>
                            <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                    href="home-marketplace.html"><span class="d-block text-heading">بازار</span><small
                                        class="d-block text-muted">چند فروشندگی</small></a>
                                <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                        href="home-marketplace.html" style="width: 250px;"><img
                                            src="img/home/preview/th04.jpg" alt="بازار"></a></div>
                            </li>
                            <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                    href="home-grocery-store.html"><span
                                        class="d-block text-heading">ارگانیک</span><small
                                        class="d-block text-muted">تمام صفحه+منو</small></a>
                                <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                        href="home-grocery-store.html" style="width: 250px;"><img
                                            src="img/home/preview/th06.jpg" alt="Grocery Store"></a></div>
                            </li>
                            <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                    href="home-food-delivery.html"><span class="d-block text-heading">خدمات تحویل
                                        غذا</span><small class="d-block text-muted">تحویل غذا و نوشیدنی</small></a>
                                <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                        href="home-food-delivery.html" style="width: 250px;"><img
                                            src="img/home/preview/th07.jpg" alt="خدمات تحویل غذا"></a></div>
                            </li>
                            <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                    href="home-fashion-store-v2.html"><span class="d-block text-heading">فروشگاه مد
                                        2</span><small class="d-block text-muted">اسلایدر+دسته بندی</small></a>
                                <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                        href="home-fashion-store-v2.html" style="width: 250px;"><img
                                            src="img/home/preview/th02.jpg" alt="فروشگاه مد 2"></a></div>
                            </li>
                            <li class="dropdown position-static mb-0"><a class="dropdown-item py-2"
                                    href="home-single-store.html"><span class="d-block text-heading">فروشگاه تک
                                        محصول</span><small class="d-block text-muted">تک محصول/مارک</small></a>
                                <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                        href="home-single-store.html" style="width: 250px;"><img
                                            src="img/home/preview/th05.jpg" alt="Single Product / Brand Store"></a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown">فروشگاه</a>
                        <div class="dropdown-menu p-0">
                            <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                                <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                    <div class="widget widget-links mb-4">
                                        <h6 class="fs-base mb-3">لایه های فروشگاه</h6>
                                        <ul class="widget-list">
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="shop-grid-ls.html">فروشگاه-نوار سمت راست</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="shop-grid-rs.html">فروشگاه-نوار سمت چپ</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="shop-grid-ft.html">فروشگاه-فیلتر بالا</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="shop-list-ls.html">لیست فروشگاه-منو راست</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="shop-list-rs.html">لیست فروشگاه-منوچپ</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="shop-list-ft.html">لیست فروشگاه-فیلتر بالا</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-links mb-4">
                                        <h6 class="fs-base mb-3">بازار</h6>
                                        <ul class="widget-list">
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="marketplace-category.html">دسته بندی</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="marketplace-single.html">تک صفحه</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="marketplace-vendor.html">چند فروشنده</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="marketplace-cart.html">سبدخرید</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="marketplace-checkout.html">بررسی</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-links">
                                        <h6 class="fs-base mb-3">فروشگاه سوپر مارکت </h6>
                                        <ul class="widget-list">
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="grocery-catalog.html">کاتالوگ محصول</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="grocery-single.html">صفحه محصول</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="grocery-checkout.html">بررسی</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                    <div class="widget widget-links mb-4">
                                        <h6 class="fs-base mb-3">تحویل غذا</h6>
                                        <ul class="widget-list">
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="food-delivery-category.html">دسته بندی</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="food-delivery-single.html">تک کالا(رستوران)</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="food-delivery-cart.html">سبد خرید(سفارش)</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="food-delivery-checkout.html">بررسی (خرید-پرداخت)</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-links">
                                        <h6 class="fs-base mb-3">بازار NFT<span
                                                class="badge bg-danger ms-1">جدید</span></h6>
                                        <ul class="widget-list">
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="nft-catalog-v1.html">کاتالوگ 1 </a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="nft-catalog-v2.html">کاتالوگ 2 </a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="nft-single-auction-live.html">تک مورد - حراج</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="nft-single-auction-ended.html">تک مورد- حراج زنده</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="nft-single-buy.html">تک مورد - خرید</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="nft-vendor.html">چند فروشنده</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="nft-connect-wallet.html">کیف پول</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="nft-create-item.html">ایتم جدید</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mega-dropdown-column pt-1 pt-lg-4 px-2 px-lg-3">
                                    <div class="widget widget-links mb-4">
                                        <h6 class="fs-base mb-3">صفحات فروشگاه</h6>
                                        <ul class="widget-list">
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="shop-categories.html">دسته بندی فروشگاه</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="shop-single-v1.html">محصول 1</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="shop-single-v2.html">محصول 2</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="shop-cart.html">سبدخرید</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="checkout-details.html">بررسی-جزئیات</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="checkout-shipping.html">بررسی-حمل و نقل</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="checkout-payment.html">بررسی-پرداخت</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="checkout-review.html">بررسی-مشاهده</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="checkout-complete.html">بررسی-کامل شدن</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="order-tracking.html">رهیگیری سفارش</a></li>
                                            <li class="widget-list-item"><a class="widget-list-link"
                                                    href="comparison.html">مقایسه محصول</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">حساب کاربری</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">حساب کاربری فروشگاه</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="account-orders.html">تاریخچه سفارشات</a></li>
                                    <li><a class="dropdown-item" href="account-profile.html">پروفایل</a></li>
                                    <li><a class="dropdown-item" href="account-address.html">آدرس</a></li>
                                    <li><a class="dropdown-item" href="account-payment.html">روش پرداخت</a></li>
                                    <li><a class="dropdown-item" href="account-wishlist.html">علاقه مندی</a></li>
                                    <li><a class="dropdown-item" href="account-tickets.html">تیکت</a></li>
                                    <li><a class="dropdown-item" href="account-single-ticket.html">صفحه تکی تیکت</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">پنل فروشنده</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="dashboard-settings.html">تنظیمات</a></li>
                                    <li><a class="dropdown-item" href="dashboard-purchases.html">خرید</a></li>
                                    <li><a class="dropdown-item" href="dashboard-favorites.html">علاقه مندی ها</a>
                                    </li>
                                    <li><a class="dropdown-item" href="dashboard-sales.html">فروش</a></li>
                                    <li><a class="dropdown-item" href="dashboard-products.html">محصولات</a></li>
                                    <li><a class="dropdown-item" href="dashboard-add-new-product.html">محصول
                                            جدید</a></li>
                                    <li><a class="dropdown-item" href="dashboard-payouts.html">پرداخت</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">بازار NFT<span
                                        class="badge bg-danger ms-1">جدید</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="nft-account-settings.html">پروفایل</a></li>
                                    <li><a class="dropdown-item" href="nft-account-payouts.html">پرداخت</a></li>
                                    <li><a class="dropdown-item" href="nft-account-my-items.html">گزینه ها</a></li>
                                    <li><a class="dropdown-item" href="nft-account-my-collections.html">کلکسیون</a>
                                    </li>
                                    <li><a class="dropdown-item" href="nft-account-favorites.html">علاقه مندی </a>
                                    </li>
                                    <li><a class="dropdown-item" href="nft-account-notifications.html">اعلانات</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="account-signin.html">ورود/ثبت نام</a></li>
                            <li><a class="dropdown-item" href="account-password-recovery.html">بازیابی رمز</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">صفحات</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">انواع منو</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="navbar-1-level-light.html">منو روشن 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="navbar-1-level-dark.html">منو تاریک 1</a>
                                    </li>
                                    <li><a class="dropdown-item" href="navbar-2-level-light.html">منو روشن 2</a>
                                    </li>
                                    <li><a class="dropdown-item" href="navbar-2-level-dark.html">منو تاریک 2</a>
                                    </li>
                                    <li><a class="dropdown-item" href="navbar-3-level-light.html">منو روشن 3</a>
                                    </li>
                                    <li><a class="dropdown-item" href="navbar-3-level-dark.html">منو تاریک 3</a>
                                    </li>
                                    <li><a class="dropdown-item" href="home-electronics-store.html">فروشگاه
                                            الکترونیکی</a></li>
                                    <li><a class="dropdown-item" href="home-marketplace.html">بازار</a></li>
                                    <li><a class="dropdown-item" href="home-grocery-store.html">منو کنار</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="about.html">درباره ما</a></li>
                            <li><a class="dropdown-item" href="contacts.html">تماس با ما</a></li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">مرکز راهنمایی</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="help-topics.html">موضوع های کمک </a></li>
                                    <li><a class="dropdown-item" href="help-single-topic.html">موضوع تکی</a></li>
                                    <li><a class="dropdown-item" href="help-submit-request.html">ارسال درخواست</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">پیدا نشد 404</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="404-simple.html">متن ساده 404 </a></li>
                                    <li><a class="dropdown-item" href="404-illustration.html">404 تصویر</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="sticky-footer.html">فوتر چسبیده</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">وبلاگ</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">طرح بندی لیست بلاگ</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-list-sidebar.html">لیست با نوار
                                            کناری</a></li>
                                    <li><a class="dropdown-item" href="blog-list.html">لیست بدون نوار کناری</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">طرح شبکه ای وبلاگ</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-grid-sidebar.html">شبکه با نوار
                                            کناری</a></li>
                                    <li><a class="dropdown-item" href="blog-grid.html">شبکه بدون نوار کناری</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">چیدمات تک پست</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-single-sidebar.html">مقاله با نوار
                                            کناری</a></li>
                                    <li><a class="dropdown-item" href="blog-single.html">مقاله بدون نوار کناری</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown">مستندات</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="lead text-muted pt-1"><i class="ci-book"></i></div>
                                        <div class="ms-2"><span class="d-block text-heading">اسناد</span><small
                                                class="d-block text-muted">شروع به سفارش</small></div>
                                    </div>
                                </a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="lead text-muted pt-1"><i class="ci-server"></i></div>
                                        <div class="ms-2"><span class="d-block text-heading">اجزا<span
                                                    class="badge bg-info ms-2">40+</span></span><small
                                                class="d-block text-muted">ساخت سریعتر</small></div>
                                    </div>
                                </a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="lead text-muted pt-1"><i class="ci-edit"></i></div>
                                        <div class="ms-2"><span class="d-block text-heading">تغییرات<span
                                                    class="badge bg-success ms-2">v2.4.0</span></span><small
                                                class="d-block text-muted">بروز رسانی</small></div>
                                    </div>
                                </a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="lead text-muted pt-1"><i class="ci-help"></i></div>
                                        <div class="ms-2"><span class="d-block text-heading">پشتیبانی</span><small
                                                class="d-block text-muted">setinco@gmail.com</small></div>
                                    </div>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

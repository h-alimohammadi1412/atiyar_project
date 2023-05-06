<!DOCTYPE html>
<html lang="fa">

<head>
    @include('livewire.home.home.head1')
</head>

<body class=" t-index">
    <!-- Google Tag Manager (noscript)-->

    <!-- ورود/ثبت نام modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab"
                                data-bs-toggle="tab" role="tab" aria-selected="true"><i
                                    class="ci-unlocked me-2 mt-n1"></i>ورود</a></li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab"
                                role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>ثبت نام</a></li>
                    </ul>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body tab-content py-4">
                    <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate
                        id="signin-tab">
                        <div class="mb-3">
                            <label class="form-label" for="si-email">آدرس ایمیل</label>
                            <input class="form-control" type="email" id="si-email" placeholder="setin@gmail.com"
                                required>
                            <div class="invalid-feedback">لطفا یک آدرس ایمیل معتبر ارائه کنید</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="si-password">پسورد</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="si-password" required>
                                <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3 d-flex flex-wrap justify-content-between">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="si-remember">
                                <label class="form-check-label" for="si-remember">به خاطر سپردن</label>
                            </div><a class="fs-sm" href="#">فراموشی رمز ؟ </a>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">ورود</button>
                    </form>
                    <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                        <div class="mb-3">
                            <label class="form-label" for="su-name">نام کامل</label>
                            <input class="form-control" type="text" id="su-name" placeholder="ستین کارتزیلا"
                                required>
                            <div class="invalid-feedback">لطفا نام خود را وارد کنید</div>
                        </div>
                        <div class="mb-3">
                            <label for="su-email">آدرس ایمیل</label>
                            <input class="form-control" type="email" id="su-email" placeholder="setin@gmail.com"
                                required>
                            <div class="invalid-feedback">لطفا یک آدرس ایمیل معتبر ارائه کنید</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-password">پسورد</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password" required>
                                <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-password-confirm">تکرار پسورد</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password-confirm" required>
                                <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">ثبت نام</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <main class="page-wrapper">
        <!-- Quick View Modal-->
        <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title product-title"><a href="shop-single-v1.html" data-bs-toggle="tooltip"
                                data-bs-placement="right" title="دیدن محصول">هودی اسپرت<i
                                    class="ci-arrow-right fs-lg ms-2"></i></a></h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!-- Product gallery-->
                            <div class="col-lg-7 pe-lg-0">
                                <div class="product-gallery">
                                    <div class="product-gallery-preview order-sm-2">
                                        <div class="product-gallery-preview-item active" id="first"><img
                                                class="image-zoom" src="img/shop/single/gallery/01.jpg"
                                                data-zoom="img/shop/single/gallery/01.jpg" alt="تصویر محصول">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                        <div class="product-gallery-preview-item" id="second"><img
                                                class="image-zoom" src="img/shop/single/gallery/02.jpg"
                                                data-zoom="img/shop/single/gallery/02.jpg" alt="تصویر محصول">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                        <div class="product-gallery-preview-item" id="third"><img
                                                class="image-zoom" src="img/shop/single/gallery/03.jpg"
                                                data-zoom="img/shop/single/gallery/03.jpg" alt="تصویر محصول">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                        <div class="product-gallery-preview-item" id="fourth"><img
                                                class="image-zoom" src="img/shop/single/gallery/04.jpg"
                                                data-zoom="img/shop/single/gallery/04.jpg" alt="تصویر محصول">
                                            <div class="image-zoom-pane"></div>
                                        </div>
                                    </div>
                                    <div class="product-gallery-thumblist order-sm-1"><a
                                            class="product-gallery-thumblist-item active" href="#first"><img
                                                src="img/shop/single/gallery/th01.jpg" alt="تصویر محصول"></a><a
                                            class="product-gallery-thumblist-item" href="#second"><img
                                                src="img/shop/single/gallery/th02.jpg" alt="تصویر محصول"></a><a
                                            class="product-gallery-thumblist-item" href="#third"><img
                                                src="img/shop/single/gallery/th03.jpg" alt="تصویر محصول"></a><a
                                            class="product-gallery-thumblist-item" href="#fourth"><img
                                                src="img/shop/single/gallery/th04.jpg" alt="تصویر محصول"></a></div>
                                </div>
                            </div>
                            <!-- Product details-->
                            <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                                <div class="product-details ms-auto pb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2"><a
                                            href="shop-single-v1.html#reviews">
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div><span
                                                class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74
                                                نظر</span>
                                        </a>
                                        <button class="btn-wishlist" type="button" data-bs-toggle="tooltip"
                                            title="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button>
                                    </div>
                                    <div class="mb-3"><span
                                            class="h3 fw-normal text-accent me-1">18.<small>99</small></span>
                                        <del class="text-muted fs-lg me-3">25.<small>00</small></del><span
                                            class="badge bg-danger badge-shadow align-middle mt-n2">تخفیف</span>
                                    </div>
                                    <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">رنگ:</span><span
                                            class="text-muted" id="colorOptionText">قرمز/تاریک</span></div>
                                    <div class="position-relative me-n4 mb-3">
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="color"
                                                id="color1" data-bs-label="colorOptionText" value="قرمز/تاریک"
                                                checked>
                                            <label class="form-option-label rounded-circle" for="color1"><span
                                                    class="form-option-color rounded-circle"
                                                    style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="color"
                                                id="color2" data-bs-label="colorOptionText" value="سفید/سیاه">
                                            <label class="form-option-label rounded-circle" for="color2"><span
                                                    class="form-option-color rounded-circle"
                                                    style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                                        </div>
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="color"
                                                id="color3" data-bs-label="colorOptionText" value="سفید/سیاه">
                                            <label class="form-option-label rounded-circle" for="color3"><span
                                                    class="form-option-color rounded-circle"
                                                    style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                                        </div>
                                        <div class="product-badge product-available mt-n1"><i
                                                class="ci-security-check"></i>ویژگی محصول</div>
                                    </div>
                                    <form class="mb-grid-gutter">
                                        <div class="mb-3">
                                            <label class="fw-medium pb-1" for="product-size">سایز : </label>
                                            <select class="form-select" required id="product-size">
                                                <option value="">انتخاب سایز</option>
                                                <option value="xs">XS</option>
                                                <option value="s">S</option>
                                                <option value="m">M</option>
                                                <option value="l">L</option>
                                                <option value="xl">XL</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 d-flex align-items-center">
                                            <select class="form-select me-3" style="width: 5rem;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i
                                                    class="ci-cart fs-lg me-2"></i>اضافه کردن به سبدخرید</button>
                                        </div>
                                    </form>
                                    <h5 class="h6 mb-3 pb-2 border-bottom"><i
                                            class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>اطلاعات
                                        محصول</h5>
                                    <h6 class="fs-sm mb-2">سبک</h6>
                                    <ul class="fs-sm ps-4">
                                        <li>بالا</li>
                                    </ul>
                                    <h6 class="fs-sm mb-2">ترکیب بندی</h6>
                                    <ul class="fs-sm ps-4">
                                        <li>دنده الاستیک: پنبه 95 </li>
                                        <li>پوشش: پنبه 100</li>
                                        <li>پنبه 80٪ ، پلی استر 20٪</li>
                                    </ul>
                                    <h6 class="fs-sm mb-2">هنری</h6>
                                    <ul class="fs-sm ps-4 mb-0">
                                        <li>183260098</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar 3 Level (Light)-->
        <header class="shadow-sm">
            <!-- Topbar-->
            <div class="topbar topbar-dark bg-dark">
                <div class="container">
                    <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown">لینک ها</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tel:00331697720"><i
                                        class="ci-support text-muted me-2"></i>09162352304</a></li>
                            <li><a class="dropdown-item" href="order-tracking.html"><i
                                        class="ci-location text-muted me-2"></i>رهیگیری سفارش</a></li>
                        </ul>
                    </div>
                    <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="ci-support"></i><span
                            class="text-muted me-1">پشتیبانی</span><a class="topbar-link"
                            href="tel:00331697720">09162352304</a></div>
                    <div class="tns-carousel  tns-controls-static d-none d-md-block">
                        <div class="tns-carousel-inner"
                            data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
                            <div class="topbar-text">ارسال رایگان با سفارش بیش از 200 </div>
                            <div class="topbar-text">ما ظرف 30 روز پول برمی گردانیم</div>
                            <div class="topbar-text">دوستانه 24/7 پشتیبانی مشتری</div>
                        </div>
                    </div>
                    <div class="ms-3 text-nowrap"><a class="topbar-link me-4 d-none d-md-inline-block"
                            href="order-tracking.html"><i class="ci-location"></i>رهیگیری سفارش</a>
                        <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle"
                                href="#" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png"
                                    width="20" alt="English">انگلیسی</a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li class="dropdown-item">
                                    <select class="form-select form-select-sm">
                                        <option value="usd">دلار</option>
                                        <option value="eur">تومان</option>
                                        <option value="ukp">یورو</option>
                                        <option value="jpy">پوند</option>
                                    </select>
                                </li>
                                <li><a class="dropdown-item pb-1" href="#"><img class="me-2"
                                            src="img/flags/fr.png" width="20" alt="فرانسه">فرانسه</a></li>
                                <li><a class="dropdown-item pb-1" href="#"><img class="me-2"
                                            src="img/flags/de.png" width="20" alt="آلمان">آلمان</a></li>
                                <li><a class="dropdown-item" href="#"><img class="me-2"
                                            src="img/flags/it.png" width="20" alt="ایتالیا">ایتالیا</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
            <div class="navbar-sticky bg-light">
                <div class="navbar navbar-expand-lg navbar-light">
                    <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0"
                            href="index-2.html"><img src="img/logo-dark.png" width="142" alt="کارتزیلا"></a><a
                            class="navbar-brand d-sm-none flex-shrink-0 me-2" href="index-2.html"><img
                                src="img/logo-icon.png" width="74" alt="کارتزیلا"></a>
                        <div class="input-group d-none d-lg-flex mx-4">
                            <input class="form-control rounded-end pe-5" type="text"
                                placeholder="جستجو برای محصول"><i
                                class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
                        </div>
                        <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a
                                class="navbar-tool navbar-stuck-toggler" href="#"><span
                                    class="navbar-tool-tooltip">منو</span>
                                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>
                            </a><a class="navbar-tool d-none d-lg-flex" href="account-wishlist.html"><span
                                    class="navbar-tool-tooltip">علاقه مندی</span>
                                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-heart"></i></div>
                            </a><a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal"
                                data-bs-toggle="modal">
                                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                                <div class="navbar-tool-text ms-n3"><small>سلام وارد شوید</small>حساب من</div>
                            </a>
                            <div class="navbar-tool dropdown ms-3"><a
                                    class="navbar-tool-icon-box bg-secondary dropdown-toggle"
                                    href="shop-cart.html"><span class="navbar-tool-label">4</span><i
                                        class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text"
                                    href="shop-cart.html"><small>سبدخرید</small>25600</a>
                                <!-- Cart dropdown-->
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                                        <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                            <div class="widget-cart-item pb-2 border-bottom">
                                                <button class="btn-close text-danger" type="button"
                                                    aria-label="Remove"><span
                                                        aria-hidden="true">&times;</span></button>
                                                <div class="d-flex align-items-center"><a class="flex-shrink-0"
                                                        href="shop-single-v1.html"><img
                                                            src="img/shop/cart/widget/01.jpg" width="64"
                                                            alt="محصول"></a>
                                                    <div class="ps-2">
                                                        <h6 class="widget-product-title"><a
                                                                href="shop-single-v1.html">کفش کتانی</a></h6>
                                                        <div class="widget-product-meta"><span
                                                                class="text-accent me-2">150<small>00</small></span><span
                                                                class="text-muted">x 1</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-cart-item py-2 border-bottom">
                                                <button class="btn-close text-danger" type="button"
                                                    aria-label="Remove"><span
                                                        aria-hidden="true">&times;</span></button>
                                                <div class="d-flex align-items-center"><a class="flex-shrink-0"
                                                        href="shop-single-v1.html"><img
                                                            src="img/shop/cart/widget/02.jpg" width="64"
                                                            alt="محصول"></a>
                                                    <div class="ps-2">
                                                        <h6 class="widget-product-title"><a
                                                                href="shop-single-v1.html">کفش کتانی</a></h6>
                                                        <div class="widget-product-meta"><span
                                                                class="text-accent me-2">79.<small>50</small></span><span
                                                                class="text-muted">x 1</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-cart-item py-2 border-bottom">
                                                <button class="btn-close text-danger" type="button"
                                                    aria-label="Remove"><span
                                                        aria-hidden="true">&times;</span></button>
                                                <div class="d-flex align-items-center"><a class="flex-shrink-0"
                                                        href="shop-single-v1.html"><img
                                                            src="img/shop/cart/widget/03.jpg" width="64"
                                                            alt="محصول"></a>
                                                    <div class="ps-2">
                                                        <h6 class="widget-product-title"><a
                                                                href="shop-single-v1.html">کفش کتانی</a></h6>
                                                        <div class="widget-product-meta"><span
                                                                class="text-accent me-2">22.<small>50</small></span><span
                                                                class="text-muted">x 1</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-cart-item py-2 border-bottom">
                                                <button class="btn-close text-danger" type="button"
                                                    aria-label="Remove"><span
                                                        aria-hidden="true">&times;</span></button>
                                                <div class="d-flex align-items-center"><a class="flex-shrink-0"
                                                        href="shop-single-v1.html"><img
                                                            src="img/shop/cart/widget/04.jpg" width="64"
                                                            alt="محصول"></a>
                                                    <div class="ps-2">
                                                        <h6 class="widget-product-title"><a
                                                                href="shop-single-v1.html">کفش کتانی</a></h6>
                                                        <div class="widget-product-meta"><span
                                                                class="text-accent me-2">9.<small>00</small></span><span
                                                                class="text-muted">x 1</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                            <div class="fs-sm me-2 py-2"><span class="text-muted">جمع کل:</span><span
                                                    class="text-accent fs-base ms-1">265.<small>00</small></span></div>
                                            <a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">ادامه
                                                خرید<i class="ci-arrow-right ms-1 me-n1"></i></a>
                                        </div><a class="btn btn-primary btn-sm d-block w-100"
                                            href="checkout-details.html"><i
                                                class="ci-card me-2 fs-base align-middle"></i>بررسی</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <!-- Search-->
                            <div class="input-group d-lg-none my-3"><i
                                    class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                                <input class="form-control rounded-start" type="text"
                                    placeholder="جستجو برای محصول">
                            </div>
                            <!-- Departments menu-->
                            <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0"
                                        href="#" data-bs-toggle="dropdown"><i class="ci-view-grid me-2"></i>بخش
                                        ها</a>
                                    <div class="dropdown-menu px-2 pb-4">
                                        <div class="d-flex flex-wrap flex-sm-nowrap">
                                            <div class="mega-dropdown-column pt-3 pt-sm-4 px-2 px-lg-3">
                                                <div class="widget widget-links"><a
                                                        class="d-block overflow-hidden rounded-3 mb-3"
                                                        href="#"><img src="img/shop/departments/01.jpg"
                                                            alt="تن پوش"></a>
                                                    <h6 class="fs-base mb-2">تن پوش</h6>
                                                    <ul class="widget-list">
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">لباس زنانه</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">لباس مردانه</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">لباس بچگانه</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                                <div class="widget widget-links"><a
                                                        class="d-block overflow-hidden rounded-3 mb-3"
                                                        href="#"><img src="img/shop/departments/02.jpg"
                                                            alt="کفش"></a>
                                                    <h6 class="fs-base mb-2">کفش</h6>
                                                    <ul class="widget-list">
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">کفش زنانه</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">کفش مردانه</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">کفش بچگانه</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                                <div class="widget widget-links"><a
                                                        class="d-block overflow-hidden rounded-3 mb-3"
                                                        href="#"><img src="img/shop/departments/03.jpg"
                                                            alt="گجت"></a>
                                                    <h6 class="fs-base mb-2">گجت ها</h6>
                                                    <ul class="widget-list">
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">تلفن های هوشمند و تبلت ها</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">اسباب های پوشیدنی</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">اسباب های پوشیدنی</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap flex-sm-nowrap">
                                            <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                                <div class="widget widget-links"><a
                                                        class="d-block overflow-hidden rounded-3 mb-3"
                                                        href="#"><img src="img/shop/departments/04.jpg"
                                                            alt="دکور"></a>
                                                    <h6 class="fs-base mb-2">مبلمان و دکور</h6>
                                                    <ul class="widget-list">
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">مبلمان منزل</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">مبلمان منزل</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">مبلمان منزل</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                                <div class="widget widget-links"><a
                                                        class="d-block overflow-hidden rounded-3 mb-3"
                                                        href="#"><img src="img/shop/departments/05.jpg"
                                                            alt="تجهیزات جانبی"></a>
                                                    <h6 class="fs-base mb-2">تجهیزات جانبی</h6>
                                                    <ul class="widget-list">
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">کلاه</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">کلاه</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">کلاه</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                                <div class="widget widget-links"><a
                                                        class="d-block overflow-hidden rounded-3 mb-3"
                                                        href="#"><img src="img/shop/departments/06.jpg"
                                                            alt="سرگرمی"></a>
                                                    <h6 class="fs-base mb-2">سرگرمی</h6>
                                                    <ul class="widget-list">
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">اسباب بازی های کودک</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">اسباب بازی های کودک</a></li>
                                                        <li class="widget-list-item mb-1"><a class="widget-list-link"
                                                                href="#">اسباب بازی های کودک</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- Primary menu-->
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle"
                                        href="#" data-bs-toggle="dropdown">خانه</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown position-static mb-0"><a
                                                class="dropdown-item border-bottom py-2" href="home-nft.html"><span
                                                    class="d-block text-heading">بازار NFT<span
                                                        class="badge bg-danger ms-1">جدید</span></span><small
                                                    class="d-block text-muted">چند فروشندگی،مزایده</small></a>
                                            <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a
                                                    class="d-block" href="home-nft.html" style="width: 250px;"><img
                                                        src="img/home/preview/th08.jpg" alt="بازار NFT"></a></div>
                                        </li>
                                        <li class="dropdown position-static mb-0"><a
                                                class="dropdown-item py-2 border-bottom"
                                                href="home-fashion-store-v1.html"><span
                                                    class="d-block text-heading">فروشگاه مد 1 </span><small
                                                    class="d-block text-muted">طرح کلاسیک فروشگاه</small></a>
                                            <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a
                                                    class="d-block" href="home-fashion-store-v1.html"
                                                    style="width: 250px;"><img src="img/home/preview/th01.jpg"
                                                        alt="فروشگاه مد 1 "></a></div>
                                        </li>
                                        <li class="dropdown position-static mb-0"><a
                                                class="dropdown-item py-2 border-bottom"
                                                href="home-electronics-store.html"><span
                                                    class="d-block text-heading">فروشگاه الکترونیکی</span><small
                                                    class="d-block text-muted">اسلایدر+بنر تبلیغاتی</small></a>
                                            <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a
                                                    class="d-block" href="home-electronics-store.html"
                                                    style="width: 250px;"><img src="img/home/preview/th03.jpg"
                                                        alt="فروشگاه الکترونیکی"></a></div>
                                        </li>
                                        <li class="dropdown position-static mb-0"><a
                                                class="dropdown-item py-2 border-bottom"
                                                href="home-marketplace.html"><span
                                                    class="d-block text-heading">بازار</span><small
                                                    class="d-block text-muted">چند فروشندگی</small></a>
                                            <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a
                                                    class="d-block" href="home-marketplace.html"
                                                    style="width: 250px;"><img src="img/home/preview/th04.jpg"
                                                        alt="بازار"></a></div>
                                        </li>
                                        <li class="dropdown position-static mb-0"><a
                                                class="dropdown-item py-2 border-bottom"
                                                href="home-grocery-store.html"><span
                                                    class="d-block text-heading">ارگانیک</span><small
                                                    class="d-block text-muted">تمام صفحه+منو</small></a>
                                            <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a
                                                    class="d-block" href="home-grocery-store.html"
                                                    style="width: 250px;"><img src="img/home/preview/th06.jpg"
                                                        alt="Grocery Store"></a></div>
                                        </li>
                                        <li class="dropdown position-static mb-0"><a
                                                class="dropdown-item py-2 border-bottom"
                                                href="home-food-delivery.html"><span
                                                    class="d-block text-heading">خدمات تحویل غذا</span><small
                                                    class="d-block text-muted">تحویل غذا و نوشیدنی</small></a>
                                            <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a
                                                    class="d-block" href="home-food-delivery.html"
                                                    style="width: 250px;"><img src="img/home/preview/th07.jpg"
                                                        alt="خدمات تحویل غذا"></a></div>
                                        </li>
                                        <li class="dropdown position-static mb-0"><a
                                                class="dropdown-item py-2 border-bottom"
                                                href="home-fashion-store-v2.html"><span
                                                    class="d-block text-heading">فروشگاه مد 2</span><small
                                                    class="d-block text-muted">اسلایدر+دسته بندی</small></a>
                                            <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a
                                                    class="d-block" href="home-fashion-store-v2.html"
                                                    style="width: 250px;"><img src="img/home/preview/th02.jpg"
                                                        alt="فروشگاه مد 2"></a></div>
                                        </li>
                                        <li class="dropdown position-static mb-0"><a class="dropdown-item py-2"
                                                href="home-single-store.html"><span
                                                    class="d-block text-heading">فروشگاه تک محصول</span><small
                                                    class="d-block text-muted">تک محصول/مارک</small></a>
                                            <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a
                                                    class="d-block" href="home-single-store.html"
                                                    style="width: 250px;"><img src="img/home/preview/th05.jpg"
                                                        alt="Single Product / Brand Store"></a></div>
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
                                                                href="shop-list-ft.html">لیست فروشگاه-فیلتر بالا</a>
                                                        </li>
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
                                                                href="food-delivery-single.html">تک کالا(رستوران)</a>
                                                        </li>
                                                        <li class="widget-list-item"><a class="widget-list-link"
                                                                href="food-delivery-cart.html">سبد خرید(سفارش)</a></li>
                                                        <li class="widget-list-item"><a class="widget-list-link"
                                                                href="food-delivery-checkout.html">بررسی
                                                                (خرید-پرداخت)</a></li>
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
                                                                href="nft-single-auction-live.html">تک مورد - حراج</a>
                                                        </li>
                                                        <li class="widget-list-item"><a class="widget-list-link"
                                                                href="nft-single-auction-ended.html">تک مورد- حراج
                                                                زنده</a></li>
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
                                                <li><a class="dropdown-item" href="account-orders.html">تاریخچه
                                                        سفارشات</a></li>
                                                <li><a class="dropdown-item" href="account-profile.html">پروفایل</a>
                                                </li>
                                                <li><a class="dropdown-item" href="account-address.html">آدرس</a></li>
                                                <li><a class="dropdown-item" href="account-payment.html">روش
                                                        پرداخت</a></li>
                                                <li><a class="dropdown-item" href="account-wishlist.html">علاقه
                                                        مندی</a></li>
                                                <li><a class="dropdown-item" href="account-tickets.html">تیکت</a></li>
                                                <li><a class="dropdown-item" href="account-single-ticket.html">صفحه
                                                        تکی تیکت</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">پنل فروشنده</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="dashboard-settings.html">تنظیمات</a></li>
                                                <li><a class="dropdown-item" href="dashboard-purchases.html">خرید</a>
                                                </li>
                                                <li><a class="dropdown-item" href="dashboard-favorites.html">علاقه
                                                        مندی ها</a></li>
                                                <li><a class="dropdown-item" href="dashboard-sales.html">فروش</a></li>
                                                <li><a class="dropdown-item"
                                                        href="dashboard-products.html">محصولات</a></li>
                                                <li><a class="dropdown-item"
                                                        href="dashboard-add-new-product.html">محصول جدید</a></li>
                                                <li><a class="dropdown-item" href="dashboard-payouts.html">پرداخت</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">بازار NFT<span
                                                    class="badge bg-danger ms-1">جدید</span></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href="nft-account-settings.html">پروفایل</a></li>
                                                <li><a class="dropdown-item"
                                                        href="nft-account-payouts.html">پرداخت</a></li>
                                                <li><a class="dropdown-item" href="nft-account-my-items.html">گزینه
                                                        ها</a></li>
                                                <li><a class="dropdown-item"
                                                        href="nft-account-my-collections.html">کلکسیون</a></li>
                                                <li><a class="dropdown-item" href="nft-account-favorites.html">علاقه
                                                        مندی </a></li>
                                                <li><a class="dropdown-item"
                                                        href="nft-account-notifications.html">اعلانات</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="account-signin.html">ورود/ثبت نام</a></li>
                                        <li><a class="dropdown-item" href="account-password-recovery.html">بازیابی
                                                رمز</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">صفحات</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">انواع منو</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="navbar-1-level-light.html">منو روشن
                                                        1</a></li>
                                                <li><a class="dropdown-item" href="navbar-1-level-dark.html">منو تاریک
                                                        1</a></li>
                                                <li><a class="dropdown-item" href="navbar-2-level-light.html">منو روشن
                                                        2</a></li>
                                                <li><a class="dropdown-item" href="navbar-2-level-dark.html">منو تاریک
                                                        2</a></li>
                                                <li><a class="dropdown-item" href="navbar-3-level-light.html">منو روشن
                                                        3</a></li>
                                                <li><a class="dropdown-item" href="navbar-3-level-dark.html">منو تاریک
                                                        3</a></li>
                                                <li><a class="dropdown-item"
                                                        href="home-electronics-store.html">فروشگاه الکترونیکی</a></li>
                                                <li><a class="dropdown-item" href="home-marketplace.html">بازار</a>
                                                </li>
                                                <li><a class="dropdown-item" href="home-grocery-store.html">منو
                                                        کنار</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="about.html">درباره ما</a></li>
                                        <li><a class="dropdown-item" href="contacts.html">تماس با ما</a></li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">مرکز راهنمایی</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="help-topics.html">موضوع های کمک
                                                    </a></li>
                                                <li><a class="dropdown-item" href="help-single-topic.html">موضوع
                                                        تکی</a></li>
                                                <li><a class="dropdown-item" href="help-submit-request.html">ارسال
                                                        درخواست</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">پیدا نشد 404</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="404-simple.html">متن ساده 404 </a>
                                                </li>
                                                <li><a class="dropdown-item" href="404-illustration.html">404
                                                        تصویر</a></li>
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
                                                <li><a class="dropdown-item" href="blog-list-sidebar.html">لیست با
                                                        نوار کناری</a></li>
                                                <li><a class="dropdown-item" href="blog-list.html">لیست بدون نوار
                                                        کناری</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">طرح شبکه ای وبلاگ</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="blog-grid-sidebar.html">شبکه با
                                                        نوار کناری</a></li>
                                                <li><a class="dropdown-item" href="blog-grid.html">شبکه بدون نوار
                                                        کناری</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                                data-bs-toggle="dropdown">چیدمات تک پست</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="blog-single-sidebar.html">مقاله با
                                                        نوار کناری</a></li>
                                                <li><a class="dropdown-item" href="blog-single.html">مقاله بدون نوار
                                                        کناری</a></li>
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
                                                    <div class="ms-2"><span
                                                            class="d-block text-heading">اسناد</span><small
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
                                                    <div class="ms-2"><span
                                                            class="d-block text-heading">تغییرات<span
                                                                class="badge bg-success ms-2">v2.4.0</span></span><small
                                                            class="d-block text-muted">بروز رسانی</small></div>
                                                </div>
                                            </a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="lead text-muted pt-1"><i class="ci-help"></i></div>
                                                    <div class="ms-2"><span
                                                            class="d-block text-heading">پشتیبانی</span><small
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
        </header>
        <!-- Hero slider-->
        <section class="tns-carousel tns-controls-lg">
            <div class="tns-carousel-inner"
                data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
                <!-- Item-->
                <div class="px-lg-5" style="background-color: #3aafd2;">
                    <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img
                            class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="img/home/hero-slider/01.jpg"
                            alt="تجهیزات جانبی">
                        <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1"
                            style="max-width: 42rem; z-index: 10;">
                            <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                                <h3 class="h2 text-light fw-light pb-1 from-start">تازه رسیده است!</h3>
                                <h2 class="text-light display-5 from-start delay-1">مجموعه تابستان عظیم</h2>
                                <p class="fs-lg text-light pb-3 from-start delay-2">لباس شنا ، تاپ ، شلوارک ، عینک
                                    آفتابی و موارد دیگر ...</p>
                                <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary"
                                        href="shop-grid-ls.html">خرید کنید<i
                                            class="ci-arrow-right ms-2 me-n1"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item-->
                <div class="px-lg-5" style="background-color: #f5b1b0;">
                    <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img
                            class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="img/home/hero-slider/02.jpg"
                            alt="تجهیزات جانبی">
                        <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1"
                            style="max-width: 42rem; z-index: 10;">
                            <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                                <h3 class="h2 text-light fw-light pb-1 from-bottom">تازه رسیده است!</h3>
                                <h2 class="text-light display-5 from-bottom delay-1">مجموعه تابستان عظیم</h2>
                                <p class="fs-lg text-light pb-3 from-bottom delay-2">لباس شنا ، تاپ ، شلوارک ، عینک
                                    آفتابی و موارد دیگر ...</p>
                                <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary"
                                        href="shop-grid-ls.html">خرید کنید<i
                                            class="ci-arrow-right ms-2 me-n1"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item-->
                <div class="px-lg-5" style="background-color: #eba170;">
                    <div class="d-lg-flex justify-content-between align-items-center ps-lg-4"><img
                            class="d-block order-lg-2 me-lg-n5 flex-shrink-0" src="img/home/hero-slider/03.jpg"
                            alt="تجهیزات جانبی">
                        <div class="position-relative mx-auto me-lg-n5 py-5 px-4 mb-lg-5 order-lg-1"
                            style="max-width: 42rem; z-index: 10;">
                            <div class="pb-lg-5 mb-lg-5 text-center text-lg-start text-lg-nowrap">
                                <h3 class="h2 text-light fw-light pb-1 from-top">تازه رسیده است!</h3>
                                <h2 class="text-light display-5 from-top delay-1">مجموعه تابستان عظیم</h2>
                                <p class="fs-lg text-light pb-3 from-top delay-2">لباس شنا ، تاپ ، شلوارک ، عینک
                                    آفتابی و موارد دیگر ...</p>
                                <div class="d-table scale-up delay-4 mx-auto mx-lg-0"><a class="btn btn-primary"
                                        href="shop-grid-ls.html">خرید کنید<i
                                            class="ci-arrow-right ms-2 me-n1"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Popular categories-->
        <section class="container position-relative pt-3 pt-lg-0 pb-5 mt-lg-n10" style="z-index: 10;">
            <div class="row">
                <div class="col-xl-8 col-lg-9">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body px-3 pt-grid-gutter pb-0">
                            <div class="row g-0 ps-1">
                                <div class="col-sm-4 px-2 mb-grid-gutter"><a
                                        class="d-block text-center text-decoration-none me-1"
                                        href="shop-grid-ls.html"><img class="d-block rounded mb-3"
                                            src="img/home/categories/cat-sm01.jpg" alt="Men">
                                        <h3 class="fs-base pt-1 mb-0">مرد</h3>
                                    </a></div>
                                <div class="col-sm-4 px-2 mb-grid-gutter"><a
                                        class="d-block text-center text-decoration-none me-1"
                                        href="shop-grid-ls.html"><img class="d-block rounded mb-3"
                                            src="img/home/categories/cat-sm02.jpg" alt="Women">
                                        <h3 class="fs-base pt-1 mb-0">زنانه</h3>
                                    </a></div>
                                <div class="col-sm-4 px-2 mb-grid-gutter"><a
                                        class="d-block text-center text-decoration-none me-1"
                                        href="shop-grid-ls.html"><img class="d-block rounded mb-3"
                                            src="img/home/categories/cat-sm03.jpg" alt="Kids">
                                        <h3 class="fs-base pt-1 mb-0">بچگانه</h3>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Products grid (محصولات پرطرفدار)-->
        <section class="container pt-md-3 pb-5 mb-md-3">
            <h2 class="h3 text-center">محصولات پرطرفدار</h2>
            <div class="row pt-4 mx-n2">
                <!-- Product-->
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                            href="shop-single-v1.html"><img src="img/shop/catalog/01.jpg" alt="محصول"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                href="#">زنانه و بچگانه</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کفش کتانی</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">154.<small>00</small></span>
                                </div>
                                <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-half active"></i><i
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
                                    data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a></div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>
                <!-- Product-->
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card"><span class="badge badge-danger badge-shadow">تخفیف</span>
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                            href="shop-single-v1.html"><img src="img/shop/catalog/02.jpg" alt="محصول"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                href="#">زنانه و بچگانه</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کفش کتانی</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">28.<small>50</small></span>
                                    <del class="fs-sm text-muted">38.<small>50</small></del>
                                </div>
                                <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star"></i><i
                                        class="star-rating-icon ci-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="text-center pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1" id="white"
                                        checked>
                                    <label class="form-option-label rounded-circle" for="white"><span
                                            class="form-option-color rounded-circle"
                                            style="background-color: #eaeaeb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1"
                                        id="blue">
                                    <label class="form-option-label rounded-circle" for="blue"><span
                                            class="form-option-color rounded-circle"
                                            style="background-color: #d1dceb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1"
                                        id="yellow">
                                    <label class="form-option-label rounded-circle" for="yellow"><span
                                            class="form-option-color rounded-circle"
                                            style="background-color: #f4e6a2;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color1"
                                        id="pink">
                                    <label class="form-option-label rounded-circle" for="pink"><span
                                            class="form-option-color rounded-circle"
                                            style="background-color: #f3dcff;"></span></label>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <select class="form-select form-select-sm me-2">
                                    <option>XS</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                                <button class="btn btn-primary btn-sm" type="button"><i
                                        class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                            </div>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view"
                                    data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a></div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>
                <!-- Product-->
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                            href="shop-single-v1.html"><img src="img/shop/catalog/03.jpg" alt="محصول"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                href="#">زنانه و بچگانه</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کفش کتانی</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">39.<small>50</small></span>
                                </div>
                                <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="text-center pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size2"
                                        id="xs">
                                    <label class="form-option-label" for="xs">XS</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size2" id="s"
                                        checked>
                                    <label class="form-option-label" for="s">S</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size2"
                                        id="m">
                                    <label class="form-option-label" for="m">M</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size2"
                                        id="l">
                                    <label class="form-option-label" for="l">L</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i
                                    class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view"
                                    data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a></div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>
                <!-- Product-->
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                            href="shop-single-v1.html"><img src="img/shop/catalog/07.jpg" alt="محصول"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                href="#">زنانه و بچگانه</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کفش کتانی</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">18.<small>99</small></span>
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
                                    <input class="form-check-input" type="radio" name="size4" id="xs3"
                                        checked>
                                    <label class="form-option-label" for="xs3">XS</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size4"
                                        id="s3">
                                    <label class="form-option-label" for="s3">S</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size4"
                                        id="m3">
                                    <label class="form-option-label" for="m3">M</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i
                                    class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view"
                                    data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a></div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>
                <!-- Product-->
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                            href="shop-single-v1.html"><img src="img/shop/catalog/04.jpg" alt="محصول"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                href="#">زنانه و بچگانه</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کفش کتانی</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">68.<small>40</small></span>
                                </div>
                                <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-half active"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="text-center pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size3" id="xs2"
                                        checked>
                                    <label class="form-option-label" for="xs2">XS</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size3"
                                        id="s2">
                                    <label class="form-option-label" for="s2">S</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size3"
                                        id="m2">
                                    <label class="form-option-label" for="m2">M</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size3"
                                        id="l2">
                                    <label class="form-option-label" for="l2">L</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i
                                    class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view"
                                    data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a></div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>
                <!-- Product-->
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                            href="shop-single-v1.html"><img src="img/shop/catalog/05.jpg" alt="محصول"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                href="#">زنانه و بچگانه</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کفش کتانی</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-muted fs-sm">موجود نیست</span></div>
                                <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden"><a
                                class="btn btn-secondary btn-sm d-block w-100 mb-2" href="shop-single-v1.html">دیدن
                                جزئیات</a>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view"
                                    data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a></div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>
                <!-- Product-->
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                            href="shop-single-v1.html"><img src="img/shop/catalog/06.jpg" alt="محصول"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                href="#">زنانه و بچگانه</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کفش کتانی</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">79.<small>50</small></span>
                                </div>
                                <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-half active"></i><i
                                        class="star-rating-icon ci-star"></i><i
                                        class="star-rating-icon ci-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body card-body-hidden">
                            <div class="text-center pb-2">
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color2" id="khaki"
                                        checked>
                                    <label class="form-option-label rounded-circle" for="khaki"><span
                                            class="form-option-color rounded-circle"
                                            style="background-color: #97947c;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color2"
                                        id="jeans">
                                    <label class="form-option-label rounded-circle" for="jeans"><span
                                            class="form-option-color rounded-circle"
                                            style="background-color: #99a8be;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="color2"
                                        id="white2">
                                    <label class="form-option-label rounded-circle" for="white2"><span
                                            class="form-option-color rounded-circle"
                                            style="background-color: #eaeaeb;"></span></label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i
                                    class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view"
                                    data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a></div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>
                <!-- Product-->
                <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                    <div class="card product-card">
                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                            href="shop-single-v1.html"><img src="img/shop/catalog/25.jpg" alt="محصول"></a>
                        <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                                href="#">زنانه و بچگانه</a>
                            <h3 class="product-title fs-sm"><a href="shop-single-v1.html">کفش کتانی</a></h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price"><span class="text-accent">215.<small>00</small></span>
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
                                    <input class="form-check-input" type="radio" name="size5"
                                        id="s4-80">
                                    <label class="form-option-label" for="s4-80">8</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size5" id="s4-85"
                                        checked>
                                    <label class="form-option-label" for="s4-85">8.5</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size5"
                                        id="s4-90">
                                    <label class="form-option-label" for="s4-90">9</label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                    <input class="form-check-input" type="radio" name="size5"
                                        id="s4-95">
                                    <label class="form-option-label" for="s4-95">9.5</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i
                                    class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view"
                                    data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a></div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>
            </div>
            <div class="text-center pt-3"><a class="btn btn-outline-accent" href="shop-grid-ls.html">محصولات
                    بیشتر<i class="ci-arrow-right ms-1"></i></a></div>
        </section>
        <!-- Banners-->
        <section class="container pb-4 mb-md-3">
            <div class="row">
                <div class="col-md-8 mb-4">
                    <div
                        class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden rounded-3">
                        <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start">
                            <h4 class="fs-lg fw-light mb-2">عجله کن! پیشنهاد زمان محدود</h4>
                            <h3 class="mb-4">گفتگوی تمام ستاره در فروش</h3><a
                                class="btn btn-primary btn-shadow btn-sm" href="#">خرید کنید</a>
                        </div><img class="d-block ms-auto" src="img/shop/catalog/banner.jpg" alt="Shop Converse">
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="d-flex flex-column h-100 justify-content-center bg-size-cover bg-position-center rounded-3"
                        style="background-image: url(img/blog/banner-bg.jpg);">
                        <div class="py-4 my-2 px-4 text-center">
                            <div class="py-1">
                                <h5 class="mb-2">بنر خود را در اینجا اضافه کنید</h5>
                                <p class="fs-sm text-muted">عجله کنید تا محل خود را رزرو کنید</p><a
                                    class="btn btn-primary btn-shadow btn-sm" href="#">تماس با ما</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured category (Hoodie)-->
        <section class="container mb-4 pb-3 pb-sm-0 mb-sm-5">
            <div class="row">
                <!-- Banner with controls-->
                <div class="col-md-5">
                    <div class="d-flex flex-column h-100 overflow-hidden rounded-3"
                        style="background-color: #e2e9ef;">
                        <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                            <div>
                                <h3 class="mb-1">روز هودی</h3><a class="fs-md" href="shop-grid-ls.html">خرید
                                    لباس هودی<i class="ci-arrow-right fs-xs align-middle ms-1"></i></a>
                            </div>
                            <div class="tns-carousel-controls" id="hoodie-day">
                                <button type="button"><i class="ci-arrow-left"></i></button>
                                <button type="button"><i class="ci-arrow-right"></i></button>
                            </div>
                        </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img
                                class="d-block w-100" src="img/home/categories/cat-lg04.jpg" alt="For Women"></a>
                    </div>
                </div>
                <!-- Product grid (carousel)-->
                <div class="col-md-7 pt-4 pt-md-0">
                    <div class="tns-carousel ltr">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop by brand-->
        <section class="container py-lg-4 mb-4">
            <h2 class="h3 text-center pb-4">با مارک خرید کنید</h2>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/01.png" style="width: 150px;"
                            alt="برند"></a></div>
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/02.png" style="width: 150px;"
                            alt="برند"></a></div>
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/03.png" style="width: 150px;"
                            alt="برند"></a></div>
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/04.png" style="width: 150px;"
                            alt="برند"></a></div>
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/05.png" style="width: 150px;"
                            alt="برند"></a></div>
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/06.png" style="width: 150px;"
                            alt="برند"></a></div>
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/07.png" style="width: 150px;"
                            alt="برند"></a></div>
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/08.png" style="width: 150px;"
                            alt="برند"></a></div>
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/09.png" style="width: 150px;"
                            alt="برند"></a></div>
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/10.png" style="width: 150px;"
                            alt="برند"></a></div>
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/11.png" style="width: 150px;"
                            alt="برند"></a></div>
                <div class="col-md-3 col-sm-4 col-6"><a
                        class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img
                            class="d-block mx-auto" src="img/shop/brands/12.png" style="width: 150px;"
                            alt="برند"></a></div>
            </div>
        </section>
        <!-- Blog + Instagram info cards-->
        <section class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-md-6"><a
                        class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary"
                        href="blog-list-sidebar.html">
                        <div class="card-body text-center"><i class="ci-edit h3 mt-2 mb-4 text-primary"></i>
                            <h3 class="h5 mb-1">وبلاگ را بخوانید</h3>
                            <p class="text-muted fs-sm">آخرین فروشگاه ، اخبار و روند مد</p>
                        </div>
                    </a></div>
                <div class="col-md-6"><a
                        class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
                        <div class="card-body text-center"><i class="ci-instagram h3 mt-2 mb-4 text-accent"></i>
                            <h3 class="h5 mb-1">در اینستاگرام دنبال کنید</h3>
                            <p class="text-muted fs-sm"># فروشگاه با کارتزیلا</p>
                        </div>
                    </a></div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark pt-5">
        <div class="container">
            <div class="row pb-2">
                <div class="col-md-4 col-sm-6">
                    <div class="widget widget-links widget-light pb-2 mb-4">
                        <h3 class="widget-title text-light">بخشهای فروشگاه</h3>
                        <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">کفش های کتانی
                                    و ورزشی</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">لباس ورزشی</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="widget widget-links widget-light pb-2 mb-4">
                        <h3 class="widget-title text-light">اطلاعات حساب</h3>
                        <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">حساب</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">نرخ حمل و نقل
                                </a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">بازپرداخت و
                                    جایگزینی</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">رهیگیری
                                    سفارش</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">اطلاعات
                                    تحویل</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">مالیات و هزینه
                                    ها</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-links widget-light pb-2 mb-4">
                        <h3 class="widget-title text-light">درباره ما</h3>
                        <ul class="widget-list">
                            <li class="widget-list-item"><a class="widget-list-link" href="#">درباره
                                    شرکت</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">تیم ما</a>
                            </li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">مشاغل</a></li>
                            <li class="widget-list-item"><a class="widget-list-link" href="#">خبر ها</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget pb-2 mb-4">
                        <h3 class="widget-title text-light pb-1">در جریان باشید</h3>
                        <form class="subscription-form validate" action="#" method="post"
                            name="mc-embedded-subscribe-form" target="_blank" novalidate>
                            <div class="input-group flex-nowrap"><i
                                    class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                                <input class="form-control rounded-start" type="email" name="EMAIL"
                                    placeholder="ایمیل شما" required>
                                <button class="btn btn-primary" type="submit" name="subscribe">عضویت</button>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; right: -5000px;" aria-hidden="true">
                                <input class="subscription-form-antispam" type="text"
                                    name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                            </div>
                            <div class="form-text text-light opacity-50">* برای دریافت پیشنهادات تخفیف ، به روزرسانی و
                                اطلاعات جدید محصولات ، در خبرنامه ما مشترک شوید.</div>
                            <div class="subscription-status"></div>
                        </form>
                    </div>
                    <div class="widget pb-2 mb-4">
                        <h3 class="widget-title text-light pb-1">برنامه ما را بارگیری کنید</h3>
                        <div class="d-flex flex-wrap">
                            <div class="me-2 mb-2"><a class="btn-market btn-apple" href="#"
                                    role="button"><span class="btn-market-subtitle">بارگیری در</span><span
                                        class="btn-market-title">App Store</span></a></div>
                            <div class="mb-2"><a class="btn-market btn-google" href="#"
                                    role="button"><span class="btn-market-subtitle">بارگیری در</span><span
                                        class="btn-market-title">Google Play</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5 bg-darker">
            <div class="container">
                <div class="row pb-3">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="d-flex"><i class="ci-rocket text-primary" style="font-size: 2.25rem;"></i>
                            <div class="ps-3">
                                <h6 class="fs-base text-light mb-1">تحویل سریع و رایگان</h6>
                                <p class="mb-0 fs-ms text-light opacity-50">ارسال رایگان برای کلیه سفارش های بالای 200
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="d-flex"><i class="ci-currency-exchange text-primary"
                                style="font-size: 2.25rem;"></i>
                            <div class="ps-3">
                                <h6 class="fs-base text-light mb-1">تضمین بازگشت پول</h6>
                                <p class="mb-0 fs-ms text-light opacity-50">ما ظرف 30 روز پول برمی گردانیم</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="d-flex"><i class="ci-support text-primary" style="font-size: 2.25rem;"></i>
                            <div class="ps-3">
                                <h6 class="fs-base text-light mb-1">پشتیبانی 24/7 مشتری</h6>
                                <p class="mb-0 fs-ms text-light opacity-50">دوستانه 24/7 پشتیبانی مشتری</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="d-flex"><i class="ci-card text-primary" style="font-size: 2.25rem;"></i>
                            <div class="ps-3">
                                <h6 class="fs-base text-light mb-1">پرداخت آنلاین ایمن</h6>
                                <p class="mb-0 fs-ms text-light opacity-50">ما دارای گواهی هستیم</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr-light mb-5">
                <div class="row pb-2">
                    <div class="col-md-6 text-center text-md-start mb-4">
                        <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 me-3"
                                href="#"><img class="d-block" src="img/footer-logo-light.png"
                                    width="117" alt="کارتزیلا"></a>
                            <div class="btn-group dropdown disable-autohide">
                                <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2"
                                    type="button" data-bs-toggle="dropdown"><img class="me-2"
                                        src="img/flags/en.png" width="20" alt="English">انگلیس</button>
                                <ul class="dropdown-menu my-1">
                                    <li class="dropdown-item">
                                        <select class="form-select form-select-sm">
                                            <option value="usd">دلار</option>
                                            <option value="eur">تومان</option>
                                            <option value="ukp">یورو</option>
                                            <option value="jpy">پوند</option>
                                        </select>
                                    </li>
                                    <li><a class="dropdown-item pb-1" href="#"><img class="me-2"
                                                src="img/flags/fr.png" width="20" alt="فرانسه">فرانسه</a>
                                    </li>
                                    <li><a class="dropdown-item pb-1" href="#"><img class="me-2"
                                                src="img/flags/de.png" width="20" alt="آلمان">آلمان</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><img class="me-2"
                                                src="img/flags/it.png" width="20" alt="ایتالیا">ایتالیا</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget-links widget-light">
                            <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                                <li class="widget-list-item me-4"><a class="widget-list-link" href="#">خروجی
                                        ها</a></li>
                                <li class="widget-list-item me-4"><a class="widget-list-link" href="#">شرکت
                                        های وابسته</a></li>
                                <li class="widget-list-item me-4"><a class="widget-list-link"
                                        href="#">پشتیبانی</a></li>
                                <li class="widget-list-item me-4"><a class="widget-list-link"
                                        href="#">شرایط</a></li>
                                <li class="widget-list-item me-4"><a class="widget-list-link" href="#">شرایط
                                        استفاده</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-end mb-4">
                        <div class="mb-3"><a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i
                                    class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook ms-2 mb-2"
                                href="#"><i class="ci-facebook"></i></a><a
                                class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i
                                    class="ci-instagram"></i></a><a
                                class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i
                                    class="ci-pinterest"></i></a><a class="btn-social bs-light bs-youtube ms-2 mb-2"
                                href="#"><i class="ci-youtube"></i></a></div><img class="d-inline-block"
                            src="img/cards-alt.png" width="187" alt="روش پرداخت">
                    </div>
                </div>
                <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© کلیه حقوق محفوظ است <a
                        class="text-light" href="#" target="_blank" rel="noopener">گروه ستین</a></div>
            </div>
        </div>
    </footer>
    <!-- Toolbar for handheld devices (Default)-->
    <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item"
                href="account-wishlist.html"><span class="handheld-toolbar-icon"><i
                        class="ci-heart"></i></span><span class="handheld-toolbar-label">علاقه مندی</span></a><a
                class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span
                    class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span
                    class="handheld-toolbar-label">منو</span></a><a class="d-table-cell handheld-toolbar-item"
                href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span
                        class="badge bg-primary rounded-pill ms-1">4</span></span><span
                    class="handheld-toolbar-label">265.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span
            class="btn-scroll-top-tooltip text-muted fs-sm me-2">بالا</span><i
            class="btn-scroll-top-icon ci-arrow-up"> </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    </div>
    @include('livewire.home.home.script1')
</body>

</html>

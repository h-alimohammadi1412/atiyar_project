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
                        role="tab">عمومی <span class='d-none d-sm-inline'>اطلاعات</span></a></li>
                <li class="nav-item"><a class="nav-link py-4 px-sm-4" href="#specs" data-bs-toggle="tab"
                        role="tab"><span class='d-none d-sm-inline'>لمسی</span> خاص</a></li>
                <li class="nav-item"><a class="nav-link py-4 px-sm-4" href="#reviews" data-bs-toggle="tab"
                        role="tab">نظرات <span class="fs-sm opacity-60">(74)</span></a></li>
            </ul>
            <div class="px-4 pt-lg-3 pb-3 mb-5">
                <div class="tab-content px-lg-3">
                    <!-- General info tab-->
                    <div class="tab-pane fade show active" id="general" role="tabpanel">
                        <div class="row">
                            <!-- گالری محصولات-->
                            <div class="col-lg-7 pe-lg-0">
                                <div class="product-gallery">
                                    <div class="product-gallery-preview order-sm-2">
                                        @foreach ($productGallerys as $key=>$productGallery)
                                            <div class="product-gallery-preview-item @if($key==0) active @endif"
                                                id="image_galerry_product_{{ $productGallery->id }}"><img
                                                    class="image-zoom"
                                                    src="{{ asset('files/uploads/products/gallerys/' . $productGallery->img) }}"
                                                    data-zoom="{{ asset('files/uploads/products/gallerys/' . $productGallery->img) }}"
                                                    alt="تصویر محصول">
                                                <div class="image-zoom-pane"></div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="product-gallery-thumblist order-sm-1">
                                        @foreach ($productGallerys as $key=>$productGallery)
                                            <a class="product-gallery-thumblist-item @if($key==0) active @endif"
                                                href="#image_galerry_product_{{ $productGallery->id }}"><img
                                                    src="{{ asset('files/uploads/products/gallerys/' . $productGallery->img) }}"
                                                    alt="تصویر محصول"></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Product details-->
                            <div class="col-lg-5 pt-4 pt-lg-0">
                                <div class="product-details ms-auto pb-3">
                                    <div class="h3 fw-normal text-accent mb-3 me-1">{{ $product->price }}  <del class="fs-5 text-border">{{ $product->discount_price }}</del></div>
                                    <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">رنگ:</span></div>
                                    <div class="position-relative me-n4 mb-3">
                                        @foreach ($productColors as $key=>$productColor)    
                                        <div class="form-check form-option form-check-inline mb-2">
                                            <input class="form-check-input" type="radio" name="color" id="color_{{ $productColor->id }}"
                                                data-bs-label="colorOption" value="{{ $productColor->color->name }}" @if($key==0) checked @endif>
                                            <label class="form-option-label rounded-circle" for="color_{{ $productColor->id }}"><span
                                                    class="form-option-color rounded-circle"
                                                    style="background-color: {{ $productColor->color->value }};"></span></label>
                                        </div>
                                        @endforeach                                       
                                    </div>
                                    <div class="d-flex align-items-center pt-2 pb-4">
                                        <select class="form-select me-3" style="width: 5rem;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <button class="btn btn-primary btn-shadow d-block w-100" type="button"><i
                                                class="ci-cart fs-lg me-2"></i>اضافه کردن به سبدخرید</button>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="w-100 me-3">
                                            <button class="btn btn-secondary d-block w-100" type="button"><i
                                                    class="ci-heart fs-lg me-2"></i><span
                                                    class='d-none d-sm-inline'>اضافه کردن </span>علاقه مندی</button>
                                        </div>
                                        <div class="w-100">
                                            <button class="btn btn-secondary d-block w-100" type="button"><i
                                                    class="ci-compare fs-lg me-2"></i>مقایسه</button>
                                        </div>
                                    </div>
                                    <!-- Product panels-->
                                    <div class="accordion mb-4" id="productPanels">
                                        <div class="accordion-item">
                                            <h3 class="accordion-header"><a class="accordion-button"
                                                    href="#shippingOptions" role="button" data-bs-toggle="collapse"
                                                    aria-expanded="true" aria-controls="shippingOptions"><i
                                                        class="ci-delivery text-muted lead align-middle mt-n1 me-2"></i>گزینه
                                                    های ارسال</a></h3>
                                            <div class="accordion-collapse collapse show" id="shippingOptions"
                                                data-bs-parent="#productPanels">
                                                <div class="accordion-body fs-sm">
                                                    <div class="d-flex justify-content-between border-bottom pb-2">
                                                        <div>
                                                            <div class="fw-semibold text-dark">پیک</div>
                                                            <div class="fs-sm text-muted">4-6 روز</div>
                                                        </div>
                                                        <div>16050</div>
                                                    </div>
                                                    <div class="d-flex justify-content-between border-bottom py-2">
                                                        <div>
                                                            <div class="fw-semibold text-dark">پست حمل</div>
                                                            <div class="fs-sm text-muted">4-6 روز</div>
                                                        </div>
                                                        <div>19000</div>
                                                    </div>
                                                    <div class="d-flex justify-content-between pt-2">
                                                        <div>
                                                            <div class="fw-semibold text-dark">پیک</div>
                                                            <div class="fs-sm text-muted">&mdash;</div>
                                                        </div>
                                                        <div>000</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h3 class="accordion-header"><a class="accordion-button collapsed"
                                                    href="#localStore" role="button" data-bs-toggle="collapse"
                                                    aria-expanded="true" aria-controls="localStore"><i
                                                        class="ci-location text-muted fs-lg align-middle mt-n1 me-2"></i>در
                                                    فروشگاه محلی پیدا کنید</a></h3>
                                            <div class="accordion-collapse collapse" id="localStore"
                                                data-bs-parent="#productPanels">
                                                <div class="accordion-body">
                                                    <select class="form-select">
                                                        <option value>انتخاب کشور</option>
                                                        <option value="Argentina">آرژانتین</option>
                                                        <option value="Belgium">بلژیک</option>
                                                        <option value="France">فرانسه</option>
                                                        <option value="Germany">آلمان</option>
                                                        <option value="Spain">اسپانیا</option>
                                                        <option value="UK">ایالات متحده</option>
                                                        <option value="USA">آمریکا</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sharing-->
                                    <label class="form-label d-inline-block align-middle my-2 me-3">اشتراک:</label><a
                                        class="btn-share btn-twitter me-2 my-2" href="#"><i
                                            class="ci-twitter"></i>توییتر</a><a
                                        class="btn-share btn-instagram me-2 my-2" href="#"><i
                                            class="ci-instagram"></i>اینستاگرام</a><a
                                        class="btn-share btn-facebook my-2" href="#"><i
                                            class="ci-facebook"></i>فیسبوک</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tech specs tab-->
                    <div class="tab-pane fade" id="specs" role="tabpanel">
                        <div class="d-md-flex justify-content-between align-items-start pb-4 mb-4 border-bottom">
                            <div class="d-flex align-items-center me-md-3"><img src="img/shop/single/gallery/th05.jpg"
                                    width="90" alt="تصویر محصول">
                                <div class="ps-3">
                                    <h6 class="fs-base mb-2">تلفن های هوشمند</h6>
                                    <div class="h4 fw-normal text-accent">124.<small>99</small></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <select class="form-select me-2" style="width: 5rem;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <button class="btn btn-primary btn-shadow me-2" type="button"><i
                                        class="ci-cart fs-lg me-sm-2"></i><span class="d-none d-sm-inline">اضافه کردن
                                        به سبدخرید</span></button>
                                <div class="me-2">
                                    <button class="btn btn-secondary btn-icon" type="button"
                                        data-bs-toggle="tooltip" title="اضافه کردن به علاقه مندی"><i
                                            class="ci-heart fs-lg"></i></button>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-icon" type="button"
                                        data-bs-toggle="tooltip" title="Compare"><i
                                            class="ci-compare fs-lg"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- Specs table-->

                        <div class="row pt-2">
                            <div class="col-lg-5 col-sm-6">
                                <h3 class="h6">اطلاعات عمومی</h3>
                                <ul class="list-unstyled fs-sm pb-2">
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">مدل :</span><span>ساعت هوشمند</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">جنسیت :</span><span>هر دو</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">تلفن :</span><span>دارد</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">قابلیت سازگاری با سیستم عامل
                                            :</span></span><span>اندروید</span></li>
                                </ul>
                                <h3 class="h6">مشخصات فیزیکی</h3>
                                <ul class="list-unstyled fs-sm pb-2">
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">شکل :</span><span>مستطیل</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">بدنه:</span><span>پلاستیک / سرامیک</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">مواد باند:</span><span>سیلیکون</span></li>
                                </ul>
                                <h3 class="h6">نمایش</h3>
                                <ul class="list-unstyled fs-sm pb-2">
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">نوع نمایش:</span><span>رنگی</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted"> سایز</span><span>1.28"</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">رزلوشن:</span><span>176 x 176</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">تاچ:</span><span>نه</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-sm-6 offset-lg-1">
                                <h3 class="h6">کارکرد</h3>
                                <ul class="list-unstyled fs-sm pb-2">
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">تماس های تلفنی:</span><span>اعلان تماس ورودی</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">نظارت بر:</span><span> ضربان قلب / فعالیت بدنی
                                        </span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">پشتیبانی:</span><span>بله</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">سنسورها:</span><span>ضربان قلب ، ژیروسکوپ ، ژئومغناطیسی
                                            ، حسگر نور</span></li>
                                </ul>
                                <h3 class="h6">باتری</h3>
                                <ul class="list-unstyled fs-sm pb-2">
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">باتری :</span><span>لی پال</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">ظرفیت باتری:</span><span>190 آمپر</span></li>
                                </ul>
                                <h3 class="h6">ابعاد</h3>
                                <ul class="list-unstyled fs-sm pb-2">
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">ابعاد :</span><span>195 x 20 میلی متر</span></li>
                                    <li class="d-flex justify-content-between pb-2 border-bottom"><span
                                            class="text-muted">وزن :</span><span>32 گرم</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Reviews tab-->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="d-md-flex justify-content-between align-items-start pb-4 mb-4 border-bottom">
                            <div class="d-flex align-items-center me-md-3"><img src="img/shop/single/gallery/th05.jpg"
                                    width="90" alt="تصویر محصول">
                                <div class="ps-3">
                                    <h6 class="fs-base mb-2">تلفن های هوشمند</h6>
                                    <div class="h4 fw-normal text-accent">124.<small>99</small></div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <select class="form-select me-2" style="width: 5rem;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <button class="btn btn-primary btn-shadow me-2" type="button"><i
                                        class="ci-cart fs-lg me-sm-2"></i><span class="d-none d-sm-inline">اضافه کردن
                                        به سبدخرید</span></button>
                                <div class="me-2">
                                    <button class="btn btn-secondary btn-icon" type="button"
                                        data-bs-toggle="tooltip" title="اضافه کردن به علاقه مندی"><i
                                            class="ci-heart fs-lg"></i></button>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-icon" type="button"
                                        data-bs-toggle="tooltip" title="Compare"><i
                                            class="ci-compare fs-lg"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- Reviews-->
                        <div class="row pt-2 pb-3">
                            <div class="col-lg-4 col-md-5">
                                <h2 class="h3 mb-4">74 بررسی</h2>
                                <div class="star-rating me-2"><i class="ci-star-filled fs-sm text-accent me-1"></i><i
                                        class="ci-star-filled fs-sm text-accent me-1"></i><i
                                        class="ci-star-filled fs-sm text-accent me-1"></i><i
                                        class="ci-star-filled fs-sm text-accent me-1"></i><i
                                        class="ci-star fs-sm text-muted me-1"></i></div><span
                                    class="d-inline-block align-middle">74 بررسی</span>
                                <p class="pt-3 fs-sm text-muted">58 از 74 (77٪)<br>مشتریان این محصول را توصیه می کنند
                                </p>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="text-nowrap me-3"><span
                                            class="d-inline-block align-middle text-muted">5</span><i
                                            class="ci-star-filled fs-xs ms-1"></i></div>
                                    <div class="w-100">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div><span class="text-muted ms-3">43</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="text-nowrap me-3"><span
                                            class="d-inline-block align-middle text-muted">4</span><i
                                            class="ci-star-filled fs-xs ms-1"></i></div>
                                    <div class="w-100">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 27%; background-color: #a7e453;" aria-valuenow="27"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><span class="text-muted ms-3">16</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="text-nowrap me-3"><span
                                            class="d-inline-block align-middle text-muted">3</span><i
                                            class="ci-star-filled fs-xs ms-1"></i></div>
                                    <div class="w-100">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 17%; background-color: #ffda75;" aria-valuenow="17"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><span class="text-muted ms-3">9</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="text-nowrap me-3"><span
                                            class="d-inline-block align-middle text-muted">2</span><i
                                            class="ci-star-filled fs-xs ms-1"></i></div>
                                    <div class="w-100">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 9%; background-color: #fea569;" aria-valuenow="9"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><span class="text-muted ms-3">4</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="text-nowrap me-3"><span
                                            class="d-inline-block align-middle text-muted">1</span><i
                                            class="ci-star-filled fs-xs ms-1"></i></div>
                                    <div class="w-100">
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;"
                                                aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><span class="text-muted ms-3">2</span>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-4 mb-3">
                        <div class="row py-4">
                            <!-- Reviews list-->
                            <div class="col-md-7">
                                <div class="d-flex justify-content-end pb-4">
                                    <div class="d-flex flex-nowrap align-items-center">
                                        <label class="fs-sm text-muted text-nowrap me-2 d-none d-sm-block"
                                            for="sort-reviews">مرتب سازی:</label>
                                        <select class="form-select form-select-sm" id="sort-reviews">
                                            <option>جدیدترین</option>
                                            <option>قدیمی ترین</option>
                                            <option>محبوبترین</option>
                                            <option>بالاترین امتیاز</option>
                                            <option>کمترین امتیاز</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Review-->
                                <div class="product-review pb-4 mb-4 border-bottom">
                                    <div class="d-flex mb-3">
                                        <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle"
                                                src="img/shop/reviews/01.jpg" width="50" alt="رافائل مارکز">
                                            <div class="ps-3">
                                                <h6 class="fs-sm mb-0">رافائل مارکز</h6><span
                                                    class="fs-ms text-muted">26 تیر 1400</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                            <div class="fs-ms text-muted">83٪ از کاربران این بررسی را مفید دانستند
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-md mb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                        با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                        سطرآنچنان که لازم است</p>
                                    <ul class="list-unstyled fs-ms pt-1">
                                        <li class="mb-1"><span class="fw-medium">جوانب مثبت: </span>آنها از پیگیری
                                            فصول بسیار لذت می برند</li>
                                        <li class="mb-1"><span class="fw-medium">منفی ها: </span>بسیار مبارک ، شما
                                            هستید</li>
                                    </ul>
                                    <div class="text-nowrap">
                                        <button class="btn-like" type="button">15</button>
                                        <button class="btn-dislike" type="button">3</button>
                                    </div>
                                </div>
                                <!-- Review-->
                                <div class="product-review pb-4 mb-4 border-bottom">
                                    <div class="d-flex mb-3">
                                        <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle"
                                                src="img/shop/reviews/02.jpg" width="50" alt="جاناتان دوو">
                                            <div class="ps-3">
                                                <h6 class="fs-sm mb-0">جاناتان دوو</h6><span
                                                    class="fs-ms text-muted">26 تیر 1400</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i>
                                            </div>
                                            <div class="fs-ms text-muted">83٪ از کاربران این بررسی را مفید دانستند
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-md mb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                        با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                        سطرآنچنان که لازم است</p>
                                    <ul class="list-unstyled fs-ms pt-1">
                                        <li class="mb-1"><span class="fw-medium">جوانب مثبت: </span>آنها از پیگیری
                                            فصول بسیار لذت می برند</li>
                                        <li class="mb-1"><span class="fw-medium">منفی ها: </span>بسیار مبارک ، شما
                                            هستید</li>
                                    </ul>
                                    <div class="text-nowrap">
                                        <button class="btn-like" type="button">34</button>
                                        <button class="btn-dislike" type="button">1</button>
                                    </div>
                                </div>
                                <!-- Review-->
                                <div class="product-review pb-4 mb-4 border-bottom">
                                    <div class="d-flex mb-3">
                                        <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle"
                                                src="img/shop/reviews/03.jpg" width="50" alt="لورا ویلسون">
                                            <div class="ps-3">
                                                <h6 class="fs-sm mb-0">لورا ویلسون</h6><span
                                                    class="fs-ms text-muted">26 تیر 1400</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                            <div class="fs-ms text-muted">83٪ از کاربران این بررسی را مفید دانستند
                                            </div>
                                        </div>
                                    </div>
                                    <p class="fs-md mb-2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                        با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                        سطرآنچنان که لازم است</p>
                                    <ul class="list-unstyled fs-ms pt-1">
                                        <li class="mb-1"><span class="fw-medium">جوانب مثبت: </span>آنها از پیگیری
                                            فصول بسیار لذت می برند</li>
                                        <li class="mb-1"><span class="fw-medium">منفی ها: </span>بسیار مبارک ، شما
                                            هستید</li>
                                    </ul>
                                    <div class="text-nowrap">
                                        <button class="btn-like" type="button">26</button>
                                        <button class="btn-dislike" type="button">9</button>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-outline-accent" type="button"><i
                                            class="ci-reload me-2"></i>بیشتر دیدن</button>
                                </div>
                            </div>
                            <!-- Leave review form-->
                            <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
                                <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
                                    <h3 class="h4 pb-2">یک بررسی بنویسید</h3>
                                    <form class="needs-validation" method="post" novalidate>
                                        <div class="mb-3">
                                            <label class="form-label" for="review-name">نام شما<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="text" required id="review-name">
                                            <div class="invalid-feedback">نام را وارد کنید</div><small
                                                class="form-text text-muted">در نظر نمایش داده می شود</small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="review-email">ایمیل شما<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control" type="email" required id="review-email">
                                            <div class="invalid-feedback">آدرس ایمیل را وارد کنید</div><small
                                                class="form-text text-muted">فقط احراز هویت - شما را اسپم نمی
                                                کنیم.</small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="review-rating">رتبه بندی<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" required id="review-rating">
                                                <option value="">انتخاب رتبه بندی</option>
                                                <option value="5">5 ستاره</option>
                                                <option value="4">4 ستاره</option>
                                                <option value="3">3 ستاره</option>
                                                <option value="2">2 ستاره</option>
                                                <option value="1">1 ستاره</option>
                                            </select>
                                            <div class="invalid-feedback">لطفاً رتبه بندی را انتخاب کنید!</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="review-text">نظر<span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" rows="6" required id="review-text"></textarea>
                                            <div class="invalid-feedback"> یک بررسی بنویسید!</div><small
                                                class="form-text text-muted">نظر شما باید حداقل 50 نویسه باشد.</small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="review-pros">مثبت</label>
                                            <textarea class="form-control" rows="2" placeholder="با ویرگول جدا شده است" id="review-pros"></textarea>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label" for="review-cons">منفی</label>
                                            <textarea class="form-control" rows="2" placeholder="با ویرگول جدا شده است" id="review-cons"></textarea>
                                        </div>
                                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">ارسال
                                            یک بررسی</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                                class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                            href="#"><img src="/storage/{{ $productCategory->img }}" alt="محصول"></a>
                        <div class="card-body py-2">
                            <h3 class="product-title fs-sm"><a href="/product/dkp-{{$productCategory->id}}/{{$productCategory->link}}">{{ substr($productCategory->title, 50) . '...' }}</a>
                            </h3>
                            <div class="d-flex justify-content-between">
                                <div class="product-price text-accent">26.<small>99</small></div>
                                <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-filled active"></i><i
                                        class="star-rating-icon ci-star-half active"></i><i
                                        class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
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

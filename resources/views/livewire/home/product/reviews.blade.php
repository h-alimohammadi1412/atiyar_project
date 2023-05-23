<div class="tab-pane fade" id="reviews" role="tabpanel">
    <div class="d-md-flex justify-content-between align-items-start pb-4 mb-4 border-bottom">
        <div class="d-flex align-items-center me-md-3"><img src="/storage/{{ $product->img }}"
                width="90" alt="تصویر محصول">
            <div class="ps-3">
                <h6 class="fs-base mb-2">{{ $product->title }}</h6>
                <div class="h4 fw-normal text-accent">{{ number_format($product_seller_selected->price) }} <del
                        class="fs-5 text-border">{{ number_format($product_seller_selected->discount_price) }}</del></div>
            </div>
        </div>
        <div class="d-flex align-items-center pt-3">
            <select class="form-select me-2" style="width: 5rem;">
                <option value="1">1</option>
                @for ($i = 2; $i <= $product_seller_selected->limit_order; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
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
                    data-bs-toggle="tooltip" title="مقایسه"><i
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
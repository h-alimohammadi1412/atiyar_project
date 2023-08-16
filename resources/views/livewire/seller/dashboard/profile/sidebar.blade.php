<aside class="col-lg-3 pe-xl-5">
    <!-- Account menu toggler (hidden on screens larger 992px)-->
    <div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu"
            data-bs-toggle="collapse"><i class="ci-menu me-2"></i>منو</a></div>
    <!-- Actual menu-->
    <div class="h-100 border-end mb-2">
        <div class="d-lg-block collapse" id="account-menu">
            {{-- <div class="bg-secondary p-4">
                <h3 class="fs-sm mb-0 text-muted">حساب کاربری</h3>
            </div> --}}
           
            <ul class="list-unstyled mb-0">
                <li class="border-bottom mb-0">
                    <a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="dashboard-settings.html">
                        <i class="ci-home opacity-60 me-2"></i>میزکار
                    </a>
                </li>
                <li class="mb-0 border-bottom">
                    <a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-favorites.html">
                        <i class="ci-sign-in opacity-60 me-2"></i>خروج
                    </a>
                </li>
                <li class="border-bottom mb-0">
                    <a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-purchases.html">
                        <i class="ci-user opacity-60 me-2"></i>پروفایل
                    </a>
                </li>
                <li class="mb-0 border-bottom">
                    <a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-favorites.html">
                        <i class="ci-edit opacity-60 me-2"></i>آموزش فروشندگان
                    </a>
                </li>
                <li class="mb-0 border-bottom">
                    <a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-favorites.html">
                        <i class="ci-security-check opacity-60 me-2"></i>قوانین فروشندگی
                    </a>
                </li>
                <li class="mb-0 border-bottom">
                    <a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-favorites.html">
                        <i class="ci-edit opacity-60 me-2"></i>آموزش های ویدئویی
                    </a>
                </li>
               
            </ul>
            <div class="accordion" id="shop-categories">
                <div class="accordion-item border-bottom border-0">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kitchenware5" aria-expanded="false" aria-controls="kitchenware5"><span
                                class="d-flex align-items-center"><i class="ci-pot fs-lg opacity-60 me-2"></i>محیط کاربری شما</span></button>
                    </h3>
                    <div class="collapse" id="kitchenware5" data-bs-parent="#shop-categories">
                        <div class="px-grid-gutter pt-1 pb-4">
                            <div class="widget widget-links">
                                <ul class="widget-list">
                                    <li class="widget-list-item"><a class="widget-list-link" href="#">آپلود مدارک</a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="#">قرارداد فروشندگان</a>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-bottom border-0">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kitchenware4" aria-expanded="false" aria-controls="kitchenware4"><span
                                class="d-flex align-items-center"><i class="ci-basket-alt fs-lg opacity-60 me-2"></i>فروشگاه</span></button>
                    </h3>
                    <div class="collapse" id="kitchenware4" data-bs-parent="#shop-categories">
                        <div class="px-grid-gutter pt-1 pb-4">
                            <div class="widget widget-links">
                                <ul class="widget-list">
                                    <li class="widget-list-item"><a class="widget-list-link" href="#">اطلاعات فروشگاه شما</a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="accordion-item border-bottom border-0">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kitchenware3" aria-expanded="false" aria-controls="kitchenware3"><span
                                class="d-flex align-items-center"><i class="ci-message fs-lg opacity-60 me-2"></i>پیام ها</span></button>
                    </h3>
                    <div class="collapse" id="kitchenware3" data-bs-parent="#shop-categories">
                        <div class="px-grid-gutter pt-1 pb-4">
                            <div class="widget widget-links">
                                <ul class="widget-list">
                                    <li class="widget-list-item"><a class="widget-list-link" href="#">پیام ها</a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-bottom border-0">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kitchenware1" aria-expanded="false" aria-controls="kitchenware1"><span
                                class="d-flex align-items-center"><i class="ci-percent fs-lg opacity-60 me-2"></i>طرح ها</span></button>
                    </h3>
                    <div class="collapse" id="kitchenware1" data-bs-parent="#shop-categories">
                        <div class="px-grid-gutter pt-1 pb-4">
                            <div class="widget widget-links">
                                <ul class="widget-list">
                                    <li class="widget-list-item"><a class="widget-list-link" href="#">انتخاب طرح</a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-bottom border-0">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed py-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kitchenware2" aria-expanded="false" aria-controls="kitchenware2"><span
                                class="d-flex align-items-center"><i class="ci-support fs-lg opacity-60 me-2"></i>پشتیبانی</span></button>
                    </h3>
                    <div class="collapse" id="kitchenware2" data-bs-parent="#shop-categories">
                        <div class="px-grid-gutter pt-1 pb-4">
                            <div class="widget widget-links">
                                <ul class="widget-list">
                                    <li class="widget-list-item"><a class="widget-list-link" href="#">پاسخ های دریافتی</a></li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="#">درخواست پشتیبانی</a>
                                    </li>
                                    <li class="widget-list-item"><a class="widget-list-link" href="#">آموزش های ویدیویی</a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="bg-secondary p-4">
                <h3 class="fs-sm mb-0 text-muted">داشبورد فروشنده</h3>
            </div> --}}
            {{-- <ul class="list-unstyled mb-0">
                <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                        href="dashboard-sales.html"><i class="ci-dollar opacity-60 me-2"></i>فروش<span
                            class="fs-sm text-muted ms-auto">1,375.00</span></a></li>
                <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                        href="dashboard-products.html"><i class="ci-package opacity-60 me-2"></i>محصولات<span
                            class="fs-sm text-muted ms-auto">5</span></a></li>
                <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                        href="dashboard-add-new-product.html"><i class="ci-cloud-upload opacity-60 me-2"></i>محصول
                        جدید</a></li>
                <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                        href="dashboard-payouts.html"><i class="ci-currency-exchange opacity-60 me-2"></i>پرداخت</a>
                </li>
                <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                        href="account-signin.html"><i class="ci-sign-out opacity-60 me-2"></i>خروج</a>
                </li>
            </ul> --}}
            <hr>
        </div>
    </div>
</aside>
<div>
    @include('livewire.seller.dashboard.profile.nav',['seller'=>$seller])
    <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
            <div class="row">
                <!-- Sidebar-->
                @include('livewire.seller.dashboard.profile.sidebar')
                <!-- Content-->
                <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
                    <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                        <h2 class=" fw-bold h3 py-2 text-center text-sm-start fs-5">روند فروشندگی شما <i
                                class="ci-arrow-right ms-2 fs-6"></i></h2>
                        <!-- Tabs-->
                        <div class="align-items-center d-flex justify-content-between mt-5">
                            <div>
                                <a href="{{ route('seller.dashboard.profile') }}" class="">
                                    {{-- {{ $checkProfile }} --}}
                                    <span
                                        class="align-items-center badge @if($checkProfile == 0 ) bg-primry @else bg-success @endif border d-flex justify-content-between rounded-circle text-body"
                                        style="width: 15px;height: 15px;">
                                        <i class=" @if($checkProfile == 0 ) ci-close @else ci-check @endif"
                                            style="font-size: 8px;margin-left: 16px;display: block;margin-top: 2px;margin-right: -4px;"></i>
                                    </span>
                                    <span class="text-body">تکمیل پروفایل</span>
                                    <i class="ci-arrow-right text-body" style="font-size: 11px;margin-right: 5px;"></i>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('seller.dashboard.store-information') }}" class="">
                                    <span
                                        class="align-items-center badge bg-primary border d-flex justify-content-between rounded-circle text-body"
                                        style="width: 15px;height: 15px;">
                                        <i class="ci-close"
                                            style="font-size: 8px;margin-left: 16px;display: block;margin-top: 2px;margin-right: -4px;"></i>
                                    </span>
                                    <span class="text-body">اطلاعات فروشگاه</span>
                                    <i class="ci-arrow-right text-body" style="font-size: 11px;margin-right: 5px;"></i>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('seller.dashboard.upload-document') }}" class="">
                                    <span
                                        class="align-items-center badge bg-primary border d-flex justify-content-between rounded-circle text-body"
                                        style="width: 15px;height: 15px;">
                                        <i class="ci-close"
                                            style="font-size: 8px;margin-left: 16px;display: block;margin-top: 2px;margin-right: -4px;"></i>
                                    </span>
                                    <span class="text-body">آپلود مدارک</span>
                                    <i class="ci-arrow-right text-body" style="font-size: 11px;margin-right: 5px;"></i>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('seller.dashboard.contract') }}" class="">
                                    <span
                                        class="align-items-center badge bg-primary border d-flex justify-content-between rounded-circle text-body"
                                        style="width: 15px;height: 15px;">
                                        <i class="ci-close"
                                            style="font-size: 8px;margin-left: 16px;display: block;margin-top: 2px;margin-right: -4px;"></i>
                                    </span>
                                    <span class="text-body">امضای قرارداد</span>
                                    <i class="ci-arrow-right text-body" style="font-size: 11px;margin-right: 5px;"></i>
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('seller.dashboard.plans') }}" class="">
                                    <span
                                        class="align-items-center badge bg-primary border d-flex justify-content-between rounded-circle text-body"
                                        style="width: 15px;height: 15px;">
                                        <i class="ci-close"
                                            style="font-size: 8px;margin-left: 16px;display: block;margin-top: 2px;margin-right: -4px;"></i>
                                    </span>
                                    <span class="text-body">خرید طرح</span>
                                    <i class="ci-arrow-right text-body" style="font-size: 11px;margin-right: 5px;"></i>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="">
                                    <span
                                        class="align-items-center badge bg-primary border d-flex justify-content-between rounded-circle text-body"
                                        style="width: 15px;height: 15px;">
                                        <i class="ci-close"
                                            style="font-size: 8px;margin-left: 16px;display: block;margin-top: 2px;margin-right: -4px;"></i>
                                    </span>
                                    <span class="text-body">مدیریت کالاها</span>
                                </a>
                            </div>
                        </div>

                        <div class="alert alert-warning mt-5 fs-sm d-flex justify-content-center align-items-center">
                            <i class="ci-security-close fs-2 me-3"></i>
                            <div>
                                فروشنده گرامی ، شما در حال حاضر دارای طرح فعالی نیستید. برای بهره مندی از امکانات محیط
                                فروشندگی به قسمت طرح ها رفته و طرح مورد نظر خود را انتخاب نمایید
                            </div>
                        </div>
                        <div class="alert alert-warning align-items-center d-flex fs-sm justify-content-center mt-5 text-body"
                            style="background-color: #d1d3e0;">
                            <i class="ci-security-close fs-2 me-3"></i>
                            <div>
                                توجه : فروشنده گرامی ، شما زمانی قادر به درج کالا می باشید که طرح خریداری نموده باشید و
                                قرارداد الکترونیک خود را امضا نموده باشید
                            </div>
                        </div>
                        <div class="row mx-n2 pt-2">
                            <div class="col-md-4 col-sm-6 px-2 mb-4">
                                <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                                    <h3 class="fs-sm text-muted">تعداد سفارشات</h3>
                                    <p class="h2 mb-2">000</p>
                                    <p class="fs-ms text-muted mb-0">فروش از 01/04/1400 تا 31/04/1400 </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 px-2 mb-4">
                                <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                                    <h3 class="fs-sm text-muted">تعداد کالاها</h3>
                                    <p class="h2 mb-2">000</p>
                                    <p class="fs-ms text-muted mb-0">پرداخت شده در 24/04/1400 </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 px-2 mb-4">
                                <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                                    <h3 class="fs-sm text-muted">تخفیفات فعال</h3>
                                    <p class="h2 mb-2">000</p>
                                    <p class="fs-ms text-muted mb-0">بر اساس قیمت لیست</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 px-2 mb-4">
                                <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                                    <h3 class="fs-sm text-muted">طرح فعلی شما</h3>
                                    <p class="h2 mb-2">000</p>
                                    <p class="fs-ms text-muted mb-0">مجموع فروش</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 px-2 mb-4">
                                <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                                    <h3 class="fs-sm text-muted">طرح فعلی شما</h3>
                                    <p class="h2 mb-2">000</p>
                                    <p class="fs-ms text-muted mb-0">تعداد نظرات</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 px-2 mb-4">
                                <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                                    <h3 class="fs-sm text-muted">ویرایش پروفایل</h3>
                                    <p class="h2 mb-2">000</p>
                                    <p class="fs-ms text-muted mb-0">بر اساس قیمت لیست</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
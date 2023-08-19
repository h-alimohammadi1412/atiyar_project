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
                        <h2 class="border-bottom h3 pb-4 py-2 text-center text-sm-start">اطلاعات فروشگاه شما</h2>
                        <!-- Tabs-->
                        <div>
                            <div class="alert alert-warning mt-5 fs-sm d-flex ">
                                <i class="ci-security-close fs-2 me-3"></i>
                                <div>
                                    تمامی اطلاعات را به فارسی و با دقت وارد نمایید. <br>
                                    تمامی اعداد به انگلیسی و بدون خط فاصله و فاصله تایپ شود. </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-around my-4">

                                <span>نام و نام خانوادگی : مهدی شیخی</span>
                                <span>شناسه فروشگاه : 136</span>
                            </div>
                            <div class="bg-secondary rounded-3 p-4 mb-4">
                                <div class="d-flex align-items-center">
                                    <img width="90"
                                        src="@if ($img) {{ $img->temporaryUrl() }} @else {{ asset('img/icon-company1.jpg') }} @endif">
                                    <input type="file" wire:model='img'>
                                    <div class="ps-3">
                                        {{-- <button class="btn btn-light btn-shadow btn-sm mb-2" type="button"><i
                                                class="ci-loading me-2"></i>تغییر <span
                                                class="d-none d-sm-inline">آواتار</span></button> --}}
                                        {{-- <div class="p mb-0 fs-ms text-muted">تصویر JPG ، GIF یا PNG را بارگذاری
                                            کنید. 300 *300 مورد نیاز است.</div> --}}
                                    </div>
                                </div>
                            </div>
                            <form wire:submit.prevent
                            <div class="row gx-4 gy-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-fn">نام فروشگاه (این نام معرف کسب و کار
                                        شماست و باید به فارسی نوشته شود) <span class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-ln">شماره شناسنامه <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-ln" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">کد ملی <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-profile-name">محل تولد </label>
                                    <input class="form-control" type="text" id="dashboard-profile-name"
                                        value="گروه ستین">
                                </div>
                                {{-- <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">کد ملی/کد اتباع خارجی<span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                    <div class="d-sm-flex justify-content-between align-items-center mt-2">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="checkbox" id="freelancer" checked="">
                                            <label class="form-check-label" for="freelancer">اتباع خارجی هستم</label>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">تاریخ تولد <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">پست الکترونیک <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">وضعیت مجوز <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">شماره صنفی یا شماره ثبت شرکت <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <h3>موقعیت مکانی</h3>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">استان <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">شهر <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">شهرستان <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">روستا <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">محله <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">پلاک <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">آدرس فروشگاه <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">کد پستی <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">تلفن فروشگاه <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">ساعات تماس <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">لینک آپارات <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">لینک اینستاگرام <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">لینک تلگرام <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <h3>تنظیمات فروشگاه</h3>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">نام کاربری فروشگاه <span
                                            class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="dashboard-email">شناسه کاربری زرین پال (merchant_id)
                                        <span class="text-primary">*</span></label>
                                    <input class="form-control" type="text" id="dashboard-fn" value="">
                                </div>
                                <div class="col-12">
                                    <hr class="mt-2 mb-4">
                                    <div class="d-sm-flex justify-content-end align-items-center">
                                        <button class="btn btn-primary mt-3 mt-sm-0" type="button">ذخیره
                                            تغییرات</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
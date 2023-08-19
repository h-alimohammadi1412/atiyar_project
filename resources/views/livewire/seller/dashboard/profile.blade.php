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
                        <h2 class="border-bottom h3 pb-4 py-2 text-center text-sm-start">پروفایل</h2>
                        <!-- Tabs-->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="nav-item"><a class="nav-link px-0 active" href="#profile" data-bs-toggle="tab"
                                    role="tab">
                                    <div class="d-none d-lg-block"><i class="ci-user opacity-60 me-2"></i>اطلاعات شخصی
                                    </div>
                                    <div class="d-lg-none text-center"><i
                                            class="ci-user opacity-60 d-block fs-xl mb-2"></i><span
                                            class="fs-ms">اطلاعات شخصی</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link px-0" href="#notifications" data-bs-toggle="tab"
                                    role="tab">
                                    <div class="d-none d-lg-block"><i class="ci-edit opacity-60 me-2"></i>تغییر رمز عبور
                                    </div>
                                    <div class="d-lg-none text-center"><i
                                            class="ci-bell opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">تغییر
                                            رمز عبور</span></div>
                                </a></li>
                        </ul>
                        <!-- Tab content-->
                        <div class="tab-content">
                            <!-- Profile-->
                            <div class="tab-pane fade show active" id="profile" role="tabpanel">
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
                                <form wire:submit.prevent='personalInformationForm'>
                                    @include('errors.error')
                                    <div class="row gx-4 gy-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-fn">نام <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control" type="text" id="dashboard-fn"
                                                @if(is_null($user->name)) value="" wire:model.defer='user.name' @else
                                            value="{{ $user->name }}" disabled @endif>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-ln">نام خانوادگی <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control" type="text" id="dashboard-ln"
                                                @if(is_null($user->family)) value="" wire:model.defer='user.family'
                                            @else
                                            value="{{ $user->family }}" disabled @endif>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">تلفن همراه <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control" type="text" id="dashboard-fn"
                                                value="{{ $user->mobile }}" disabled>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-profile-name">پست الکترونیک
                                                *</label>
                                            <input class="form-control" type="text" id="dashboard-profile-name"
                                                @if(is_null($user->email)) value="" wire:model.defer='user.email'
                                            @else
                                            value="{{ $user->email }}" disabled @endif>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">کد ملی/کد اتباع خارجی<span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control" type="text" id="dashboard-fn"
                                                @if(is_null($seller->national_code)) value=""
                                            wire:model.defer='seller.national_code'
                                            @else
                                            value="{{ $seller->national_code }}" disabled @endif>
                                            <div class="d-sm-flex justify-content-between align-items-center mt-2">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" id="freelancer"
                                                        checked="">
                                                    <label class="form-check-label" for="freelancer">اتباع خارجی
                                                        هستم</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">شماره شناسنامه <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control" type="text" id="dashboard-fn"
                                                @if(is_null($seller->shenasname_code)) value=""
                                            wire:model.defer='seller.shenasname_code'
                                            @else
                                            value="{{ $seller->shenasname_code }}" disabled @endif>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">تاریخ تولد <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control" type="text" id="dashboard-fn"
                                                @if(is_null($user->birthday)) value="" wire:model.defer='user.birthday'
                                            @else
                                            value="{{ $user->birthday }}" disabled @endif>

                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">نام پدر <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control" type="text" id="dashboard-fn"
                                                @if(is_null($seller->father_name))
                                            value="" wire:model.defer='seller.father_name'
                                            @else
                                            value="{{ $seller->father_name }}" disabled @endif>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">جنسیت <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control" type="text" id="dashboard-fn"
                                                @if(is_null($seller->gender))
                                            value="" wire:model.defer='seller.gender'
                                            @else
                                            value="{{ $seller->gender }}" disabled @endif>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">شماره کارت <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control" type="text" id="dashboard-fn"
                                                @if(is_null($seller->number_cart))
                                            value="" wire:model.defer='seller.number_cart'
                                            @else
                                            value="{{ $seller->number_cart }}" disabled @endif>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">شماره شبا <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control" type="text" id="dashboard-fn"
                                                @if(is_null($seller->bank_shaba))
                                            value="" wire:model.defer='seller.bank_shaba'
                                            @else
                                            value="{{ $seller->bank_shaba }}" disabled @endif>
                                        </div>

                                        <div class="col-12">
                                            <hr class="mt-2 mb-4">
                                            <div class="d-sm-flex justify-content-end align-items-center">
                                                <button class="btn btn-primary mt-3 mt-sm-0">ذخیره
                                                    تغییرات</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Notifications-->
                            <div class="tab-pane fade" id="notifications" role="tabpanel">
                                <div
                                    class="alert alert-warning mt-5 fs-sm d-flex justify-content-center align-items-center">
                                    <i class="ci-security-close fs-2 me-3"></i>
                                    <div>
                                        کاربر گرامی ، سعی کنید از رمز های قوی که ترکیبی از حروف و اعداد و حداقل هشت رقمی
                                        هستند استفاده نمایید و به صورت دوره ای رمز عبور خود را تغییر دهید
                                    </div>
                                </div>

                                <div class="row gx-4 gy-3">
                                    <div class="col-sm-9">
                                        <label class="form-label" for="dashboard-fn">کلمه عبور فعلی<span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn" value="">
                                    </div>
                                    <div class="col-sm-9">
                                        <label class="form-label" for="dashboard-ln">کلمه عبور جدید <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-ln" value="">
                                    </div>
                                    <div class="col-sm-9">
                                        <label class="form-label" for="dashboard-email">تأیید کلمه عبور <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn" value="">
                                    </div>

                                    <div class="col-12">
                                        <hr class="mt-2 mb-4">
                                        <div class="d-sm-flex justify-content-end align-items-center">
                                            <button class="btn btn-primary mt-3 mt-sm-0" type="button">تغییر رمز
                                                عبور</button>
                                        </div>
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
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

                                <span>نام و نام خانوادگی : {{ $seller->user->name .' '.$seller->user->family }}</span>
                                <span>شناسه فروشگاه : {{ $seller->code_seller ?? '---' }}</span>
                            </div>
                            <div class="bg-secondary rounded-3 p-4 mb-4">
                                <div class="d-flex align-items-center">
                                    <img width="90"
                                        src="@if ($img) {{ $img->temporaryUrl() }} @else @if(!is_null($seller->store->logo)) /storage/{{ $seller->store->logo }}   @else {{ asset('img/icon-company1.jpg') }}  @endif @endif">
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
                            {{ $img }}
                            <form wire:submit.prevent='storeInformationForm'>
                                @include('errors.error')
                                <div class="row gx-4 gy-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-fn">نام فروشگاه (این نام معرف کسب و کار
                                            شماست و باید به فارسی نوشته شود) <span class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            value="{{ $seller->store->name  }}" disabled>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">وضعیت مجوز </label>
                                        <select class="form-control" wire:model.lazy="seller.store.license">
                                            <option value="0">انتخاب کنید...</option>
                                            <option value="1">دارای مجوز یا پروانه کسب هستم</option>
                                            <option value="2">در حال حاضر دارای مجوز یا پروانه کسب نیستم</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">شماره صنفی یا شماره ثبت شرکت
                                        </label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy="seller.store.guild_number">
                                    </div>
                                    <h3>موقعیت مکانی</h3>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">استان <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='state'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">شهر <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='city'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">شهرستان <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='Village'>
                                    </div>
                                    {{-- <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">روستا <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='seller.store.Village'>
                                    </div> --}}
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">محله <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='seller.store.neighborhood'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">پلاک </label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='seller.store.Plaque'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">آدرس فروشگاه <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='address'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">کد پستی <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='postal_code'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">تلفن فروشگاه <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='telephone'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">ساعات تماس </label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='seller.store.call_hours'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">لینک آپارات </label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='seller.aparat'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">لینک اینستاگرام </label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='seller.instagram'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">لینک تلگرام </label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='seller.telegram'>
                                    </div>
                                    <h3>تنظیمات فروشگاه</h3>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">نام کاربری فروشگاه <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='user_name'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">شناسه کاربری زرین پال
                                            (merchant_id)
                                            <span class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.lazy='merchant_id'>
                                    </div>
                                    <div class="col-12">
                                        <hr class="mt-2 mb-4">
                                        <div class="d-sm-flex justify-content-end align-items-center">

                                        </div>
                                    </div>
                                    <button class="btn btn-primary mt-3 mt-sm-0">ذخیره
                                        تغییرات</button>
                                </div>
                            </form>
                        </div>



                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
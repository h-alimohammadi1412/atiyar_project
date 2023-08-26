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
                            <div class="bg-secondary rounded-3 p-4 mb-4 @error('img') border border-primary @enderror">
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
                            <form wire:submit.prevent='storeInformationForm'>
                                @include('errors.error')
                                <div class="row gx-4 gy-3">
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-fn">نام فروشگاه (این نام معرف کسب و کار
                                            شماست.)</label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            value="{{ $seller->store->name  }}" disabled>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">وضعیت مجوز </label>
                                        <select class="form-control" wire:model.defer="seller.store.license">
                                            <option value="0">انتخاب کنید...</option>
                                            <option value="1">دارای مجوز یا پروانه کسب هستم</option>
                                            <option value="2">در حال حاضر دارای مجوز یا پروانه کسب نیستم</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">شماره صنفی یا شماره ثبت شرکت
                                        </label>
                                        <input class="form-control inp-guild_number dir-ltr" type="text"
                                            id="dashboard-fn" wire:model.defer="guild_number">
                                    </div>
                                    <h3>موقعیت مکانی</h3>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">استان <span
                                                class="text-primary">*</span></label>
                                        <select class="form-control  @error('state') border-primary @enderror"
                                            wire:model.lazy='state' wire:change='selectCity'>
                                            <option value="0">--انتخاب کنید--</option>
                                            @foreach (getState() as $value)
                                            <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">شهر <span
                                                class="text-primary">*</span></label>

                                        <select class="form-control  @error('city') border-primary @enderror"
                                            wire:model.lazy='city'>
                                            <option value="0">--انتخاب کنید--</option>
                                            @foreach ($select_city as $value)
                                            <option value="{{ $value['id'] }}" @if($city==$value['id']) selected @endif>
                                                {{ $value['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">شهرستان <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control @error('Village') border-primary @enderror"
                                            type="text" id="dashboard-fn" wire:model.defer='Village'>
                                    </div> --}}
                                    {{-- <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">روستا <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control" type="text" id="dashboard-fn"
                                            wire:model.defer='seller.store.Village'>
                                    </div> --}}
                                    {{-- <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">محله <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control @error('neighborhood') border-primary @enderror"
                                            type="text" id="dashboard-fn" wire:model.defer='neighborhood'>
                                    </div> --}}
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">پلاک <span
                                                class="text-primary">*</span></label>
                                        <input
                                            class="form-control dir-ltr inp-plaque @error('Plaque') border-primary @enderror"
                                            type="text" id="dashboard-fn" wire:model.defer='Plaque'>
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="form-label" for="dashboard-email">آدرس فروشگاه <span
                                                class="text-primary">*</span></label>
                                        <textarea class="form-control @error('address') border-primary @enderror"
                                            wire:model.defer='address' cols="10" rows="5">

                                                </textarea>
                                        {{-- <input class="form-control @error('address') border-primary @enderror"
                                            type="text" id="dashboard-fn" wire:model.defer='address'> --}}
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">کد پستی <span
                                                class="text-primary">*</span></label>
                                        <input
                                            class="form-control dir-ltr inp-postal_code @error('postal_code') border-primary @enderror"
                                            type="text" id="dashboard-fn" wire:model.defer='postal_code'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">تلفن فروشگاه <span
                                                class="text-primary">*</span></label>
                                        <div class="align-items-center d-flex justify-content-around">
                                            <input
                                                class="form-control dir-ltr @error('telephone') border-primary @enderror inp-telephone"
                                                type="text" id="dashboard-fn" wire:model.defer='telephone'>
                                            <span class="bg-faded-accent border ms-2 p-2 rounded">{{
                                                getState($state)['code_tel'] }}</span>

                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">ساعات تماس </label>
                                        <input class="form-control @error('call_hours') border-primary @enderror"
                                            type="text" id="dashboard-fn" wire:model.defer='call_hours'>
                                    </div>
                                    <div class="col-12"></div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">لینک آپارات </label>
                                        <input class="form-control @error('aparat') border-primary @enderror"
                                            type="text" id="dashboard-fn" wire:model.defer='aparat'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">لینک اینستاگرام </label>
                                        <input class="form-control @error('instagram') border-primary @enderror"
                                            type="text" id="dashboard-fn" wire:model.defer='instagram'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">لینک تلگرام </label>
                                        <input class="form-control @error('telegram') border-primary @enderror"
                                            type="text" id="dashboard-fn" wire:model.defer='telegram'>
                                    </div>
                                    <h3>تنظیمات فروشگاه</h3>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">نام کاربری فروشگاه <span
                                                class="text-primary">*</span></label>
                                        <input class="form-control @error('user_name') border-primary @enderror"
                                            type="text" id="dashboard-fn" wire:model.defer='user_name'>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="dashboard-email">شناسه کاربری زرین پال
                                            (merchant_id)
                                            <span class="text-primary">*</span></label>
                                        <input class="form-control inp-merchant_id dir-ltr @error('merchant_id') border-primary @enderror"
                                            type="text" id="dashboard-fn" wire:model.defer='merchant_id'>
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
    @section('script')
    <script src="{{ asset('js/cleave.min.js') }}"></script>
    <script>
        var cleave = new Cleave('.inp-telephone', {
            blocks: [3, 2, 3,],
            numericOnly:true
        });
        var cleave1 = new Cleave('.inp-guild_number', {
            blocks: [10],
            numericOnly:true

        });
        var cleave2 = new Cleave('.inp-plaque', {
            blocks: [10],
            numericOnly:true
        });
        var cleave3 = new Cleave('.inp-postal_code', {
            delimiter: '-',
            blocks: [5,5],
            numericOnly:true
        });
        var cleave4 = new Cleave('.inp-merchant_id', {
            delimiter: '-',
            blocks: [8,4,4,4,12],
        });
    </script>
    @endsection
</div>
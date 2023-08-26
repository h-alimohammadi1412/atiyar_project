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
                                {{$name}}
                                <form wire:submit.prevent='personalInformationForm' class="mt-5">
                                    @include('errors.error')
                                    <div class="row gx-4 gy-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-fn">نام <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control  @error('name') border-primary @enderror"
                                                type="text" id="dashboard-fn" @if(is_null($user->name)) value=""
                                            wire:model.defer='name' @else
                                            value="{{ $user->name }}" @endif autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-ln">نام خانوادگی <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control @error('family') border-primary @enderror"
                                                type="text" id="dashboard-ln" @if(is_null($user->family)) value=""
                                            wire:model.defer='family'
                                            @else
                                            value="{{ $user->family }}" @endif autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">تلفن همراه <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control dir-ltr" type="text" id="dashboard-fn"
                                                value="{{ $user->mobile }}" disabled autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-profile-name">پست الکترونیک
                                                *</label>
                                            <input class="form-control dir-ltr @error('email') border-primary @enderror"
                                                type="text" id="dashboard-profile-name" @if(is_null($user->email))
                                            value="" wire:model.defer='email'
                                            @else
                                            value="{{ $user->email }}" disabled @endif autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label " for="dashboard-email">کد ملی/کد اتباع خارجی<span
                                                    class="text-primary">*</span></label>
                                            <input
                                                class="form-control dir-ltr inp-national_code @error('national_code') border-primary @enderror"
                                                type="text" id="dashboard-fn" @if(is_null($seller->national_code))
                                            value=""
                                            wire:model.defer='national_code'
                                            @else
                                            value="{{ $seller->national_code }}" @endif autocomplete="off">
                                            <div class="d-sm-flex justify-content-between align-items-center mt-2">
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="checkbox" id="freelancer"
                                                        wire:model.defer='foreigners'>
                                                    <label class="form-check-label" for="freelancer">اتباع خارجی
                                                        هستم</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">شماره شناسنامه <span
                                                    class="text-primary">*</span></label>
                                            <input
                                                class="form-control dir-ltr inp-shenasname_code @error('shenasname_code') border-primary @enderror"
                                                type="text" id="dashboard-fn" @if(is_null($seller->shenasname_code))
                                            value=""
                                            wire:model.defer='shenasname_code'
                                            @else
                                            value="{{ $seller->shenasname_code }}" @endif autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">تاریخ تولد <span
                                                    class="text-primary">*</span></label>

                                            {{-- <input class="form-control @error('birthday') border-primary @enderror"
                                                type="text" id="dashboard-fn" @if(is_null($user->birthday)) value=""
                                            wire:model.defer='birthday'
                                            @else
                                            value="{{ $user->birthday }}" @endif autocomplete="off"> --}}
                                            <div class="align-items-center d-flex justify-content-center">
                                                <select class="form-control me-1" wire:model.lazy='day'>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                                <select class="form-control me-1" wire:model.lazy='month'>
                                                    <option value="1">فروردین</option>
                                                    <option value="2">اردیبهشت</option>
                                                    <option value="3">خرداد</option>
                                                    <option value="4">تیر</option>
                                                    <option value="5">مرداد</option>
                                                    <option value="6">شهریور</option>
                                                    <option value="7">مهر</option>
                                                    <option value="8">آبان</option>
                                                    <option value="9">آذر</option>
                                                    <option value="10">دی</option>
                                                    <option value="11">بهمن</option>
                                                    <option value="12">اسفند</option>
                                                </select>
                                                <select class="form-control" wire:model.lazy='year'>
                                                    <option value="1402">1402</option>
                                                    <option value="1401">1401</option>
                                                    <option value="1400">1400</option>
                                                    <option value="1399">1399</option>
                                                    <option value="1398">1398</option>
                                                    <option value="1397">1397</option>
                                                    <option value="1396">1396</option>
                                                    <option value="1395">1395</option>
                                                    <option value="1394">1394</option>
                                                    <option value="1393">1393</option>
                                                    <option value="1392">1392</option>
                                                    <option value="1391">1391</option>
                                                    <option value="1390">1390</option>
                                                    <option value="1389">1389</option>
                                                    <option value="1388">1388</option>
                                                    <option value="1387">1387</option>
                                                    <option value="1386">1386</option>
                                                    <option value="1385">1385</option>
                                                    <option value="1384">1384</option>
                                                    <option value="1383">1383</option>
                                                    <option value="1382">1382</option>
                                                    <option value="1381">1381</option>
                                                    <option value="1380">1380</option>
                                                    <option value="1379">1379</option>
                                                    <option value="1378">1378</option>
                                                    <option value="1377">1377</option>
                                                    <option value="1376">1376</option>
                                                    <option value="1375">1375</option>
                                                    <option value="1374">1374</option>
                                                    <option value="1373">1373</option>
                                                    <option value="1372">1372</option>
                                                    <option value="1371">1371</option>
                                                    <option value="1370">1370</option>
                                                    <option value="1369">1369</option>
                                                    <option value="1368">1368</option>
                                                    <option value="1367">1367</option>
                                                    <option value="1366">1366</option>
                                                    <option value="1365">1365</option>
                                                    <option value="1364">1364</option>
                                                    <option value="1363">1363</option>
                                                    <option value="1362">1362</option>
                                                    <option value="1361">1361</option>
                                                    <option value="1360">1360</option>
                                                    <option value="1359">1359</option>
                                                    <option value="1358">1358</option>
                                                    <option value="1357">1357</option>
                                                    <option value="1356">1356</option>
                                                    <option value="1355">1355</option>
                                                    <option value="1354">1354</option>
                                                    <option value="1353">1353</option>
                                                    <option value="1352">1352</option>
                                                    <option value="1351">1351</option>
                                                    <option value="1350">1350</option>

                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">نام پدر <span
                                                    class="text-primary">*</span></label>
                                            <input class="form-control @error('father_name') border-primary @enderror"
                                                type="text" id="dashboard-fn" @if(is_null($seller->father_name))
                                            value="" wire:model.defer='father_name'
                                            @else
                                            value="{{ $seller->father_name }}" @endif autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">جنسیت <span
                                                    class="text-primary">*</span></label>
                                            <select class="form-control @error('gender') border-primary @enderror"
                                                wire:model.lazy='gender'>
                                                <option value="">--انتخاب کنید--</option>
                                                <option value="1">مرد</option>
                                                <option value="2">زن</option>
                                            </select>
                                            {{-- <input class="form-control" type="text" id="dashboard-fn"
                                                autocomplete="off"> --}}
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">شماره کارت <span
                                                    class="text-primary ">*</span></label>
                                            <input
                                                class="form-control dir-ltr inp-number_cart @error('number_cart') border-primary @enderror"
                                                type="text" id="dashboard-fn" @if(is_null($seller->number_cart))
                                            value="" wire:model.defer='number_cart'
                                            @else
                                            value="{{ $seller->number_cart }}" @endif autocomplete="off">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="dashboard-email">شماره شبا <span
                                                    class="text-primary">*</span></label>
                                            <div class="align-items-center d-flex justify-content-around">
                                                <input
                                                    class="form-control dir-ltr inp-bank_shaba @error('bank_shaba') border-primary @enderror"
                                                    type="text" id="dashboard-fn" @if(is_null($seller->bank_shaba))
                                                value="" wire:model.defer='bank_shaba'
                                                @else
                                                value="{{ $seller->bank_shaba }}" @endif autocomplete="off">
                                                <span class="bg-faded-accent border ms-2 p-2 rounded">IR</span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <hr class="mt-2 mb-4">
                                        <div class="d-sm-flex justify-content-end align-items-center">
                                            <button class="btn btn-primary mt-3 mt-sm-0 w-100">ذخیره
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
                                        <button class="btn btn-primary mt-3 mt-sm-0 w-100" type="button">تغییر رمز
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
@section('script')
<script src="{{ asset('js/cleave.min.js') }}"></script>
<script>
    var cleave = new Cleave('.inp-national_code', {
            blocks: [10],
            numericOnly:true
        });
        var cleave1 = new Cleave('.inp-shenasname_code', {
            blocks: [10],
            numericOnly:true

        });
        var cleave2 = new Cleave('.inp-number_cart', {
            delimiter: '-',
            blocks: [4,4,4,4],
            numericOnly:true
        });
        var cleave3 = new Cleave('.inp-bank_shaba', {
            blocks: [24],
            numericOnly:true
        });
</script>
@endsection
</div>
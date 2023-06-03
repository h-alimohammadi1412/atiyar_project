{{-- <div>
    @section('title')پروفایل-{{auth()->user()->name}}@endsection
    <main id="main">
        <div id="HomePageTopBanner"></div>
        <div id="content">
            <div class="container c-profile-page">
                <section class="o-page"><div class="o-page__row">
                        @include('livewire.home.profile.index.aside')
                        @include('livewire.home.profile.index.content')
                    </div>
                    @include('livewire.home.profile.index.reply-buy')
                    @include('livewire.home.profile.index.ads-box')
                </section>
            </div>
        </div>
    </main>
</div> --}}

@extends('livewire.home.profile.profile_layout')
@section('title')
    پروفایل-{{ auth()->user()->name }}
@endsection
@section('url_profile')
    پروفایل
@endsection
@section('profile_content')
<section class="col-lg-8">
    <!-- Toolbar-->
    <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
        <h6 class="fs-base text-light mb-0">جزئیات نمایه خود را در زیر به روز کنید:</h6><a
            class="btn btn-primary btn-sm" href="{{ url('logout') }}"><i
                class="ci-sign-out me-2"></i>خروج</a>
    </div>
    <!-- Profile form-->
   
    <form wire:submit.prevent="profileData" enctype="multipart/form-data" role="form">
        <div class="bg-secondary rounded-3 p-4 mb-4">
            <div class="d-flex align-items-center">
                @if ($img)
                    <img class="form-control mt-3 mb-3" style="    width: 100px;" src="{{ $img->temporaryUrl() }}"
                        alt="">
                @else
                    <img class="rounded" src="img/shop/account/avatar.jpg" width="90" alt="سوزان گاردنر">
                @endif
                <div class="ps-3">
                    <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">

                        <input type="file" id="resume" wire:model.lazy="img" aria-label="Resume"
                            class="form-control" />

                        <div wire:ignore class="progress mt-2" id="progressbar" style="display: none">
                            <div class="progress-bar" role="progressbar" style="width: 0%;">0%</div>
                        </div>
                    </div>
                    <div class="p mb-0 fs-ms text-muted">تصویر JPG ، GIF یا PNG را بارگذاری کنید. 300 *300
                        مورد نیاز است.</div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gy-3">
            <div class="col-sm-6">
                <label class="form-label" for="account-fn">نام و نام خانوادگی</label>
                <input class="form-control" wire:model.lazy="user.name" type="text" id="account-fn">
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="account-ln">ایمیل</label>
                <input class="form-control" wire:model.lazy="user.email" type="text" >
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="testtt">تاریخ تولد</label>
                <div class="d-flex justify-center align-items-center"> 
                    {{--<select class="form-control" wire:model.lazy="day" name="" id="">
                        @for ($i=1;$i<32;$i++)
                            <option>{{ $i }}</option>
                        @endfor
                    </select>
                    <select class="form-control" wire:model.lazy="mount" name="" id="">
                        @for ($i=1;$i<13;$i++)
                            <option>{{ $i }}</option>
                        @endfor
                    </select>
                    <select class="form-control" wire:model.lazy="year" name="" id="">
                        @for ($i=1300;$i<1402;$i++)
                            <option>{{ $i }}</option>
                        @endfor
                    </select>
                     <input class="form-control pcal1 order-1" wire:model.lazy="user.birthday" type="text" id="testtt">
                    <input class="form-control pcal1 order-1" wire:model.lazy="user.birthday" type="text" id="testtt">--}}
                    <input class="form-control" wire:model.lazy="user.birthday" type="date" id="testtt"> 
                </div>
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="account-ln">شغل</label>
                <input class="form-control" wire:model.lazy="user.job" type="text" >
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="account-ln">روش بازگرداندن وجه</label>
                <input class="form-control" wire:model.lazy="user.money_back" type="text" >
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="account-email">موبایل</label>
                <input class="form-control" wire:model.lazy="user.mobile" type="text" id="account-email" disabled>
            </div>
            {{-- <div class="col-sm-6">
                <label class="form-label" for="account-pass">پسورد جدید</label>
                <div class="password-toggle">
                    <input class="form-control" type="password" id="account-pass">
                    <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-6">
                <label class="form-label" for="account-confirm-pass">تکرار پسورد</label>
                <div class="password-toggle">
                    <input class="form-control" type="password" id="account-confirm-pass">
                    <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                    </label>
                </div>
            </div> --}}
            <div class="col-12">
                <hr class="mt-2 mb-3">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="form-check">
                        {{-- <input class="form-check-input" checked="off" type="checkbox" id="subscribe_me"
                            checked wire:model.lazy="user.newsletter">
                       --}}
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                            wire:model.lazy="user.newsletter">
                        <label class="form-check-label" for="subscribe_me">من را در خبرنامه مشترک
                            کنید</label>
                    </div>
                    <button class="btn btn-primary mt-3 mt-sm-0">بروزرسانی پروفایل</button>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('css/js-persian-cal.css') }}">
@endsection
@section('script')
    <script src="{{ asset('js/js-persian-cal.min.js') }}"></script>
    <script>
        let objCal1 = new AMIB.persianCalendar('testtt');
    </script>
@endsection

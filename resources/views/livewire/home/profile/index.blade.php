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

<div>
    @section('title')
        پروفایل-{{ auth()->user()->name }}
    @endsection
    <!-- Page Title-->
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i
                                    class="ci-home"></i>خانه</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="#">حساب کاربری</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">پروفایل</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">پروفایل</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5">
                <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
                    <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
                        <div class="d-md-flex align-items-center">
                            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0"
                                style="width: 6.375rem;">
                                @if ($user->img)
                                    <img class="rounded-circle" width="90" src="/storage/{{ $user->img }}"
                                        alt="تصویر کاربر">
                                @else
                                    <img class="rounded-circle" src="img/shop/account/avatar.jpg" width="90"
                                        alt="سوزان گاردنر">
                                @endif
                            </div>
                            <div class="ps-md-3">
                                <h3 class="fs-base mb-0">{{ $user->name }}</h3><span
                                    class="text-accent fs-sm">{{ $user->email }}</span>
                            </div>
                        </div><a class="btn btn-primary d-lg-none mb-2 mt-3 mt-md-0" href="#account-menu"
                            data-bs-toggle="collapse" aria-expanded="false"><i class="ci-menu me-2"></i>منو</a>
                    </div>
                    <div class="d-lg-block collapse" id="account-menu">

                        <ul class="list-unstyled mb-0">
                            <li class="border-bottom mb-0"><a
                                    class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('profile.index') ? 'active' : '' }}"
                                    href="{{ route('profile.index') }}"><i class="ci-bag opacity-60 me-2"></i>اطلاعات
                                    پروفایل</a></li>
                            <li class="border-bottom mb-0"><a
                                    class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('order.profile.index') ? 'active' : '' }}"
                                    href="{{ route('order.profile.index') }}"><i
                                        class="ci-bag opacity-60 me-2"></i>سفارشات<span
                                        class="fs-sm text-muted ms-auto">1</span></a></li>
                            <li class="border-bottom mb-0"><a
                                    class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('profile.favorite') ? 'active' : '' }}"
                                    href="{{ route('profile.favorite') }}"><i class="ci-heart opacity-60 me-2"></i>علاقه
                                    مندی<span class="fs-sm text-muted ms-auto">3</span></a></li>
                            <li class="mb-0 border-bottom"><a
                                    class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('address.index') ? 'active' : '' }}"
                                    href="{{ route('order.profile.index') }}"><i
                                        class="ci-help opacity-60 me-2"></i>پشتیبانی<span
                                        class="fs-sm text-muted ms-auto">1</span></a></li>
                            <li class="border-bottom mb-0"><a
                                    class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('address.index') ? 'active' : '' }}"
                                    href="{{ route('address.index') }}"><i class="ci-sign-out opacity-60 me-2"></i>آدرس
                                    ها</a>
                            </li>
                            <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                                    href="{{ url('logout') }}"><i class="ci-sign-out opacity-60 me-2"></i>خروج</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </aside>
            <!-- Content  -->
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
                                <img class="form-control mt-3 mb-3" style="    width: 100px;"
                                    src="{{ $img->temporaryUrl() }}" alt="">
                            @else
                                <img class="rounded" src="img/shop/account/avatar.jpg" width="90"
                                    alt="سوزان گاردنر">
                            @endif
                            <div class="ps-3">
                                <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
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
                            <input class="form-control" wire:model.lazy="user.email" type="text" id="account-ln">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="account-ln">تاریخ تولد</label>
                            <input class="form-control" wire:model.lazy="user.birthday" type="text"
                                id="account-ln">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="account-ln">شغل</label>
                            <input class="form-control" wire:model.lazy="user.job" type="text" id="account-ln">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="account-ln">روش بازگرداندن وجه</label>
                            <input class="form-control" wire:model.lazy="user.money_back" type="text"
                                id="account-ln">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="account-email">موبایل</label>
                            <input class="form-control" wire:model.lazy="user.mobile" type="text"
                                id="account-email" disabled>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="account-pass">پسورد جدید</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="account-pass">
                                <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="account-confirm-pass">تکرار پسورد</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="account-confirm-pass">
                                <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr class="mt-2 mb-3">
                            <div class="d-flex flex-wrap justify-content-between align-items-center">
                                <div class="form-check">
                                    {{-- <input class="form-check-input" checked="off" type="checkbox" id="subscribe_me"
                                        checked wire:model.lazy="user.newsletter">
                                   --}}
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault" wire:model.lazy="user.newsletter">
                                        <label class="form-check-label" for="subscribe_me">من را در خبرنامه مشترک
                                            کنید</label> 
                                </div>
                                <button class="btn btn-primary mt-3 mt-sm-0">بروزرسانی پروفایل</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>

</div>

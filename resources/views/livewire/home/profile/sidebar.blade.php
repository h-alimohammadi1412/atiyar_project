<aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5">
        <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
                <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
                        <div class="d-md-flex align-items-center">
                                <div class="img-thumbnail rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0"
                                        style="width: 6.375rem;">
                                        @if (auth()->user()->img)
                                        <img class="rounded-circle" width="90" src="/storage/{{ auth()->user()->img }}"
                                                alt="تصویر کاربر">
                                        @else
                                        <img class="rounded-circle" src="img/shop/account/avatar.jpg" width="90"
                                                alt="سوزان گاردنر">
                                        @endif
                                </div>
                                <div class="ps-md-3">
                                        <h3 class="fs-base mb-0">{{ auth()->user()->name }}</h3><span
                                                class="text-accent fs-sm">{{
                                                auth()->user()->email }}</span>
                                </div>
                        </div><a class="btn btn-primary d-lg-none mb-2 mt-3 mt-md-0" href="#account-menu"
                                data-bs-toggle="collapse" aria-expanded="false"><i class="ci-menu me-2"></i>منو</a>
                </div>
                <div class="d-lg-block collapse" id="account-menu">

                        <ul class="list-unstyled mb-0">
                                <li class="border-bottom mb-0"><a
                                                class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('profile.index') ? 'active' : '' }}"
                                                href="{{ route('profile.index') }}"><i
                                                        class="ci-bag opacity-60 me-2"></i>اطلاعات
                                                پروفایل</a></li>
                                <li class="border-bottom mb-0"><a
                                                class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('order.profile.index') ? 'active' : '' }}"
                                                href="{{ route('order.profile.index') }}"><i
                                                        class="ci-bag opacity-60 me-2"></i>سفارشات<span
                                                        class="fs-sm text-muted ms-auto">1</span></a></li>
                                <li class="border-bottom mb-0"><a
                                                class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('profile.favorite') ? 'active' : '' }}"
                                                href="{{ route('profile.favorite') }}"><i
                                                        class="ci-heart opacity-60 me-2"></i>علاقه
                                                مندی<span class="fs-sm text-muted ms-auto">3</span></a></li>
                                <li class="border-bottom mb-0"><a
                                                class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('profile.favorite') ? 'active' : '' }}"
                                                href="{{ route('profile.favorite') }}"><i
                                                        class="ci-heart opacity-60 me-2"></i>نظرات<span
                                                        class="fs-sm text-muted ms-auto">3</span>
                                        </a>
                                </li>
                                <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('profile.observed') ? 'active' : '' }}"
                                                href="{{ route('profile.observed') }}"><i
                                                        class="ci-heart opacity-60 me-2"></i>اطلاع رسانی
                                                ها<span class="fs-sm text-muted ms-auto">3</span></a>
                                </li>
                                <li class="border-bottom mb-0"><a
                                                class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('notification.index') ? 'active' : '' }}"
                                                href="{{ route('notification.index') }}"><i
                                                        class="ci-time opacity-60 me-2"></i>پیغام ها</a>
                                </li>
                                <li class="border-bottom mb-0"><a
                                                class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('gift.index') ? 'active' : '' }}"
                                                href="{{ route('gift.index') }}"><i
                                                        class="ci-time opacity-60 me-2"></i>کارت های هدیه</a>
                                </li>
                                <li class="mb-0 border-bottom"><a
                                                class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('address.index') ? 'active' : '' }}"
                                                href="{{ route('order.profile.index') }}"><i
                                                        class="ci-help opacity-60 me-2"></i>پشتیبانی<span
                                                        class="fs-sm text-muted ms-auto">1</span></a></li>
                                <li class="border-bottom mb-0"><a
                                                class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('address.index') ? 'active' : '' }}"
                                                href="{{ route('address.index') }}"><i
                                                        class="ci-location opacity-60 me-2"></i>آدرس
                                                ها</a>
                                </li>
                                <li class="border-bottom mb-0"><a
                                                class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('user-history.index') ? 'active' : '' }}"
                                                href="{{ route('user-history.index') }}"><i
                                                        class="ci-time opacity-60 me-2"></i>بازدید های
                                                اخیر</a>
                                </li>
                                @if (auth()->check() && auth()->user()->seller == 0)
                                        <li class="border-bottom mb-0"><a
                                                        class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('profile.seller.index') ? 'active' : '' }}"
                                                        href="{{ route('profile.seller.index') }}"><i
                                                                class="ci-time opacity-60 me-2"></i>فروشنده شوید</a>
                                        </li>
                                @endif
                                @if (auth()->check() && auth()->user()->marketer == 0)
                                <li class="border-bottom mb-0"><a
                                                class="nav-link-style d-flex align-items-center px-4 py-3 {{ Request::routeIs('profile.marketer.index') ? 'active' : '' }}"
                                                href="{{ route('profile.marketer.index') }}"><i
                                                        class="ci-time opacity-60 me-2"></i>بازاریاب شوید</a>
                                </li>
                                                                @endif
                                <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3"
                                                href="{{ url('logout') }}"><i
                                                        class="ci-sign-out opacity-60 me-2"></i>خروج</a>
                                </li>

                        </ul>
                </div>
        </div>
</aside>
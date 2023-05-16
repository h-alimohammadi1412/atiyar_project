
<footer class="footer bg-dark pt-5">
    <div class="container">
        <div class="row pb-2">
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">
                        {{ cache('footerLinkTitle')[0]->getPage->title }}</h3>
                    <ul class="widget-list">
                        @foreach (cache('footerLinkTitle') as $footerLinkOne)
                            <li class="widget-list-item">
                                <a class="widget-list-link" href=" {{ $footerLinkOne->getPage->link }}">
                                    {{ $footerLinkOne->getPage->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">
                        {{ cache('footerLinkTitle')[1]->getPage->title }}</h3>
                    <ul class="widget-list">
                        @foreach (\App\Models\FooterLinkTwo::with('getPage')->get() as $footerLinkTwo)
                            <li class="widget-list-item">
                                <a class="widget-list-link"
                                    href="{{ $footerLinkTwo->getPage->link }}">{{ $footerLinkTwo->getPage->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">
                        {{ cache('footerLinkTitle')[2]->getPage->title }}</h3>
                    <ul class="widget-list">
                        @foreach (cache('footerLinkThree') as $footerLinkThree)
                            <li class="widget-list-item">
                                <a class="widget-list-link"
                                    href="{{ $footerLinkThree->getPage->link }}">{{ $footerLinkThree->getPage->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget pb-2 mb-4">
                    <h3 class="widget-title text-light pb-1">در جریان باشید</h3>
                    <form id="SubscribeNewsletter" class="c-form-newsletter" action="{{ route('post.newsletter') }}"
                        method="post">
                        @csrf
                        <div class="input-group flex-nowrap"><i
                                class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                            <input class="form-control rounded-start" type="email" name="email"
                                placeholder="ایمیل شما" required>
                            <button class="btn btn-primary" type="submit" name="subscribe">عضویت</button>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; right: -5000px;" aria-hidden="true">
                            <input class="subscription-form-antispam" type="text"
                                name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                        </div>
                        <div class="form-text text-light opacity-50">* برای دریافت پیشنهادات تخفیف ، به روزرسانی و
                            اطلاعات جدید محصولات ، در خبرنامه ما مشترک شوید.</div>
                        <div class="subscription-status"></div>
                    </form>
                </div>
                <div class="widget pb-2 mb-4">
                    <h3 class="widget-title text-light pb-1">برنامه ما را بارگیری کنید</h3>
                    <div class="d-flex flex-wrap">
                        <div class="me-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span
                                    class="btn-market-subtitle">بارگیری در</span><span class="btn-market-title">App
                                    Store</span></a></div>
                        <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span
                                    class="btn-market-subtitle">بارگیری در</span><span class="btn-market-title">Google
                                    Play</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5 bg-darker">
        <div class="container">
            <div class="row pb-3">
                @foreach (cache('footerInnerBox') as $footerInnerBox)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="d-flex"><i class="{{ $footerInnerBox->getPage->icon }} text-primary"
                                style="font-size: 2.25rem;"></i>
                            <div class="ps-3">
                                <h6 class="fs-base text-light mb-1">{{ $footerInnerBox->getPage->title }}</h6>
                                <p class="mb-0 fs-ms text-light opacity-50">{{ $footerInnerBox->getPage->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr class="hr-light mb-5">
            <div class="row pb-2">
                <div class="col-md-6 text-center text-md-start mb-4">
                    {{-- <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 me-3"
                            href="#"><img class="d-block" src="img/footer-logo-light.png" width="117"
                                alt="کارتزیلا"></a>
                        <div class="btn-group dropdown disable-autohide">
                            <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2"
                                type="button" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png"
                                    width="20" alt="English">انگلیس</button>
                            <ul class="dropdown-menu my-1">
                                <li class="dropdown-item">
                                    <select class="form-select form-select-sm">
                                        <option value="usd">دلار</option>
                                        <option value="eur">تومان</option>
                                        <option value="ukp">یورو</option>
                                        <option value="jpy">پوند</option>
                                    </select>
                                </li>
                                <li><a class="dropdown-item pb-1" href="#"><img class="me-2"
                                            src="img/flags/fr.png" width="20" alt="فرانسه">فرانسه</a>
                                </li>
                                <li><a class="dropdown-item pb-1" href="#"><img class="me-2"
                                            src="img/flags/de.png" width="20" alt="آلمان">آلمان</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><img class="me-2"
                                            src="img/flags/it.png" width="20" alt="ایتالیا">ایتالیا</a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="widget widget-links widget-light">
                        <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                            <li class="widget-list-item me-4"><a class="widget-list-link" href="#">خروجی
                                    ها</a></li>
                            <li class="widget-list-item me-4"><a class="widget-list-link" href="#">شرکت
                                    های وابسته</a></li>
                            <li class="widget-list-item me-4"><a class="widget-list-link" href="#">پشتیبانی</a>
                            </li>
                            <li class="widget-list-item me-4"><a class="widget-list-link" href="#">شرایط</a>
                            </li>
                            <li class="widget-list-item me-4"><a class="widget-list-link" href="#">شرایط
                                    استفاده</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-end mb-4">
                    <div class="mb-3">
                        @foreach (cache('social') as $social)
                            <a class="btn-social bs-light bs-twitter ms-2 mb-2" href="{{ $social->link }}">
                                <i class="{{ $social->icon }}"></i>
                            </a>
                        @endforeach
                    </div>
                    <img class="d-inline-block" src="img/cards-alt.png" width="187" alt="روش پرداخت">
                </div>
            </div>
            <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">
                {{ cache('footerTitle')[2]->title }}
            </div>
        </div>
    </div>
</footer>

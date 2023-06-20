{{--
<div style="display:contents;">
    <div class="c-header__search">
        <div class="c-search js-search"
             data-event="using_search_box" data-event-category="header_section">
--}}
{{--            @if(count($results) || $search)--}}{{--

                <span wire:click="resetForm"
                      class="c-search__reset u-hidden js-search-reset">
--}}
{{--@endif--}}{{--

                        </span>
                <input type="text" name="q"
                       placeholder="جستجو در آتی یار …"
                       class="js-search-input"
                       autocomplete="off" wire:model.debounce.300ms="search">
                <div class="c-search__results js-search-results">
                    <ul class="js-autosuggest-results-list c-search__results-list
             c-search__results-list--autosuggest">

                    </ul>
                    <ul class="js-results-list c-search__results-list"></ul>
                    <ul class="js-autosuggest-empty-list c-search__results-list">
                        <li><a class="js-search-keyword-link" href="javascript:">
                        <span
                            class="c-search__result-item
                            c-search__result-icon c-search__result-icon--group">
                            نمایش همه نتایج برای </span><span
                                    class="c-search__result-item--category js-search-keyword"></span></a></li>
                    </ul>
                    <ul class="c-search__results-list c-search__results-list--history  "></ul>
                    @if(strlen($search) >= 3 && !count($results))
                        <div class="c-search__results-footer">
                            هیچ نتیجه ای برای جستجوی شما یافت نشد.

                        </div>
                    @else

                        <div class="c-search__results-footer">
                            بیشترین جستجوهای اخیر:
                            <div class="d-flex w-full">
                                <div class="gap-2 w-full">
                                    <div
                                        class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-rtl"
                                        style="margin-bottom: -120px">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide swiper-slide-active"
                                                 style="width: auto; height: auto; margin-left: 8px;"><a
                                                    class="d-inline-block shrink-0 mr-14"
                                                    data-cro-id="searchbox-popular-search" href="/search/?q=pubg">
                                                    <div
                                                        class="d-flex ai-center Chip-module_Chip__HWK4W Chip-module_Chip--radius-medium__RUbhT Chip-module_Chip--medium__jya8B py-2 px-3 text-body-1 pl-1-xs">
                                                        <span>pubg</span>
                                                        <div class="d-flex mr-1">
                                                            <svg
                                                                style="width: 20px; height: 20px; fill: var(--color-icon-high-emphasis);">
                                                                <use xlink:href="#chevronLeft"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </a></div>
                                            <div class="swiper-slide swiper-slide-next"
                                                 style="width: auto; height: auto; margin-left: 8px;"><a
                                                    class="d-inline-block shrink-0"
                                                    data-cro-id="searchbox-popular-search"
                                                    href="/search/?q=%D9%BE%D8%A7%D8%A8%D8%AC%DB%8C">
                                                    <div
                                                        class="d-flex ai-center Chip-module_Chip__HWK4W Chip-module_Chip--radius-medium__RUbhT Chip-module_Chip--medium__jya8B py-2 px-3 text-body-1 pl-1-xs">
                                                        <span>پابجی</span>
                                                        <div class="d-flex mr-1">
                                                            <svg
                                                                style="width: 20px; height: 20px; fill: var(--color-icon-high-emphasis);">
                                                                <use xlink:href="#chevronLeft"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </a></div>
                                            <div class="swiper-slide"
                                                 style="width: auto; height: auto; margin-left: 8px;">
                                                <a class="d-inline-block shrink-0"
                                                   data-cro-id="searchbox-popular-search"
                                                   href="/search/?q=%DA%A9%D8%AA%D8%A7%D8%A8+%D9%85%D9%86+%D8%A7%D8%AD%D9%85%D9%82">
                                                    <div
                                                        class="d-flex ai-center Chip-module_Chip__HWK4W Chip-module_Chip--radius-medium__RUbhT Chip-module_Chip--medium__jya8B py-2 px-3 text-body-1 pl-1-xs">
                                                        <span>کتاب من احمق</span>
                                                        <div class="d-flex mr-1">
                                                            <svg
                                                                style="width: 20px; height: 20px; fill: var(--color-icon-high-emphasis);">
                                                                <use xlink:href="#chevronLeft"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </a></div>
                                            <div class="swiper-slide"
                                                 style="width: auto; height: auto; margin-left: 8px;">
                                                <a class="d-inline-block shrink-0"
                                                   data-cro-id="searchbox-popular-search"
                                                   href="/search/?q=%D9%85%D9%86+%D8%A7%D8%AD%D9%85%D9%82">
                                                    <div
                                                        class="d-flex ai-center Chip-module_Chip__HWK4W Chip-module_Chip--radius-medium__RUbhT Chip-module_Chip--medium__jya8B py-2 px-3 text-body-1 pl-1-xs">
                                                        <span>من احمق</span>
                                                        <div class="d-flex mr-1">
                                                            <svg
                                                                style="width: 20px; height: 20px; fill: var(--color-icon-high-emphasis);">
                                                                <use xlink:href="#chevronLeft"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </a></div>
                                            <div class="swiper-slide"
                                                 style="width: auto; height: auto; margin-left: 8px;">
                                                <a class="d-inline-block shrink-0 ml-2"
                                                   data-cro-id="searchbox-popular-search"
                                                   href="/search/?q=%DA%A9%D8%B1%D9%87+%D9%BE%D8%A7%D8%B3%D8%AA%D9%88%D8%B1%DB%8C%D8%B2%D9%87">
                                                    <div
                                                        class="d-flex ai-center Chip-module_Chip__HWK4W Chip-module_Chip--radius-medium__RUbhT Chip-module_Chip--medium__jya8B py-2 px-3 text-body-1 pl-1-xs">
                                                        <span>کره پاستوریزه</span>
                                                        <div class="d-flex mr-1">
                                                            <svg
                                                                style="width: 20px; height: 20px; fill: var(--color-icon-high-emphasis);">
                                                                <use xlink:href="#chevronLeft"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div
                                            class="Slider-module_Slider__next-button-selector__GtwEi d-none d-flex-lg jc-center ai-center bg-000 pos-absolute pointer z-5 radius-circle ScrollHorizontalWrapper_ScrollHorizontalWrapper__button__ivZXa ScrollHorizontalWrapper_ScrollHorizontalWrapper__button--next__2a79G ScrollHorizontalWrapper_ScrollHorizontalWrapper__button--small__vhwl7 shadow-fab-button">
                                            <div class="d-flex">
                                                <svg
                                                    style="width: 24px; height: 24px; fill: var(--color-icon-high-emphasis);">
                                                    <use xlink:href="#chevronLeft"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div
                                            class="Slider-module_Slider__prev-button-selector__kfnhy d-none d-flex-lg jc-center ai-center bg-000 pos-absolute pointer z-5 radius-circle ScrollHorizontalWrapper_ScrollHorizontalWrapper__button__ivZXa ScrollHorizontalWrapper_ScrollHorizontalWrapper__button--prev__XgdlI ScrollHorizontalWrapper_ScrollHorizontalWrapper__button--small__vhwl7 shadow-fab-button d-none-lg">
                                            <div class="d-flex">
                                                <svg
                                                    style="width: 24px; height: 24px; fill: var(--color-icon-high-emphasis);">
                                                    <use xlink:href="#chevronRight"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="c-search__results-list  ">
                        <style>
                            .c-search__results-list {
                                display: block !important;
                            }

                            .breakpoint .text-body-1 {
                                font-size: 1.4rem;
                                font-weight: 400;
                                line-height: 2.15;
                            }

                            .breakpoint .pl-1-xs {
                                padding-left: calc(1 * var(--spacing-base));
                            }
                        </style>
                        @foreach($results as $group =>$entries)

                            <div class="c-search__banner">
                                @if($group == 'product')
                                    <div style="font-size: 1.1rem;
    font-weight: 700;
    line-height: 2.15; ">محصولات
                                    </div>
                                @endif

                                @foreach($entries as $entry)

                                    <a style="display: flex;"
                                       @php
                                           foreach ($entry['link'] as $link =>$value){
            $link = $value;
        }
                                       @endphp
                                       @foreach($entry['id'] as $id =>$value)
                                       href="/product/dkp-{{$value}}/{{$link}}"
                                       @endforeach
                                       data-id="60064"
                                       target="_blank" class="js-search-banner-ga">

                                        <img class="d-flex"
                                             @foreach($entry['name'] as $name =>$value)

                                             alt="{{$value}}"
                                             @endforeach
                                             @foreach($entry['img'] as $img => $value)
                                             src="/storage/{{$value}}" height="70" width="60"

                                             @endforeach


                                             loading="lazy"/>
                                        @foreach($entry['name'] as $name =>$value)

                                            {{$value}}
                                        @endforeach
                                    </a>
                                @endforeach

                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>

</div>
--}}
<div class="whb-column whb-col-center whb-visible-lg">
    <div
        class="wd-search-form wd-header-search-form wd-display-form whb-bbeutoq0yj2x3hx72wai woodmart-search-form">


        <form role="search" method="get"
              class="searchform  wd-with-cat has-categories-dropdown wd-style-default search-style-default woodmart-ajax-search"
              action="{{ route('home.index') }}" data-thumbnail="1"
              data-price="1" data-post_type="product" data-count="20" data-sku="0"
              data-symbols_count="3">
            <input type="text" class="s" placeholder="جستجوی محصولات" value="" name="s"
                   aria-label="جستجو" title="جستجوی محصولات" required="">
            <input type="hidden" name="post_type" value="product">
            <div class="wd-search-cat wd-scroll search-by-category">
                <input type="hidden" name="product_cat" value="0">
                <a href="#" rel="nofollow" data-val="0">
					<span>
						انتخاب دسته بندی					</span>
                </a>
                <div
                    class="wd-dropdown wd-dropdown-search-cat wd-dropdown-menu wd-scroll-content wd-design-default list-wrapper">
                    <ul class="wd-sub-menu sub-menu">
                        <li style="display:none;"><a href="#" data-val="0">انتخاب دسته بندی</a>
                        </li>
                        <li class="cat-item cat-item-21"><a class="pf-value"
                                                            href="{{ route('home.index') }}/product-category/cosmetics/"
                                                            data-val="cosmetics"
                                                            data-title="آرایشی و بهداشتی">آرایشی
                                و بهداشتی</a>
                            <ul class="children">
                                <li class="cat-item cat-item-181"><a class="pf-value"
                                                                     href="{{ route('home.index') }}/product-category/cosmetics/hygiene-supplies/"
                                                                     data-val="hygiene-supplies"
                                                                     data-title="لوازم بهداشتی">لوازم
                                        بهداشتی</a>
                                    <ul class="children">
                                        <li class="cat-item cat-item-197"><a class="pf-value"
                                                                             href="{{ route('home.index') }}/product-category/cosmetics/hygiene-supplies/hair-strengthening/"
                                                                             data-val="hair-strengthening"
                                                                             data-title="تقویت مو">تقویت
                                                مو</a>
                                        </li>
                                        <li class="cat-item cat-item-193"><a class="pf-value"
                                                                             href="{{ route('home.index') }}/product-category/cosmetics/hygiene-supplies/shampoo-hair-care/"
                                                                             data-val="shampoo-hair-care"
                                                                             data-title="شامپو و مراقبت مو">شامپو
                                                و مراقبت مو</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-22"><a class="pf-value"
                                                            href="{{ route('home.index') }}/product-category/toys/"
                                                            data-val="toys"
                                                            data-title="اسباب بازی، کودک و نوزاد">اسباب
                                بازی، کودک و نوزاد</a>
                        </li>
                        <li class="cat-item cat-item-18"><a class="pf-value"
                                                            href="{{ route('home.index') }}/product-category/home-kitchen/"
                                                            data-val="home-kitchen"
                                                            data-title="خانه و آشپزخانه">خانه و
                                آشپزخانه</a>
                            <ul class="children">
                                <li class="cat-item cat-item-68"><a class="pf-value"
                                                                    href="{{ route('home.index') }}/product-category/home-kitchen/electric-appliances/"
                                                                    data-val="electric-appliances"
                                                                    data-title="لوازم خانگی برقی">لوازم
                                        خانگی برقی</a>
                                    <ul class="children">
                                        <li class="cat-item cat-item-82"><a class="pf-value"
                                                                            href="{{ route('home.index') }}/product-category/home-kitchen/electric-appliances/washing-machine/"
                                                                            data-val="washing-machine"
                                                                            data-title="ماشین لباسشویی">ماشین
                                                لباسشویی</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-19"><a class="pf-value"
                                                            href="{{ route('home.index') }}/product-category/automobiles-tools/"
                                                            data-val="automobiles-tools"
                                                            data-title="خودرو و ابزار صنعتی">خودرو
                                و ابزار صنعتی</a>
                        </li>
                        <li class="cat-item cat-item-25"><a class="pf-value"
                                                            href="{{ route('home.index') }}/product-category/handmade-traditional/"
                                                            data-val="handmade-traditional"
                                                            data-title="دست ساز و سنتی">دست ساز
                                و سنتی</a>
                            <ul class="children">
                                <li class="cat-item cat-item-325"><a class="pf-value"
                                                                     href="{{ route('home.index') }}/product-category/handmade-traditional/native-house/"
                                                                     data-val="native-house"
                                                                     data-title="خانه و کاشانه بومی">خانه
                                        و کاشانه بومی</a>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-17"><a class="pf-value"
                                                            href="{{ route('home.index') }}/product-category/gadget/"
                                                            data-val="gadget"
                                                            data-title="کالای دیجیتال">کالای
                                دیجیتال</a>
                            <ul class="children">
                                <li class="cat-item cat-item-37"><a class="pf-value"
                                                                    href="{{ route('home.index') }}/product-category/gadget/mobile-power-bank/"
                                                                    data-val="mobile-power-bank"
                                                                    data-title="پاوربانک موبایل">پاوربانک
                                        موبایل</a>
                                </li>
                                <li class="cat-item cat-item-58"><a class="pf-value"
                                                                    href="{{ route('home.index') }}/product-category/gadget/computers/"
                                                                    data-val="computers"
                                                                    data-title="کامپیوتر و تجهیزات جانبی">کامپیوتر
                                        و تجهیزات جانبی</a>
                                </li>
                                <li class="cat-item cat-item-39"><a class="pf-value"
                                                                    href="{{ route('home.index') }}/product-category/gadget/laptop/"
                                                                    data-val="laptop"
                                                                    data-title="لپ تاپ">لپ
                                        تاپ</a>
                                    <ul class="children">
                                        <li class="cat-item cat-item-40"><a class="pf-value"
                                                                            href="{{ route('home.index') }}/product-category/gadget/laptop/asus/"
                                                                            data-val="asus"
                                                                            data-title="ایسوس">ایسوس</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-31"><a class="pf-value"
                                                                    href="{{ route('home.index') }}/product-category/gadget/mobile-accessory/"
                                                                    data-val="mobile-accessory"
                                                                    data-title="لوازم جانبی موبایل">لوازم
                                        جانبی موبایل</a>
                                    <ul class="children">
                                        <li class="cat-item cat-item-33"><a class="pf-value"
                                                                            href="{{ route('home.index') }}/product-category/gadget/mobile-accessory/phone-holder/"
                                                                            data-val="phone-holder"
                                                                            data-title="پایه نگهدارنده گوشی">پایه
                                                نگهدارنده گوشی</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-26"><a class="pf-value"
                                                                    href="{{ route('home.index') }}/product-category/gadget/mobile/"
                                                                    data-val="mobile"
                                                                    data-title="موبایل">موبایل</a>
                                    <ul class="children">
                                        <li class="cat-item cat-item-28"><a class="pf-value"
                                                                            href="{{ route('home.index') }}/product-category/gadget/mobile/samsung/"
                                                                            data-val="samsung"
                                                                            data-title="سامسونگ">سامسونگ</a>
                                        </li>
                                        <li class="cat-item cat-item-30"><a class="pf-value"
                                                                            href="{{ route('home.index') }}/product-category/gadget/mobile/huawei/"
                                                                            data-val="huawei"
                                                                            data-title="هوآوی">هوآوی</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="cat-item cat-item-52"><a class="pf-value"
                                                                    href="{{ route('home.index') }}/product-category/gadget/headphone-speaker/"
                                                                    data-val="headphone-speaker"
                                                                    data-title="هدفون و اسپیکر">هدفون
                                        و اسپیکر</a>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-20"><a class="pf-value"
                                                            href="{{ route('home.index') }}/product-category/stationery/"
                                                            data-val="stationery"
                                                            data-title="لوازم تحریر، کتاب و هنر">لوازم
                                تحریر، کتاب و هنر</a>
                            <ul class="children">
                                <li class="cat-item cat-item-145"><a class="pf-value"
                                                                     href="{{ route('home.index') }}/product-category/stationery/stationery-stationery/"
                                                                     data-val="stationery-stationery"
                                                                     data-title="لوازم تحریر">لوازم
                                        تحریر</a>
                                    <ul class="children">
                                        <li class="cat-item cat-item-158"><a class="pf-value"
                                                                             href="{{ route('home.index') }}/product-category/stationery/stationery-stationery/office-paper/"
                                                                             data-val="office-paper"
                                                                             data-title="دفتر و کاغذ">دفتر
                                                و کاغذ</a>
                                        </li>
                                        <li class="cat-item cat-item-153"><a class="pf-value"
                                                                             href="{{ route('home.index') }}/product-category/stationery/stationery-stationery/bag/"
                                                                             data-val="bag"
                                                                             data-title="کیف و کوله">کیف
                                                و کوله</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-24"><a class="pf-value"
                                                            href="{{ route('home.index') }}/product-category/fashion-clothing/"
                                                            data-val="fashion-clothing"
                                                            data-title="مد و پوشاک">مد و
                                پوشاک</a>
                            <ul class="children">
                                <li class="cat-item cat-item-288"><a class="pf-value"
                                                                     href="{{ route('home.index') }}/product-category/fashion-clothing/male/"
                                                                     data-val="male"
                                                                     data-title="مردانه">مردانه</a>
                                    <ul class="children">
                                        <li class="cat-item cat-item-299"><a class="pf-value"
                                                                             href="{{ route('home.index') }}/product-category/fashion-clothing/male/everyday-shoes/"
                                                                             data-val="everyday-shoes"
                                                                             data-title="کفش روزمره">کفش
                                                روزمره</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-item-23"><a class="pf-value"
                                                            href="{{ route('home.index') }}/product-category/sports-travel/"
                                                            data-val="sports-travel"
                                                            data-title="ورزش و سفر">ورزش و
                                سفر</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button type="submit"
                    class="searchsubmit wd-with-img woodmart-searchform-custom-icon">
						<span>
							جستجو						</span>
                <img
                    src="https://pre-websites.ir/elementor/multivendor/wp-content/uploads/2022/09/Group-37119.svg"
                    class="wd-custom-icon" alt="" decoding="async" loading="lazy" width="16"
                    height="16"></button>
        </form>


        <div class="search-results-wrapper">
            <div class="wd-dropdown-results wd-scroll wd-dropdown woodmart-search-results">
                <div class="wd-scroll-content"></div>
            </div>
        </div>


    </div>
    <div class="whb-space-element " style="width:180px;"></div>
</div>

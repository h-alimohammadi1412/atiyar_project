@section('title','سبد خرید')
<div>
    <div class="page-title-overlap bg-dark pt-4" wire:init='loadingPage'>
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="index-2.html"><i
                                    class="ci-home"></i>خانه</a></li>
                        <li class="breadcrumb-item text-nowrap"><a href="shop-grid-ls.html">فروشگاه</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">بررسی</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">زمان و نحوه ارسال</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <section class="col-lg-8 position-relative" style="min-height: 500px;">
                <!-- Steps-->
                <div class="steps steps-light pt-2 pb-3 mb-5">
                    <a class="step-item active" href="{{ route('cart.index') }}">
                        <div class="step-progress"><span class="step-count">1</span></div>
                        <div class="step-label"><i class="ci-cart"></i>سبد خرید</div>
                    </a>
                    <a class="step-item active current" href="{{ route('order.shipping') }}">
                        <div class="step-progress"><span class="step-count">2</span></div>
                        <div class="step-label"><i class="ci-package"></i>زمان و نحوه ارسال</div>
                    </a>
                    <a class="step-item">
                        <div class="step-progress"><span class="step-count">3</span></div>
                        <div class="step-label"><i class="ci-card"></i>پرداخت</div>
                    </a>
                </div>
                @if (!$readyToLoad)

                <div class="align-items-center container-loader-atiyar d-flex justify-content-center position-absolute">
                    <div class="position-absolute" style="opacity: .09;"><img src="{{ asset('img/weblogo.png') }}"
                            alt=""></div>
                    <div class="custom-loader-atiyar"></div>
                </div>
                @else
                <!-- Autor info-->
                <div class=" bg-secondary p-4 rounded-3 mb-grid-gutter border">
                    <h6 class="mb-3 py-3 border-bottom">آدرس تحویل سفارش</h6>
                    @if (sizeof($addresses) > 0)
                    <div class="d-flex align-items-center">
                        <i class="ci-location"></i>
                        <p class="p-0 m-0 ms-2"> {{ $address_use->state }} - {{ $address_use->city }} - {{
                            $address_use->address }}
                        </p>
                    </div>
                    <span class="d-block ms-4 mt-3">{{ $address_use->name }} {{ $address_use->lname }}</span>
                    @else
                    <div class="alert alert-warning">هیچ آدرسی انتخاب نشده است.</div>
                    @endif

                    <div class="d-flex justify-content-end">
                        <a class="btn btn-outline-primary btn-sm ps-2" wire:click="$set('show',true)">تغییر یا افزودن
                            آدرس</a>
                    </div>
                </div>
                <div class=" p-4 rounded-3 mb-grid-gutter border">
                    <div class="d-flex border-bottom align-items-center py-3">
                        <span>
                            <i class="ci-truck fs-2 text-primary"></i>
                        </span>
                        <div class="ms-3">
                            <div>
                                <span>ارسال عادی</span><span class="ms-2 p-1"
                                    style="background: #ccc;border-radius: 7px;font-size: 13px;">{{
                                    $order->orderProducts->count() }}
                                    کالا</span>
                            </div>
                            <span>1 روز</span>
                        </div>
                    </div>
                    <div class="swiper swiper_slider mt-5">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach ($order->orderProducts as $order_item)
                            <div class="swiper-slide">
                                <a target="_blank"
                                    href="{{ url('/product/at-' . $order_item->product->id . '/' . $order_item->product->link) }}">
                                    <img src="/storage/{{ $order_item->product->img }}">
                                </a>
                                <div class="d-flex justify-content-between">
                                    @if ($order_item->color)
                                    <div class="d-flex align-items-center mt-3">
                                        <div class="border rounded-circle" style="padding: 2px">
                                            <span class="d-block rounded-circle"
                                                style="background-color: {{ $order_item->color->value }};width:15px;height:15px"></span>
                                        </div>
                                        <span class="ms-1" style="font-size: 12px;">{{ $order_item->color->name
                                            }}</span>
                                    </div>
                                    @endif
                                    <div class="d-flex align-items-center mt-3">
                                        <span class="ms-1" style="font-size: 12px;">تعداد : </span>
                                        <span class="ms-1" style="font-size: 12px;">{{ $order_item->count_cart}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>


                    <div class="d-flex align-items-center mt-4 mb-2 fw-bold">
                        <i class="ci-time"></i>
                        <span class="ms-2 ">انتخاب زمان ارسال</span>
                    </div>
                    <div class=" p-4 rounded-3 mb-grid-gutter border">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach (\App\Models\AddressTime::all() as $key=>$adressTime)
                            <li class="nav-item" role="presentation">
                                <button wire:ignore class="nav-link @if($key == $show_id) active @endif" id="home-tab"
                                    data-bs-toggle="tab" data-bs-target="#tab-pane-{{ $key }}" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">
                                    <div class="d-flex flex-column justify-content-center">
                                        <span class="fs-6">{{ $adressTime->day }}</span>
                                        <span class="text-muted " style="font-size: 14px;">{{ $adressTime->date
                                            }}</span>
                                    </div>
                                </button>
                            </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @foreach (\App\Models\AddressTime::all() as $key=>$adressTime)
                            <div class="tab-pane fade show @if($key == $show_id) active @endif" id="tab-pane-{{ $key }}"
                                role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <div class="address_time_item border p-2 rounded @if($address_time && $address_time->id == $adressTime->id) active @endif"
                                    style="width: 100px;cursor: pointer;"
                                    wire:click="selectAddressTime({{ $adressTime->id }},{{ $key }})">
                                    <div class="d-flex justify-content-around">
                                        <span>بازه</span>
                                        <span>{{ $adressTime->time }}</span>
                                    </div>
                                    <span class="d-block mt-2 text-center text-primary">{{
                                        number_format($adressTime->price) }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </section>
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                <div class="bg-white rounded-3 shadow-lg p-4  position-relative">
                    <div class="py-2 px-xl-2" style="min-height: 300px;">
                        @if (!$readyToLoad)
                        <div
                            class="align-items-center container-loader-atiyar d-flex justify-content-center position-absolute">
                            <div class="position-absolute" style="opacity: .09;"><img
                                    src="{{ asset('img/weblogo.png') }}" alt=""></div>
                            <div class="custom-loader-atiyar"></div>
                        </div>

                        @else
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md ">قیمت کالاها ({{ $order->orderProducts->count() }})</h2>
                            <h3 class="fw-normal fs-md fw-bold">{{ number_format($order->total_price) }} <span
                                    style="font-size: 13px">تومان</span></h3>
                        </div>
                        @php
                        $total_price_discount_orders = ABS($order->total_discount_price - $order->total_price);
                        $darsad = ABS(($total_price_discount_orders / $order->total_price)*100) ;
                        @endphp
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md text-primary">تخفیف کالا ها</h2>
                            <h3 class="fw-normal fs-md fw-bold text-primary"><span class="">({{ ceil($darsad)
                                    }}%)</span> {{
                                number_format(ABS($order->total_discount_price - $order->total_price)) }} <span
                                    style="font-size: 13px">تومان</span></h3>
                        </div>
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md ">جمع </h2>
                            <h3 class="fw-normal fs-md fw-bold">{{ number_format($order->total_discount_price) }}
                                <span style="font-size: 13px">تومان</span>
                            </h3>
                        </div>
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md ">هزینه ارسال</h2>
                            <h3 class="fw-normal fs-md fw-bold">@if($address_time) {{
                                number_format($address_time->price) }} <span style="font-size: 13px">تومان</span>@else
                                رایگان @endif </h3>
                        </div>
                        @php
                        $totp = $address_time != null ? ($address_time->price + $order->total_discount_price) :
                        $order->total_discount_price;
                        @endphp
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md text-primary">مبلغ قابل پرداخت </h2>
                            <h3 class="fw-normal fs-md fw-bold text-primary">{{ number_format($totp) }} <span
                                    style="font-size: 13px">تومان</span></h3>
                        </div>
                        <a class="btn btn-primary btn-shadow d-block w-100 mt-4" wire:click="addToPayment({{ $totp }})"></i>ثبت سفارش
                        </a>
                        @endif
                    </div>
                </div>
            </aside>
        </div>
        {{-- <!-- Navigation (mobile)-->
        <div class="row d-lg-none">
            <div class="col-lg-8">
                <div class="d-flex pt-4 mt-3">
                    <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="shop-cart.html"><i
                                class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">برگشت به سبد
                                خرید</span><span class="d-inline d-sm-none">برگشت</span></a></div>
                    <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="checkout-shipping.html"><span
                                class="d-none d-sm-inline">روش ارسال</span><span
                                class="d-inline d-sm-none">بعدی</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <form class="needs-validation modal fade @if ($show) show @endif" @if ($show)
        style="display: block; background: rgba(0,0,0,.5);" @endif id="add-address" tabindex="-1" novalidate>
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">انتخاب آدرس</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="$set('show',false)"></button>
                </div>
                <div class="modal-body">
                    <div class="row gx-4 gy-3">
                        <div class="col-sm-12 border-bottom pb-3">
                            <a class="d-flex align-items-center justify-content-between cursor-pointer"
                                wire:click="showAddAddressForm" style="cursor: pointer;"><span>افزودن
                                    آدرس جدید</span> <i class="ci-arrow-right"></i></a>
                        </div>
                        <div class="col-sm-12">
                            <!-- Radio button addon -->
                            <div class="input-group">
                                <div class="align-items-start border-0 d-flex flex-column input-group-text pe-2  w-100">
                                    @if (sizeof($addresses) > 0)
                                    @foreach ($addresses as $key => $address)
                                    <div class="border form-check mt-4 p-3 w-100">
                                        <input class="form-check-input" type="radio" id="ex-radio-1" name="radio"
                                            @if($address->status == 1) checked="true" @endif
                                        wire:click="selectAddress({{ $key }})">
                                        <div>
                                            <span class="d-block text-start"> {{$address->address }}</span>
                                            <div class="d-flex flex-lg-row mt-3" style="color: #a5a9b1 !important;">
                                                <div class="me-4"><i class="ci-user pe-3"></i>{{$address->city}}</div>
                                                <div class="me-4"><i class="ci-user pe-3"></i>{{$address->name .' '.
                                                    $address->lname }}</div>
                                                <div class="me-4"><i class="ci-mobile pe-3"></i>{{ $address->mobile }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="alert alert-warning text-center  w-100 ">هیچ آدرسی برای انتخاب وجود
                                        ندارد.</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                        wire:click="$set('show',false)">بستن</button>
                </div>
            </div>
        </div>
    </form>

    <form class="needs-validation modal fade @if ($show_add_address_form) show @endif" @if ($show_add_address_form)
        style="display: block; background: rgba(0,0,0,.5);" @endif wire:submit.prevent='addressForm' id="add-address"
        tabindex="-1" novalidate>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">آدرس جدیدی اضافه کنید</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="$set('show',false)"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="row gx-4 gy-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="address-fn">استان *</label>
                            <input class="form-control" type="text" id="address-fn" wire:model.defer="address.state"
                                required>
                            <div class="invalid-feedback">لطفا استان خود را پر کنید</div>

                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="address-ln1">شهر *</label>
                            <input class="form-control" type="text" id="address-ln1" wire:model.defer="address.city"
                                required>
                            <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="address-company">محله *</label>
                            <input class="form-control" type="text" id="address-company"
                                wire:model.defer="address.mahale" required>
                            <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                        </div>
                        <div class="col-sm-12">
                            <label class="form-label" for="address-company1">نشانی پستی *</label>
                            <input class="form-control" type="text" id="address-company1"
                                wire:model.defer="address.address" required>
                            <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="address-company2">پلاک *</label>
                            <input class="form-control" type="text" id="address-company2"
                                wire:model.defer="address.bld_num" required>
                            <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="address-company3">واحد</label>
                            <input class="form-control" type="text" id="address-company3"
                                wire:model.defer="address.vahed">
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="address-company4">کد پستی *</label>
                            <input class="form-control" type="text" id="address-company4"
                                wire:model.defer="address.code_posti" required>
                            <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="address-city">نام گیرنده *</label>
                            <input class="form-control" type="text" id="address-city" wire:model.defer="address.name"
                                required>
                            <div class="invalid-feedback">لطفاً شهر خود را پر کنید!</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="address-line1">نام خانوادگی گیرنده *</label>
                            <input class="form-control" type="text" id="address-line1" wire:model.defer="address.lname"
                                required>
                            <div class="invalid-feedback">لطفا آدرس خود را پر کنید</div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="address-line2">شماره موبایل *</label>
                            <input class="form-control" type="text" id="address-line2" wire:model.defer="address.mobile"
                                required>
                            <div class="invalid-feedback">لطفا شهر خود را پر کنید</div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="address-primary"
                                    wire:model.defer="address.status">
                                <label class="form-check-label" for="address-primary">سفارش به این آدرس ارسال
                                    شود.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@section('script')
<script>
    function setSwiperSlider(){
            const swiper = new Swiper('.swiper_slider', {
                // loop: true,
                slidesPerView: 5,
                spaceBetween: 50,
                touchReleaseOnEdges:true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 5000
                },
            });
        }
        window.addEventListener('onContentChanged', () => {
            setSwiperSlider();
        });
        setSwiperSlider();
        
</script>
@endsection
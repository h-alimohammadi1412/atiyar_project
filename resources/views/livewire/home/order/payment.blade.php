@section('title','سبد خرید')
<div>
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="{{ url('/') }}"><i
                                    class="ci-home"></i>خانه</a></li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">پرداخت</li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">پرداخت</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <section class="col-lg-8">
                <!-- Steps-->
                <div class="steps steps-light pt-2 pb-3 mb-5">
                    <a class="step-item active" href="{{ route('cart.index') }}">
                        <div class="step-progress"><span class="step-count">1</span></div>
                        <div class="step-label"><i class="ci-cart"></i>سبد خرید</div>
                    </a>
                    <a class="step-item active " href="{{ route('order.shipping') }}">
                        <div class="step-progress"><span class="step-count">2</span></div>
                        <div class="step-label"><i class="ci-package"></i>زمان و نحوه ارسال</div>
                    </a>
                    <a class="step-item active current">
                        <div class="step-progress"><span class="step-count">3</span></div>
                        <div class="step-label"><i class="ci-card"></i>پرداخت</div>
                    </a>
                    {{-- <a class="step-item" href="checkout-payment.html">
                        <div class="step-progress"><span class="step-count">4</span></div>
                        <div class="step-label"><i class="ci-card"></i>پرداخت</div>
                    </a>
                    <a class="step-item" href="checkout-review.html">
                        <div class="step-progress"><span class="step-count">5</span></div>
                        <div class="step-label"><i class="ci-check-circle"></i>مرور</div>
                    </a> --}}
                </div>
                <!-- Autor info-->
                <div class=" p-4 rounded-3 mb-grid-gutter border">
                    <h6 class="mb-3 py-3 border-bottom">شیوه پرداخت</h6>
                    <div class="d-flex align-items-center">
                        <input class="form-check-input" type="radio" checked id="select_paymet1" name="radio" wire:click="paymentTypeInternet({{ $order_number }})">
                        <label for="select_paymet1" class="d-flex align-items-center ms-3">
                            <i class="ci-card fs-2"></i>
                            <span class="ms-2"> پرداخت اینترنتی</span>
                        </label>
                    </div>

                </div>
                <div class=" p-4 rounded-3 mb-grid-gutter border">
                    <h6 class="mb-3 py-3 border-bottom">خلاصه سفارش</h6>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item accordion_payments">
                            <h2 class="accordion-header ">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="ci-truck fs-2 me-3 text-primary"></i>
                                    <span class="me-2 ">{{ $payments[0]->times->day }} {{ $payments[0]->times->date }} -
                                        بازه {{ $payments[0]->times->time }}</span>
                                    <span class="fs-ms p-1 rounded" style="background-color: #ccc;">{{ $orders->count()
                                        }} کالا</span>

                                    <span class="fs-ms ms-auto">جزئیات سفارش</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="swiper swiper_slider mt-5">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Slides -->
                                            @foreach ($orders as $order)
                                            <div class="swiper-slide">
                                                <a target="_blank"
                                                    href="{{ url('/product/at-' . $order->product->id . '/' . $order->product->link) }}">
                                                    <img src="/storage/{{ $order->product->img }}">
                                                </a>
                                                <div class="d-flex justify-content-between">
                                                    @if ($order->color != null)
                                                    <div class="d-flex align-items-center mt-3">
                                                        <div class="border rounded-circle" style="padding: 2px">
                                                            <span class="d-block rounded-circle"
                                                                style="background-color: {{ $order->color->value }};width:15px;height:15px"></span>
                                                        </div>
                                                        <span class="ms-1" style="font-size: 12px;">{{
                                                            $order->color->name }}</span>
                                                    </div>
                                                    @endif
                                                    <div class="d-flex align-items-center mt-3">
                                                        <span class="ms-1" style="font-size: 12px;">تعداد : </span>
                                                        <span class="ms-1" style="font-size: 12px;">{{
                                                            $order->count}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <span>مبلغ مرسوله : </span>
                                    <span class="ms-1">{{ number_format($payments[0]->total_price) }}</span>
                                    <span>تومان</span>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

                <!-- Navigation (desktop)-->
                {{-- <div class="d-none d-lg-flex pt-4 mt-3">
                    <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="shop-cart.html"><i
                                class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">برگشت به سبد
                                خرید</span><span class="d-inline d-sm-none">برگشت</span></a></div>
                    <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="checkout-shipping.html"><span
                                class="d-none d-sm-inline">روش ارسال</span><span
                                class="d-inline d-sm-none">بعدی</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a>
                    </div>
                </div> --}}
            </section>
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                <div class="bg-white rounded-3 shadow-lg p-4">
                    <div class="py-2 px-xl-2">
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md">قیمت کالاها ({{ sizeof($orders) }})</h2>
                            <h3 class="fw-normal fs-md fw-bold">{{ number_format($payments[0]->total_price) }} <span
                                    style="font-size: 13px">تومان</span></h3>
                        </div>
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md">هزینه ارسال</h2>
                            <h3 class="fw-normal fs-md fw-bold text-muted">@if(is_null($payments[0]->time_id)) رایگان
                                @else {{ number_format($payments[0]->times->price) }} <span
                                    style="font-size: 13px">تومان</span>@endif </h3>
                        </div>
                        {{-- {{ $total_price_discount_orders }} --}}
                        @php
                        $darsad = ABS(($payments[0]->discount_price/ $payments[0]->total_price)*100);
                        @endphp
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center ">
                            <h2 class="h6 mb-3 pb-1 fs-md text-primary">سود شما از خرید</h2>
                            <h3 class="fw-normal fs-md fw-bold text-primary"><span class="">({{ ceil($darsad)
                                    }}%)</span> {{
                                number_format($payments[0]->discount_price) }} <span
                                    style="font-size: 13px">تومان</span></h3>
                        </div>
                        @if($payments[0]->gift_code)
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md">کارت هدیه</h2>
                            <h3 class="fw-normal fs-md fw-bold ">
                                @if($payments[0]->gift_code)
                                {{ number_format($payments[0]->gift_code_price)}}
                                @else
                                0
                                @endif
                                <span style="font-size: 13px">تومان</span>
                            </h3>
                        </div>
                        @endif
                        @if($payments[0]->discount)
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md">کد تخفیف</h2>
                            <h3 class="fw-normal fs-md fw-bold ">
                                @if($payments[0]->discount)
                                @if ($payments[0]->discount->type == 1)
                                {{ number_format($payments[0]->discount->price) }}
                                @elseif ($payments[0]->discount->type == 0)
                                {{ $payments[0]->discount->percent }}%
                                @endif
                                @else
                                0
                                @endif
                                <span style="font-size: 13px">تومان</span>
                            </h3>
                        </div>
                        @endif
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md text-primary">مبلغ قابل پرداخت</h2>
                            <h3 class="fw-normal fs-md fw-bold text-primary">
                                @php
                                $cal_price_discount = $payments[0]->total_price;
                                @endphp
                                @if($payments[0]->discount)
                                @php

                                if($payments[0]->discount->type == 1){
                                $cal_price_discount = $payments[0]->total_price - $payments[0]->discount->price;
                                }elseif($payments[0]->discount->type == 0){
                                $dPercent = (($payments[0]->total_price * $payments[0]->discount->percent) /
                                100)-$payments[0]->total_price;
                                $cal_price_discount = $dPercent;
                                }
                                @endphp
                                @endif

                                @if($payments[0]->gift_code)
                                @php
                                $cal_price_discount = $cal_price_discount - $payments[0]->gift_code_price;
                                @endphp
                                @endif
                                {{ number_format(ABS($cal_price_discount)) }}
                                <span style="font-size: 13px">تومان</span>
                            </h3>
                        </div>
                        {{-- <div
                            class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-6 ">هزینه ارسال</h2>
                            <h3 class="fw-normal fs-5 text-primary">@if($address_time) {{
                                number_format($address_time->price) }} @else 0 @endif <span
                                    style="font-size: 13px">تومان</span></h3>
                        </div> --}}
                        {{-- @php
                        $totp = $address_time != null ? ($address_time->price - $total_price_orders_discount) :
                        $total_price_orders_discount;
                        @endphp --}}
                        {{-- <div
                            class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-6 text-primary">مبلغ قابل پرداخت </h2>
                            <h3 class="fw-normal fs-5 text-primary">{{ number_format($totp) }} <span
                                    style="font-size: 13px">تومان</span></h3>
                        </div> --}}
                        <div class="accordion" id="order-options">
                            @if(!$payments[0]->discount)

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <a class="accordion-button collapsed" href="#promo-code" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="promo-code">اعمال
                                        کد تخفیف
                                    </a>
                                </h3>
                                <div class="accordion-collapse collapse" id="promo-code" data-bs-parent="#order-options"
                                    style="">
                                    <form class="accordion-body needs-validation" method="post" novalidate=""
                                        wire:submit.prevent>
                                        <div class="mb-3">
                                            <input class="form-control" type="text" placeholder="کد تخفیف" required=""
                                                wire:model.defer="discount.code">
                                            <div class="invalid-feedback">
                                                کد تخفیف را وارد کنید
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-primary d-block w-100" type="submit"
                                            wire:click="checkDiscountCode">
                                            اعمال کد
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endif
                            @if(!$payments[0]->gift_code)
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <a class="accordion-button collapsed" href="#promo-code1" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="promo-code1">اعمال
                                        کارت هدیه
                                    </a>
                                </h3>
                                <div class="accordion-collapse collapse" id="promo-code1"
                                    data-bs-parent="#order-options" style="">
                                    <form class="accordion-body needs-validation" method="post" novalidate=""
                                        wire:submit.prevent>
                                        <div class="mb-3">
                                            <input class="form-control" type="text" placeholder="کد کارت هدیه"
                                                required="" wire:model.defer="gift.code">
                                            <div class="invalid-feedback">
                                                کد کارت هدیه را وارد کنید
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-primary d-block w-100" type="submit"
                                            wire:click="checkGiftCode">
                                            اعمال کد
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endif
                            {{-- <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <a class="accordion-button collapsed" href="#shipping-estimates" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="shipping-estimates">تخمین حمل و نقل</a>
                                </h3>
                                <div class="accordion-collapse collapse" id="shipping-estimates"
                                    data-bs-parent="#order-options">
                                    <div class="accordion-body">
                                        <form class="needs-validation" novalidate="">
                                            <div class="mb-3">
                                                <select class="form-select" required="">
                                                    <option value="">کشور</option>
                                                    <option value="استرالیا">استرالیا</option>
                                                    <option value="Belgium">فرانسه</option>
                                                    <option value="کانادا">کانادا</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    لطفاً کشور خود را انتخاب کنید!
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <select class="form-select" required="">
                                                    <option value="">انتخاب شهر</option>
                                                    <option value="Bern">یزد</option>
                                                    <option value="Brussels">شهرکرد</option>
                                                    <option value="Canberra">تهران</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    لطفاً شهر خود را انتخاب کنید!
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" placeholder="کد پستی"
                                                    required="">
                                                <div class="invalid-feedback">
                                                    کد پستی را وارد کنید
                                                </div>
                                            </div>
                                            <button class="btn btn-outline-primary d-block w-100" type="submit">
                                                حمل و نقل را محاسبه کنید
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <a class="btn btn-primary btn-shadow d-block w-100 mt-4" wire:click="continuePayment({{ $order_number }})"></i>پرداخت
                        </a>


                        {{-- <p class="text-center mt-4">هزینه این سفارش هنوز پرداخت نشده‌ و در صورت اتمام موجودی،
                            کالاها از
                            سبد حذف می‌شوند. </p> --}}
                    </div>
                </div>
            </aside>
        </div>
        <!-- Navigation (mobile)-->
        {{-- <div class="row d-lg-none">
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
    @section('script')
    <script>
        // document.addEventListener('click','.address_time_item',function(){
        //     alert('ssss');
        // });
        document.addEventListener('DOMContentLoaded', () => {
            document.addEventListener('click','.address_time_item',function(){
                alert('ssss');
            });
        });
    //     Livewire.on('click','.address_time_item', postId => {
    //     alert('A post was added with the id of: ' + postId);
    // })
    //     window.addEventListener('click','.address_time_item', event => {
    //     alert('Name updated to: ');
    // })
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
            
    </script>
    @endsection

</div>
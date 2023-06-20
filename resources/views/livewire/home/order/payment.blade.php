@section('title','سبد خرید')
<div>
    <div class="page-title-overlap bg-dark pt-4" wire:init='loadingPage'>
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
            <section class="col-lg-8 position-relative" style="min-height: 500px;">
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
                </div>
                @if (!$readyToLoad)

                <div class="align-items-center container-loader-atiyar d-flex justify-content-center position-absolute">
                    <div class="position-absolute" style="opacity: .09;"><img src="{{ asset('img/weblogo.png') }}"
                            alt=""></div>
                    <div class="custom-loader-atiyar"></div>
                </div>
                @else

                <!-- Autor info-->
                <div class=" p-4 rounded-3 mb-grid-gutter border">
                    <h6 class="mb-3 py-3 border-bottom">شیوه پرداخت</h6>
                    <div class="d-flex align-items-center">
                        <input class="form-check-input" type="radio" checked id="select_paymet1" name="radio"
                            wire:click="paymentTypeInternet({{ $payment->order->order_number }})">
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
                                    <span class="me-2 ">{{ $payment->times->day }} {{ $payment->times->date }} -
                                        بازه {{ $payment->times->time }}</span>
                                    <span class="fs-ms p-1 rounded" style="background-color: #ccc;">{{
                                        $payment->order->orderProducts->count()
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
                                            @foreach ( $payment->order->orderProducts as $item)
                                            <div class="swiper-slide">
                                                <a target="_blank"
                                                    href="{{ url('/product/at-' . $item->product->id . '/' . $item->product->link) }}">
                                                    <img src="/storage/{{ $item->product->img }}">
                                                </a>
                                                <div class="d-flex justify-content-between">
                                                    @if ($item->color != null)
                                                    <div class="d-flex align-items-center mt-3">
                                                        <div class="border rounded-circle" style="padding: 2px">
                                                            <span class="d-block rounded-circle"
                                                                style="background-color: {{ $item->color->value }};width:15px;height:15px"></span>
                                                        </div>
                                                        <span class="ms-1" style="font-size: 12px;">{{
                                                            $item->color->name }}</span>
                                                    </div>
                                                    @endif
                                                    <div class="d-flex align-items-center mt-3">
                                                        <span class="ms-1" style="font-size: 12px;">تعداد : </span>
                                                        <span class="ms-1" style="font-size: 12px;">{{
                                                            $item->count}}</span>
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
                                    <span class="ms-1">{{ number_format($payment->total_price) }}</span>
                                    <span>تومان</span>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
                @endif

            </section>
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                <div class="bg-white rounded-3 shadow-lg p-4   position-relative">
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
                            <h2 class="h6 mb-3 pb-1 fs-md">قیمت کالاها ({{ sizeof($payment->order->orderProducts) }})
                            </h2>
                            <h3 class="fw-normal fs-md fw-bold">{{ number_format($payment->order->total_price) }} <span
                                    style="font-size: 13px">تومان</span>
                            </h3>
                        </div>
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md">هزینه ارسال</h2>
                            <h3 class="fw-normal fs-md fw-bold text-muted">@if(is_null($payment->time_id)) رایگان
                                @else {{ number_format($payment->times->price) }} <span
                                    style="font-size: 13px">تومان</span>@endif </h3>
                        </div>
                        @php
                        $total_price_discount_orders = ABS($payment->order->total_discount_price -
                        $payment->order->total_price);
                        $darsad = ABS(($total_price_discount_orders / $payment->order->total_price)*100) ;
                        // $darsad = ABS(($payments[0]->discount_price/ $payments[0]->total_price)*100);
                        @endphp
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center ">
                            <h2 class="h6 mb-3 pb-1 fs-md text-primary">سود شما از خرید</h2>
                            <h3 class="fw-normal fs-md fw-bold text-primary"><span class="">({{ ceil($darsad)
                                    }}%)</span> {{
                                number_format( $total_price_discount_orders) }} <span
                                    style="font-size: 13px">تومان</span>
                            </h3>
                        </div>
                        @if($this->gift_code_price != null)
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md">کارت هدیه</h2>
                            <h3 class="fw-normal fs-md fw-bold ">
                                {{-- @if($payment->gift_code) --}}
                                @if ($this->gift_code_remaining != null)
                                {{ number_format($this->gift_code_remaining)}}
                                @else
                                {{ number_format($this->gift_code_price->value_price)}}
                                @endif
                                {{-- @else
                                0
                                @endif --}}
                                <span style="font-size: 13px">تومان</span>
                            </h3>
                        </div>
                        @endif
                        @if($this->discount_price != null)
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md">کد تخفیف</h2>
                            <h3 class="fw-normal fs-md fw-bold ">
                                {{-- @if($payment->discount) --}}
                                @if ($this->discount_price->type == 0)
                                {{ number_format($this->discount_price->price ) }}
                                <span style="font-size: 13px">تومان</span>
                                @elseif ($this->discount_price->type == 1)
                                {{ $this->discount_price->percent }}%
                                @endif
                               
                            </h3>
                        </div>
                        @endif
                        <div class="align-items-center border-bottom d-flex justify-content-between mb-2 text-center">
                            <h2 class="h6 mb-3 pb-1 fs-md text-primary">مبلغ قابل پرداخت</h2>
                            <h3 class="fw-normal fs-md fw-bold text-primary">
                                @php
                                $cal_price_discount = $payment->total_price;
                                @endphp
                                @if($this->discount_price != null)
                                @php
                                if($this->discount_price->type == 0){
                                $cal_price_discount = $cal_price_discount - $this->discount_price->price;
                                }elseif($this->discount_price->type == 1){
                                $dPercent = ($cal_price_discount * $this->discount_price->percent) / 100;
                                $cal_price_discount =$cal_price_discount - $dPercent; 
                                }
                                @endphp
                                @endif

                                @if($this->gift_code_price != null)

                                @if ($this->gift_code_remaining != null)
                                @php
                                $cal_price_discount = 0;
                                @endphp
                                @else

                                @php
                                $cal_price_discount = $cal_price_discount - $this->gift_code_price->value_price;
                                @endphp
                                @endif

                                @endif

                                {{ number_format(ABS($cal_price_discount)) }}
                                <span style="font-size: 13px">تومان</span>
                            </h3>
                        </div>
                        <div class="accordion" id="order-options">
                            {{-- @if($this->discount_price == null) --}}

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
                                            wire:click="checkDiscountCode()">
                                            اعمال کد
                                        </button>
                                    </form>
                                </div>
                            </div>
                            {{-- @endif --}}
                            {{-- @if($this->gift_code_price ) --}}
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
                                            wire:click="checkGiftCode({{ $cal_price_discount }})">
                                            اعمال کد
                                        </button>
                                    </form>
                                </div>
                            </div>
                            {{-- @endif --}}
                        </div>
                        <a class="btn btn-primary btn-shadow d-block w-100 mt-4" wire:click="continuePayment"></i>پرداخت
                        </a>
                        @endif
                    </div>
                </div>
            </aside>
        </div>
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

</div>
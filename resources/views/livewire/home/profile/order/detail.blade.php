{{-- <div>
    <main id="main">
        <div id="HomePageTopBanner"></div>
        <div id="content">
            <div class="container c-profile-page">
                <section class="o-page">
                    <div class="o-page__row">
                        @include('livewire.home.profile.index.aside')
                        @include('livewire.home.profile.order.detailIndex')
                    </div>
                </section>
            </div>
        </div>
    </main>
</div> --}}
@extends('livewire.home.profile.profile_layout')
@section('title')
سفارشات-{{ auth()->user()->name }}
@endsection
@section('url_profile')
جزئیات سفارش - {{ $payment->order_number }}
@endsection
@section('profile_content')
<section class="col-lg-8" id="table_orders" wire:init='loadingPage'>
    <!-- Toolbar-->
    <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">

    </div>
    <!-- Orders list-->
    <div class="table-responsive fs-md mb-4 position-relative" style="min-height: 300px;">
        @if (!$readyToLoad)

        <div class="align-items-center container-loader-atiyar d-flex justify-content-center position-absolute">
            <div class="position-absolute" style="opacity: .09;"><img src="{{ asset('img/weblogo.png') }}" alt=""></div>
            <div class="custom-loader-atiyar"></div>
        </div>
        @else
        <div class="fs-md mb-4 my-5 position-relative" style="min-height: 300px;">
            <div>
                <div class="fs-4 fw-bold"> جزئیات سفارش</div>
                <div class="d-flex flex-column justify-content-start py-4">
                    <div class="align-items-center border-bottom d-flex py-4">
                        <div class="me-5"><span>کد پیگیری سفارش :</span> <span class="fw-bold">{{ $payment->payment_number
                                }}</span>
                        </div>
                        <div><span>تاریخ ثبت سفارش :</span> <span class="fw-bold">{{
                                jdate($payment->created_at)->format('%A, %d %B %Y') }}</span></div>
                    </div>
                    <div class="align-items-center d-flex py-4">
                        <div class="me-5"><span>تحویل گیرنده :</span> <span class="fw-bold">{{ $payment->address->name .
                                $payment->address->lname }} </span></div>
                        <div><span>شماره موبایل :</span> <span class="fw-bold">{{ $payment->address->mobile}}</span>
                        </div>
                    </div>
                    <div class="d-flex"><span>آدرس : </span>
                        <p class="fw-bold ms-2">{{ $payment->address->state .' - ' . $payment->address->city .' - ' .
                            $payment->address->address}}</p>
                    </div>
                </div>
                <div class="border-bottom border-top px-2 py-3">
                    <div class="align-items-start d-flex justify-content-between">
                        <div class="d-flex flex-column">
                            <div class="d-flex flex-column">
                                <div class="d-flex ">
                                    <div>
                                        <span>مبلغ</span>
                                        <span class="fw-bold">
                                            @if ($payment->status == 'paid' || $payment->status == 'delivered')
                                            {{ number_format($payment->total_price) }}
                                            @else
                                            0
                                            @endif
                                        </span>
                                        <span>تومان</span>
                                    </div>
                                    @if ($payment->status == 'paid' || $payment->status == 'delivered')
                                    <div class="me-5 ms-5">
                                        <span>سود شما از خرید :</span>
                                        <span class="fw-bold">{{ number_format($payment->discount_price) }}</span>
                                        <span>تومان</span>
                                    </div>
                                    @endif
                                    <div class="ms-4">پرداخت اینترنتی</div>
                                </div>
                            </div>
                            @if ($payment->status == 'paid' || $payment->status == 'delivered')
                            <div class="mt-4">
                                <span>هزینه ارسال (بر اساس وزن و حجم) :</span>
                                <span class="fw-bold">{{ number_format($payment->shipping_price) }}</span>
                                <span>تومان</span>
                            </div>
                            @endif

                        </div>

                        <div class="d-flex flex-column">
                            @if ($payment->status == 'delivered')
                            <a href="{{ route('order.profile.returned2',['order_number'=>$payment->order_number]) }}" class="btn btn-primary btn-sm">ثبت مرجوعی</a>
                            @endif
                            <button class="bg-none border-0 collapsed text-primary  @if ($payment->status == 'delivered') mt-3  @endif" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                                aria-controls="collapseExample">
                                <span>تاریخ تراکنش ها</span><i class="ci-arrow ci-arrow-down fs-ms px-2"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="collapse mt-4" id="collapseExample">
                            <div class="card card-body">
                                <table class="table">
                                    {{-- <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                            <th scope="col">Handle</th>
                                        </tr>
                                    </thead> --}}
                                    <tbody>
                                        @foreach ($bankPayments as $bankPayment)
                                        <tr class="fw-bold">
                                            <td class="align-items-center d-flex">
                                                @if ($bankPayment->status == 0)
                                                <i class="ci-close-circle fw-bold me-2 text-danger"></i>
                                                <span>مبلغ سفارش -</span>
                                                <span>پرداخت ناموفق</span>
                                                @else
                                                <i class="ci-close-circle fw-bold me-2 text-success"></i>
                                                <span>مبلغ سفارش -</span>
                                                <span>پرداخت موفق</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span>{{ jdate($bankPayment->created_at)->format('%d %B %Y') }}</span>
                                            </td>
                                            <td>
                                                <span>{{ number_format($bankPayment->price) }}</span>
                                                <span>تومان</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                @foreach ($payment->orders as $key => $order)
                <div class="border mt-4 p-4 rounded-3">
                    <div class="border-bottom d-flex pb-4">
                        <div class="" style="width: 65%;">
                            <div class="d-flex">
                                <span class="fw-bold">مرسوله
                                    {{ $key+1 }}
                                    از
                                    {{ sizeof($payment->orders) }}
                                </span>
                                <div class="fw-bold ms-5">
                                    <i></i>
                                    <span>ارسال عادی</span>
                                </div>
                            </div>
                            <div class="me-5 mt-4"><span>زمان تحویل :</span> <span class="fw-bold">{{
                                    $order->timeSend->day.' '.$order->timeSend->date . ' بازه ' . $order->timeSend->time
                                    }}</span></div>
                            <div class="d-flex mt-4">
                                <div class="me-5"><span>هزینه ارسال :</span> <span class="fw-bold">{{
                                        number_format($order->timeSend->price) }}</span>
                                </div>
                                <div class="me-5"><span>مبلغ مرسوله :</span> <span class="fw-bold">{{
                                        number_format($order->total_price) }}</span><span class="ms-1">تومان</span>
                                </div>
                            </div>
                        </div>
                        <div class="" style="width: 35%;">
                            @if ($payment->status == 'wait')
                            <span> در انتظار پرداخت</span>
                            <div class="progress my-2" role="progressbar" aria-label="Warning example"
                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-warning" style="width: 15%"></div>
                            </div>
                            @elseif ($payment->status == 'paid')
                            <span> درحال پردازش</span>
                            <div class="progress my-2" role="progressbar" aria-label="Info  example" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info" style="width: 50%"></div>
                            </div>
                            @elseif ($payment->status == 'delivered')
                            <span> تحویل شده </span>
                            <div class="progress my-2" role="progressbar" aria-label="Success example"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                            @elseif ($payment->status == 'returned')
                            <span> مرجوعی</span>

                            <div class="progress my-2" role="progressbar" aria-label="Danger example"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-danger" style="width: 100%"></div>
                            </div>
                            @elseif ($payment->status == 'canceled')
                            <span> لغو شده</span>
                            <div class="progress my-2" role="progressbar" aria-label="Primary example"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-primary" style="width: 100%"></div>
                            </div>
                            @endif
                            <div class="me-5 mt-4"><span>کد پیگیری مرسوله :</span> <span class="fw-bold">{{
                                    $order->order_number }}</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        @foreach ($order->orderProducts as $key => $product)
                        <div class="d-flex py-5 @if($key+1 < sizeof($order->orderProducts)) border-bottom @endif">
                            <div class="p-4">
                                <a href="{{ url('/product/at-' . $product->productSeller->product->id . '/' . $product->productSeller->product->link) }}">
                                    <img width="150px" src="/storage/{{ $product->productSeller->product->img }}" alt="">
                                </a>
                            </div>
                            <div>
                                <span class="d-block fw-bold">{{ $product->productSeller->product->title }}</span>
                                @if ($product->productSeller->color)
                                <div class="d-flex align-items-center mt-3">
                                    <div class="border rounded-circle" style="padding: 2px">
                                        <span class="d-block rounded-circle"
                                            style="background-color: {{ $product->productSeller->color->value }};width:15px;height:15px"></span>
                                    </div>
                                    <span class="ms-1" style="font-size: 12px;">{{ $product->productSeller->color->name
                                        }}</span>
                                </div>
                                {{-- <div class="mt-3"><i class="ci-add me-2"></i><span>{{
                                        $product->productSeller->color->name }}</span></div> --}}
                                @endif
                                <div class="mt-2"><i class="ci-security-check me-2"></i><span>{{
                                        $product->productSeller->warranty->name }}</span></div>
                                <div class="mt-2"><i class="ci-store me-2"></i><span>{{
                                        $product->productSeller->vendor->name }}</span></div>
                                <div class="mt-3 text-primary"><span>{{
                                        number_format(ABS($product->productSeller->discount_price -
                                        $product->productSeller->price)) }}</span><span class="ms-2">تومان</span><span
                                        class="ms-2">تخفیف </span></div>
                                <div class="fs-4 mt-3"><span class="fw-bold">{{
                                        number_format($product->productSeller->discount_price) }}</span><span
                                        class="fs-md ms-2">تومان</span></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

        </div>
     
    </div>
    @endif
</section>
@endsection
@section('script')
<script>
    function setSwiperSlider(){
            const swiper = new Swiper('.swiper_slider', {
                // loop: true,
                slidesPerView: 8,
                spaceBetween: 30,
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
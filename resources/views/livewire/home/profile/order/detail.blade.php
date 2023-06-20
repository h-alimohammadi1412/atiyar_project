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
                        <div class="me-5"><span>کد پیگیری سفارش :</span> <span class="fw-bold">{{ $payment->order_number
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
                <div class="border-bottom border-top d-flex px-2 py-3">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="d-flex ">
                                <div>
                                    <span>مبلغ</span>
                                    <span class="fw-bold">
                                        @if ($payment->status == 'paid')
                                        {{ number_format($payment->total_price) }}
                                        @else
                                        0
                                        @endif
                                    </span>
                                    <span>تومان</span>
                                </div>
                                @if ($payment->status == 'paid')
                                <div class="me-5 ms-5">
                                    <span>سود شما از خرید :</span>
                                    <span class="fw-bold">{{ number_format($payment->discount_price) }}</span>
                                    <span>تومان</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        @if ($payment->status == 'paid')
                        <div class="mt-4">
                            <span>هزینه ارسال (بر اساس وزن و حجم) :</span>
                            <span class="fw-bold">{{ number_format($payment->times->price) }}</span>
                            <span>تومان</span>
                        </div>
                        @endif

                    </div>
                    <div class="ms-4">پرداخت اینترنتی</div>
                </div>

                @foreach ($payment->order as $key => $order)
                <div class="border mt-4 p-4 rounded-3">
                    <div class="border-bottom d-flex pb-4">
                        <div class="" style="width: 65%;">
                            <div class="d-flex">
                                <span class="fw-bold">مرسوله
                                    {{ $key+1 }}
                                    از
                                    {{ sizeof($payment->order) }}
                                </span>
                                <div class="fw-bold ms-5">
                                    <i></i>
                                    <span>ارسال عادی</span>
                                </div>
                            </div>
                            <div class="me-5 mt-4"><span>زمان تحویل :</span> <span class="fw-bold">{{
                                    $payment->times->day.' '.$payment->times->date . ' بازه ' . $payment->times->time
                                    }}</span></div>
                            <div class="d-flex mt-4">
                                <div class="me-5"><span>هزینه ارسال :</span> <span class="fw-bold">{{
                                        number_format($payment->times->price) }}</span>
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
                                <img width="150px" src="/storage/{{ $product->productSeller->product->img }}" alt="">
                            </div>
                            <div>
                                <span class="d-block fw-bold">{{ $product->productSeller->product->title }}</span>
                                @if ($product->productSeller->color)
                                <div class="mt-3"><i class="ci-add me-2"></i><span>{{
                                        $product->productSeller->color->name }}</span></div>
                                @endif
                                <div class="mt-2"><i class="ci-add me-2"></i><span>{{
                                        $product->productSeller->warranty->name }}</span></div>
                                <div class="mt-2"><i class="ci-add me-2"></i><span>{{
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
        {{-- <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th class="text-center fw-bold">کد سفارش</th>
                    <th class="text-center fw-bold">تاریخ خرید</th>
                    <th class="text-center fw-bold">مبلغ کل </th>
                    <th class="text-center fw-bold">مشاهده سفارش</th>
                    <th class="text-center fw-bold"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                @php
                $date1 = new DateTime(\Illuminate\Support\Carbon::now());
                $date2 = new DateTime($payment->updated_at);
                $diff=$date2->diff($date1);
                $time = 60 - $diff->format('%i') ;
                $statTime = $time > 1 ? true : false;
                @endphp
                @if ($payment->status == 'wait' && $time > 1)
                <tr style="border: 1px solid #4b566b3d;border-radius: 26px;">
                    <td class="py-3 text-center"><span class="fs-sm fw-bold">ATC-{{ $payment->order_number }}</span>
                    </td>
                    <td class="py-3 text-center">{{ jdate($payment->created_at)->format('%d %B %Y') }}</td>
                    <td class="py-3 text-center">{{ number_format($payment->total_price) }} تومان</td>
                    <td class="text-center"><a href="{{ url('/') }}"><i class="ci-eye fs-2"></i></a></td>
                    <div class="btn-group">
                        <td class="text-center">
                            <a class="btn btn-sm btn-primary" wire:click="paymentBank({{ $payment->id }})">پرداخت</a>
                        </td>
                    </div>
                </tr>
                <tr style="border-top: none;border: 1px solid #4b566b42;overflow: hidden;">
                    <td colspan="6">
                        <div class="swiper swiper_slider my-2">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                @foreach ($payment->order->orderProducts as $order_item)
                                <div class="swiper-slide">
                                    <a target="_blank"
                                        href="{{ url('/product/at-' . $order_item->product->id . '/' . $order_item->product->link) }}">
                                        <img src="/storage/{{ $order_item->product->img }}">
                                    </a>
                                    <div class="d-flex justify-content-between">

                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        @if ($payment->status == 'wait')

                        <div class="align-items-center d-flex py-2 w-100">
                            <i class="ci-announcement text-primary text-warning"></i>
                            <span class="fs-sm ms-2 text-danger">سفارش در صورت عدم پرداخت تا {{ $time }} دقیقه دیگر لغو
                                خواهد شد.</span>
                        </div>
                        @endif

                    </td>
                </tr>
                @else
                <tr style="border: 1px solid #4b566b3d;border-radius: 26px;">
                    <td class="py-3 text-center"><span class="fs-sm fw-bold">ATC-{{ $payment->order_number }}</span>
                    </td>
                    <td class="py-3 text-center">{{ jdate($payment->created_at)->format('%d %B %Y') }}</td>
                    <td class="py-3 text-center">{{ number_format($payment->total_price) }} تومان</td>
                    <td class="text-center"><a href="{{ url('/') }}"><i class="ci-eye fs-2"></i></a></td>

                    @if($payment->status == 'delivered')
                    <td class="text-center">
                        <div class="btn-group">
                            <a class="btn btn-sm btn-primary" wire:click="paymentBank({{ $payment->id }})">مشاهده
                                فاکتور</a>
                            <a class="btn btn-sm btn-primary" wire:click="paymentBank({{ $payment->id }})">ثبت
                                مرجوعی</a>
                        </div>
                    </td>
                    @elseif ($payment->status == 'returned')
                    <td class="text-center">
                        <a class="btn btn-sm btn-primary" wire:click="paymentBank({{ $payment->id }})">مشاهده
                            فاکتور</a>
                    </td>
                    @endif

                </tr>
                <tr style="border-top: none;border: 1px solid #4b566b42;overflow: hidden;">
                    <td colspan="6">
                        <div class="swiper swiper_slider my-2">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                @foreach ($payment->order->orderProducts as $order_item)
                                <div class="swiper-slide">
                                    <a target="_blank"
                                        href="{{ url('/product/at-' . $order_item->product->id . '/' . $order_item->product->link) }}">
                                        <img src="/storage/{{ $order_item->product->img }}">
                                    </a>
                                    <div class="d-flex justify-content-between">

                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table> --}}
    </div>
    <!-- Pagination-->
    {{-- {{ $payments->links() }} --}}

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
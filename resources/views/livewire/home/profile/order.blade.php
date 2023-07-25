@extends('livewire.home.profile.profile_layout')

@section('title')
سفارشات-{{ auth()->user()->name }}
@endsection
@section('url_profile')
سفارشات
@endsection
@section('profile_content')
<section class="col-lg-8" id="table_orders" wire:init='loadingPage'>
    <!-- Toolbar-->
    <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
        <div class="d-flex align-items-center">
            <label class="d-none d-lg-block fs-sm text-light text-nowrap opacity-75 me-2" for="order-sort">مرتب سازی بر
                اساس وضعیت :</label>
            <label class="d-lg-none fs-sm text-nowrap opacity-75 me-2" for="order-sort">مرتب سازی:</label>
            <select class="form-select" id="order-sort" wire:change="ordering($event.target.value)">
                <option value="1" wire:click='ordering(1)'> در انتظار پرداخت</option>
                <option value="2" wire:click='ordering(2)'> درحال پردازش</option>
                <option value="3" wire:click='ordering(3)'> تحویل شده </option>
                {{-- <option wire:click='ordering(1)'>تحویل داده شده</option> --}}
                <option value="4" wire:click='ordering(4)'> مرجوعی</option>
                <option value="5" wire:click='ordering(5)'> لغو شده</option>
            </select>
        </div>
    </div>
    <!-- Orders list-->
    <div class="table-responsive fs-md mb-4 position-relative" style="min-height: 300px;">
        @if (!$readyToLoad)

        <div class="align-items-center container-loader-atiyar d-flex justify-content-center position-absolute">
            <div class="position-absolute" style="opacity: .09;"><img src="{{ asset('img/weblogo.png') }}" alt=""></div>
            <div class="custom-loader-atiyar"></div>
        </div>
        @else
        <table class="table table-hover mb-0">
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
                    @forelse ($payments as $payment)
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
                        <td class="text-center"><a
                                href="{{ route('order.profile.detail',['order_number'=>$payment->order_number ]) }}"><i
                                    class="ci-eye fs-2"></i></a></td>
                        <div class="btn-group">
                            <td class="text-center">
                                <a class="btn btn-sm btn-primary" wire:click="paymentBank({{ $payment->id }})">پرداخت</a>
                            </td>
                        </div>
                    </tr>
                    <tr style="border-top: none;border: 1px solid #4b566b42;overflow: hidden;">
                        <td colspan="6">

                            @foreach ($payment->orders as $order)
                            <div class="swiper swiper_slider my-2">
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

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            @endforeach
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
                        <td class="text-center"><a
                                href="{{ route('order.profile.detail',['order_number'=>$payment->order_number ]) }}"><i
                                    class="ci-eye fs-2"></i></a></td>

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
                            @foreach ($payment->orders as $order)
                            <div class="swiper swiper_slider my-2">
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

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            @endforeach
                        </td>
                    </tr>
                    @endif   
                    @empty
                    <tr>
                        <td colspan="5">
                            <p class="alert alert-warning text-center">تراکنشی برای شما ثبت نشده است.</p>
                        </td>
                    </tr>
                    @endforelse 
            </tbody>
        </table>
    </div>
    <!-- Pagination-->
    {{ $payments->links() }}

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
@section('title','سبد خرید')
<div>
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol
                        class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item">
                            <a class="text-nowrap" href="{{ url("/") }}"><i class="ci-home"></i>آتی یار</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">
                            لیست خرید بعدی
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">لیست خرید بعدی</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
            <!-- List of items-->
            <section class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center pt-3 pb-4 pb-sm-5 mt-1">
                    <h2 class="h6 text-light mb-0">لیست خرید بعدی</h2>
                </div>
                @if (sizeof($carts)>0)
                @foreach ($carts as $cart)
                <!-- Item-->
                <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
                    <div class="d-block d-sm-flex align-items-center text-center text-sm-start">
                        <a class="d-inline-block flex-shrink-0 mx-auto me-sm-4"
                            href="{{ url('/product/at-' . $cart->productSeller->product->id . '/' . $cart->productSeller->product->link) }}"><img
                                src="/storage/{{ $cart->productSeller->product->img }}" width="160" alt="محصول" /></a>
                        <div class="pt-2">
                            <h3 class="product-title fs-base mb-2">
                                <a
                                    href="{{ url('/product/at-' . $cart->productSeller->product->id . '/' . $cart->productSeller->product->link) }}">{{
                                    $cart->productSeller->product->title }}</a>
                            </h3>
                            <div class="fs-sm">
                                <span class="text-muted me-2">رنگ:</span>{{ $cart->productSeller->color->name }}
                            </div>
                            <div class="fs-sm">
                                <span class="text-muted me-2">گارانتی:</span>{{ $cart->productSeller->warranty->name }}
                            </div>
                            <div class="fs-sm">
                                <span class="text-muted me-2">فروشنده:</span>{{ $cart->productSeller->vendor->name }}
                            </div>
                            @if ($cart->productSeller->anbar == 1)
                            <div class="fs-sm">
                                <span class="me-2">موجود در انبار فروشنده</span> | <span class="me-2">ارسال از {{
                                    $cart->productSeller->time }} روز کاری دیگر</span>
                            </div>
                            @else
                            <div class="fs-sm">
                                <span class="me-2">موجود در انبار آتی یار</span> | @if($cart->productSeller->time == 0)
                                <span class="me-2">ارسال از آتی یار</span> @else <span class="me-2">ارسال از {{
                                    $cart->productSeller->time }} روز کاری دیگر</span> @endif
                            </div>
                            @endif
                            <div class="align-items-center d-flex fs-lg justify-content-around pt-2 text-accent"
                                style="width: 385px;">
                                <span class="" style="font-size: 22px;">{{
                                    number_format($cart->productSeller->discount_price) }} <span
                                        class="fs-6">تومان</span></span> |
                                <span class=" text-primary" style="font-size: 15px;"><span class="">تخفیف :</span> {{
                                    number_format($cart->productSeller->price - $cart->productSeller->discount_price) }}
                                    <span class="">تومان</span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center mx-auto mx-sm-0 ps-sm-3 pt-2 pt-sm-0 text-center text-sm-start"
                        style="max-width: 9rem">
                        <button class="btn btn-link fs-md px-0 py-2 text-danger"
                            wire:click="addToCartFromCartOther({{ $cart->id }})">
                            <i class="ci-cart me-2"></i><span class="fs-sm">اضافه به سبد خرید</span>
                        </button>
                        <button class="btn btn-link px-0 py-0 text-danger"
                            wire:click="deleteCartProduct({{ $cart->id }})">
                            <i class="ci-close-circle me-2"></i><span class="fs-sm">حذف</span>
                        </button>
                    </div>
                </div>
                @endforeach
                @else
                <div class="alert alert-warning text-center py-10">لیست خرید بعدی شما خالی است</div>
                @endif

                {{-- <button class="btn btn-outline-accent d-block w-100 mt-4" wire:click="updateBasket">
                    <i class="ci-loading fs-base me-2"></i>به روز رسانی
                </button> --}}
            </section>
            <!-- Sidebar-->
            <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
                <div class="bg-white rounded-3 shadow-lg p-4">
                    <div class="py-2 px-xl-2">
                        <div class="text-center mb-4 pb-3 border-bottom">
                            <h6 class="fw-normal">لیست خرید بعدی چیست؟</h6>
                            <p>
                                شما می‌توانید محصولاتی که به سبد خرید خود افزوده اید و موقتا قصد خرید آن‌ها را ندارید،
                                در لیست خرید بعدی خود قرار داده و هر زمان مایل بودید آن‌ها را مجدداً به سبد خرید اضافه
                                کرده و خرید آن‌ها را تکمیل کنید.
                            </p>
                        </div>
                        <p class="text-center"><span class="fw-bold"> {{ $carts->count() }} کالا </span> در لیست خرید
                            بعدی شماست</p>
                        <a class="btn btn-primary btn-shadow d-block w-100 mt-4" wire:click="addAllToCart"><i
                                class="ci-cart fs-lg me-2"></i>انتقال همه به سبد خرید</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
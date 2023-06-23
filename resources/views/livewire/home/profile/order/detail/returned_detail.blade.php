{{-- <div>
    <main id="main">
        <div id="HomePageTopBanner"></div>
        <div id="content">
            <div class="container c-profile-page">
                <section class="o-page">
                    <div class="o-page__row">
                        @include('livewire.home.profile.index.aside')
                        @include('livewire.home.profile.order.detail.returnedIndexBack')
                    </div>
                </section>
            </div>
        </div>
    </main>
</div> --}}
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
انتخاب کالاهای مرجوعی
@endsection
@section('profile_content')
<section class="col-lg-8" id="table_orders">
    <!-- Toolbar-->
    <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">

    </div>
    <!-- Orders list-->
    <div class="table-responsive fs-md mb-4 position-relative" style="min-height: 300px;">
        {{-- @if ($readyToLoad)

        <div class="align-items-center container-loader-atiyar d-flex justify-content-center position-absolute">
            <div class="position-absolute" style="opacity: .09;"><img src="{{ asset('img/weblogo.png') }}" alt=""></div>
            <div class="custom-loader-atiyar"></div>
        </div>
        @else --}}

        @if (sizeof($products) > 0)
        @foreach ($products as $product)
        <div class="d-sm-flex mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
            <div class="d-flex align-items-center justify-content-center" style="width: 50px;">
                <input class="form-check-input" type="checkbox">
            </div>
            <div class="d-block d-sm-flex align-items-start text-center text-sm-start">
                <a class="d-block flex-shrink-0 mx-auto me-sm-4 position-reletive me-4"
                    href="{{ url('/product/at-' . $product->product->id . '/' . $product->product->link) }}"
                    style="width: 10rem;">
                    <img src="/storage/{{ $product->product->img }}" alt="محصول">
                    <span class="badge bg-primary position-absolute">{{ $product->count_cart }}</span>
                </a>
                <div class="ms-4 mt-2 pt-2">
                    <h3 class="product-title fs-base mb-2"><a
                            href="{{ url('/product/at-' . $product->product->id . '/' . $product->product->link) }}">{{
                            $product->product->title }}</a></h3>
                    <div class="fs-sm"><i class="ci-store me-2"></i>{{ $product->seller->name }}</div>
                    {{-- <div class="fs-sm"><span class="text-muted me-2">دسته
                            بندی:</span>{{ $product->category->title }}</div> --}}
                    <div class="fs-lg text-accent pt-2"> {{ $product->product->price }} </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="d-flex align-items-center">
            <button class="btn btn-primary me-3" >تایید</button>
            <button class="btn btn-info">انصراف</button>
        </div>
        @else
        <div class="alert alert-warning text-center mt-5">
            هیچ محصولی در لیست مرسوله شما وجود ندارد.
        </div>
        @endif

        {{-- @endif --}}
    </div>
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
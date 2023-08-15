<section class="tns-carousel tns-controls-lg mt-5">
    <div class="bg-primary py-2">

        <div class="align-items-center d-flex justify-content-between px-5 py-3">
            <h2 class="h3 h4 text-center">شگفت انگیز آتی یار</h2>
            <div class="align-items-center d-flex justify-content-between">
                <a href="#" class="text-white">مشاهده همه</a><i class="ci-arrow-right fs-ms ms-2 text-white"></i>
            </div>
        </div>
        <div class="swiper swiper_specials">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach (cache('specialProduct') as $slider)
                <div class="swiper-slide">
                    <div class="">
                        <div class="card product-card">
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title="" data-bs-original-title="اضافه کردن به علاقه مندی"
                                aria-label="اضافه کردن به علاقه مندی"
                                wire:click="favoriteProduct({{ $slider->product->id }})"><i
                                    class="ci-heart"></i></button>
                            <a target="_blank" class="card-img-top d-block overflow-hidden"
                                style="height: 170px !important;"
                                href="{{ url('/product/at-' . $slider->product->id . '/' . $slider->product->link) }}">
                                <img src="/storage/{{ $slider->product->img }}" alt="محصول" class="w-75 h-75">
                            </a>
                            <div class="card-body py-0">
                                {{-- <a target="_blank" class="product-meta d-block fs-xs pb-1"
                                    href="{{ url('/main/' . $slider->category->link) }}">{{ $slider->category->title
                                    }}</a> --}}
                                <h3 class="product-title fs-sm"><a target="_blank"
                                        href="/product/at-{{ $slider->product->id }}/{{ $slider->product->link }}">{{
                                        substr($slider->product->title, 50) . '...' }}</a>
                                </h3>
                                <div class="d-flex justify-content-between">
                                    {{-- <div class="product-price"> --}}
                                        {{-- <span class="text-accent"> --}}
                                            {{-- @if ($slider->product->price > 0 && $slider->product->price != null)
                                            <del>{{ number_format($slider->product->discount_price) }}</del>
                                            @else --}}
                                            {{-- ناموجود --}}
                                            {{-- @endif --}}
                                            {{-- </span> --}}
                                        {{-- </div> --}}
                                    {{-- <div class="star-rating"><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="card-body py-0">
                                @if ($slider->product->price > 0 && $slider->product->price != null)
                                <div class="d-flex justify-content-around align-items-center">
                                    <del class="">{{ number_format($slider->product->discount_price) }}</del>
                                    <span class="d-block fs- fs-5 text-center fw-bold">{{
                                        number_format($slider->product->price)
                                        }}</span>
                                </div>
                                <button
                                    class="btn btn-primary btn-sm d-block w-100 mb-2 d-flex justify-content-center align-items-center"
                                    type="button"><i class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                                @else
                                ناموجود
                                @endif
                            </div>
                        </div>
                        <hr class="d-sm-none">
                    </div>
                </div>
                @endforeach
            </div>
            <!-- If we need pagination -->
            {{-- <div class="swiper-pagination1"></div> --}}

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
        </div>
    </div>

</section>
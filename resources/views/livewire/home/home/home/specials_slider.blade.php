<section class="tns-carousel tns-controls-lg mt-5">
    <h2 class="h3 text-center">شگفت انگیز آتی یار</h2>
    <div class="swiper swiper_specials">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach (cache('specialProduct') as $slider)
                <div class="swiper-slide">
                    <div class="">
                        <div class="card product-card">
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title=""
                                data-bs-original-title="اضافه کردن به علاقه مندی"
                                aria-label="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                class="card-img-top d-block overflow-hidden" href="/product/dkp-{{$slider->product->id}}/{{$slider->product->link}}"><img
                                    src="/storage/{{ $slider->product->img }}" alt="محصول"></a>
                            <div class="card-body py-2 cart_body_product"><a class="product-meta d-block fs-xs pb-1"
                                    href="/product/dkp-{{$slider->product->id}}/{{$slider->product->link}}">{{ $slider->category->title }}</a>
                                <h3 class="product-title fs-sm"><a
                                        href="/product/dkp-{{$slider->product->id}}/{{$slider->product->link}}">{{ substr($slider->product->title, 50) . '...' }}</a>
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text-accent">39.<small>50</small></span>
                                    </div>
                                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled active"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                {{-- <div class="text-center pb-2">
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="size2" id="xs">
                                        <label class="form-option-label" for="xs">XS</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="size2" id="s"
                                            checked="">
                                        <label class="form-option-label" for="s">S</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="size2" id="m">
                                        <label class="form-option-label" for="m">M</label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="size2" id="l">
                                        <label class="form-option-label" for="l">L</label>
                                    </div>
                                </div> --}}
                                <button
                                    class="btn btn-primary btn-sm d-block w-100 mb-2 d-flex justify-content-center align-items-center"
                                    type="button"><i class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                                {{-- <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view"
                                        data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a></div> --}}
                            </div>
                        </div>
                        <hr class="d-sm-none">
                    </div>
                </div>
            @endforeach
            <div class="swiper-slide">
                <div class="">
                    <div class="card product-card">
                        <a class="card-img-top d-block overflow-hidden  d-flex justify-content-center align-items-center fs-6"
                            href="shop-single-v1.html">مشاهده همه ></a>
                        <div class="card-body py-2 cart_body_product"><a class="product-meta d-block fs-xs pb-1"
                                href="#"></a>
                            <h3 class="product-title fs-sm "><a href="shop-single-v1.html"></a></h3>                            
                        </div>
                       
                    </div>
                    <hr class="d-sm-none">
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        {{-- <div class="swiper-pagination1"></div> --}}

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
    </div>

</section>

@section('script')
    <script></script>
@endsection

<section class="tns-carousel tns-controls-lg mt-5">
    <h2 class="h3 text-center">محصولات پربازدید</h2>
    <div class="swiper swiper_specials">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach (cache('mostVisited') as $product)
                <div class="swiper-slide">
                    <div class="">
                        <div class="card product-card">
                            <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                data-bs-placement="left" title=""
                                data-bs-original-title="اضافه کردن به علاقه مندی"
                                aria-label="اضافه کردن به علاقه مندی"><i class="ci-heart"></i></button><a
                                class="card-img-top d-block overflow-hidden" href="{{ url('/product/at-' . $product->id . '/' . $product->link) }}"><img
                                    src="/storage/{{ $product->img }}" alt="محصول"></a>
                            <div class="card-body py-2 cart_body_product"><a class="product-meta d-block fs-xs pb-1"
                                    href="{{ url('/main/' . $product->category->link) }}">{{ $product->category->title }}</a>
                                <h3 class="product-title fs-sm"><a
                                        href="{{ url('/product/at-' . $product->id . '/' . $product->link) }}">{{ substr($product->title, 50) . '...' }}</a>
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
                                <button
                                    class="btn btn-primary btn-sm d-block w-100 mb-2 d-flex justify-content-center align-items-center"
                                    type="button"><i class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
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

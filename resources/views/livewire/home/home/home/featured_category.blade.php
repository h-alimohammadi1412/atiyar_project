<section class="container mb-4 pb-3 pb-sm-0 mb-sm-5">
    <div class="row">
        @php
            $categoryIndex = \App\Models\TitleCategoryIndex::find(1);
        @endphp
        <!-- Banner with controls-->
        <div class="col-md-5">
            <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #e2e9ef;">
                <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                    <div>
                        <h3 class="mb-1">{{ $categoryIndex->title }}</h3><a class="fs-md" href="shop-grid-ls.html">خرید
                            لباس هودی<i class="ci-arrow-right fs-xs align-middle ms-1"></i></a>
                    </div>
                    <div class="tns-carousel-controls" id="hoodie-day">
                        <button type="button"><i class="ci-arrow-left"></i></button>
                        <button type="button"><i class="ci-arrow-right"></i></button>
                    </div>
                </div><a class="d-none d-md-block mt-auto" href="shop-grid-ls.html"><img class="d-block w-100"
                        src="img/home/categories/cat-lg04.jpg" alt="For Women"></a>
            </div>
        </div>
        <!-- Product grid (carousel)-->
        <div class="col-md-7 pt-4 pt-md-0">
            <div class="swiper featured_category">
                <div class="swiper-wrapper">
                    @foreach (cache('featuredCategory') as $product)
                        <div class="swiper-slide">
                            <div>
                                <div class="card product-card">
                                    <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                                        data-bs-placement="left" title="اضافه کردن به علاقه مندی"
                                        wire:click="favoriteProduct({{ $product->id }})"><i
                                            class="ci-heart"></i></button><a target="_blank"
                                        class="card-img-top d-block overflow-hidden"
                                        href="{{ url('/product/at-' . $product->product->id . '/' . $product->product->link) }}"><img
                                            src="/storage/{{ $product->product->img }}" alt="محصول"></a>
                                    <div class="card-body py-2"><a target="_blank" class="product-meta d-block fs-xs pb-1"
                                        target="_blank" href="{{ url('/main/' . $product->category->link) }}">{{ $product->category->title }}</a>
                                        <h3 class="product-title fs-sm"><a target="_blank"
                                                href="{{ url('/product/at-' . $product->product->id . '/' . $product->product->link) }}">{{ substr($product->product->title,0, 80) . '...' }}</a>
                                        </h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="product-price"><span class="text-accent">
                                                    @if ($product->product->price > 0 && $product->product->price != null)
                                                        <del>{{ number_format($product->product->discount_price) }}</del>
                                                    @else
                                                        {{-- ناموجود --}}
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-half active"></i><i
                                                    class="star-rating-icon ci-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if ($product->product->price > 0 && $product->product->price != null)
                                           <span class="fs-4"> {{ number_format($product->product->price) }}</span>
                                            <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i
                                                    class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                                        @else
                                            <div class="align-items-center d-flex justify-content-center mb-2 w-100"
                                                style="height: 66px;">ناموجود
                                            </div>
                                        @endif

                                    </div>
                                </div>
                                <hr class="d-sm-none">
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-pagination-featured_category"></div>
            </div>
        </div>
    </div>
</section>
<style>
    .featured_category {
        width: 100%;
        height: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .featured_category .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        height: calc((100% - 30px) / 2) !important;

        /* Center slide text vertically */
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

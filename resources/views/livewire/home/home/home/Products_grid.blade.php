<section class="container pt-md-5 pb-5 mb-md-3 mt">
    <h2 class="h3 text-center">محصولات پرطرفدار</h2>
    <div class="row pt-4 mx-n2">
        @foreach (cache('productsGrid') as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="اضافه کردن به علاقه مندی" wire:click="favoriteProduct({{ $product->id }})"><i
                            class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                        href="{{ url('/product/at-' . $product->id . '/' . $product->link) }}"><img
                            src="/storage/{{ $product->img }}" alt="محصول"></a>
                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                            href="{{ url('/main/' . $product->category->link) }}">{{ $product->category->title }}</a>
                        <h3 class="product-title fs-sm"><a
                                href="{{ url('/product/at-' . $product->id . '/' . $product->link) }}">{{ substr($product->title, 0,80) . '...' }}</a>
                        </h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><span class="text-accent">
                                    @if ($product->price > 0 && $product->price != null)
                                        <del>{{ number_format($product->discount_price) }}</del>
                                    @else
                                        ناموجود
                                    @endif
                            </div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                    class="star-rating-icon ci-star-filled active"></i><i
                                    class="star-rating-icon ci-star-filled active"></i><i
                                    class="star-rating-icon ci-star-half active"></i><i
                                    class="star-rating-icon ci-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden">
                        @if ($product->price > 0 && $product->price != null)
                            <span class="d-block fs- fs-4 text-center">{{ number_format($product->price) }}</span>
                            <button
                                class="btn btn-primary btn-sm d-block w-100 mb-2 d-flex justify-content-center align-items-center"
                                type="button"><i class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                        @else
                            <span class="d-block text-center fs-4" style="    margin-top: 37px;">ناموجود</span>
                        @endif
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
        @endforeach
    </div>
    <div class="text-center pt-3"><a class="btn btn-outline-accent" href="shop-grid-ls.html">محصولات
            بیشتر<i class="ci-arrow-right ms-1"></i></a></div>
</section>

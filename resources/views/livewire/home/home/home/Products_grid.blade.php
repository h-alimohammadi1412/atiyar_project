<section class="container pt-md-5 pb-5 mb-md-3 mt">
    <h2 class="h3 text-center">محصولات پرطرفدار</h2>
    <div class="row pt-4 mx-n2">
        @foreach (\App\Models\Product::orderBy('view','ASC')->limit(8)->get() as $product)
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip"
                    data-bs-placement="left" title="اضافه کردن به علاقه مندی"><i
                        class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden"
                    href="shop-single-v1.html"><img src="/storage/{{ $product->img }}" alt="محصول"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1"
                        href="#">زنانه و بچگانه</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">{{ substr($product->title, 50) . '...' }}</a></h3>
                    <div class="d-flex justify-content-between">
                        <div class="product-price"><span class="text-accent">154.<small>00</small></span>
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
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i
                            class="ci-cart fs-sm me-1"></i>اضافه کردن به سبدخرید</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view"
                            data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>مشاهده</a></div>
                </div>
            </div>
            <hr class="d-sm-none">
        </div>
        @endforeach       
    </div>
    <div class="text-center pt-3"><a class="btn btn-outline-accent" href="shop-grid-ls.html">محصولات
            بیشتر<i class="ci-arrow-right ms-1"></i></a></div>
</section>
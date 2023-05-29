<div class="tab-pane fade" id="specs" role="tabpanel">
    <div class="d-md-flex justify-content-between align-items-start pb-4 mb-4 border-bottom">
        <div class="d-flex align-items-center me-md-3"><img src="/storage/{{ $product->img }}" width="90"
                alt="تصویر محصول">
            <div class="ps-3">
                <h6 class="fs-base mb-2">{{ $product->title }}</h6>
                <div class="h4 fw-normal text-accent">{{ number_format($product_seller_selected->price) }} <del
                        class="fs-5 text-border">{{ number_format($product_seller_selected->discount_price) }}</del>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center pt-3">
            <select class="form-select me-2" style="width: 5rem;">
                <option value="1">1</option>
                @for ($i = 2; $i <= $product_seller_selected->limit_order; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <button class="btn btn-primary btn-shadow me-2" type="button"><i class="ci-cart fs-lg me-sm-2"></i><span
                    class="d-none d-sm-inline">اضافه کردن
                    به سبدخرید</span></button>
            <div class="me-2">
                <button class="btn btn-secondary btn-icon" type="button" data-bs-toggle="tooltip"
                    title="اضافه کردن به علاقه مندی"><i class="ci-heart fs-lg"></i></button>
            </div>
            <div>
                <button class="btn btn-secondary btn-icon" type="button" data-bs-toggle="tooltip" title="مقایسه"><i
                        class="ci-compare fs-lg"></i></button>
            </div>
        </div>
    </div>
    <!-- Specs table-->
    <div class="row pt-2">
        @foreach ($productAttributes as $productAttribute)
            <div class="col-lg-6 col-sm-12">
                <h3 class="h6">{{ $productAttribute->title }}</h3>
                <ul class="list-unstyled fs-sm pb-2 ul_productAttribute">
                    @foreach ($productAttribute->getChild as $productAttributeChild)
                        <li class="d-flex justify-content-between pb-2 border-bottom px-3">
                            <span class="text-muted">{{ $productAttributeChild->title }} :</span>

                            @if (sizeof($productAttributeChild->getValue) > 0)
                                @foreach ($productAttributeChild->getValue as $key => $value)
                                    @if ($key >0)
                                    </li>
                                    <li class="d-flex justify-content-end pb-2 border-bottom px-3">
                                    @endif
                                    <span>{{ $value->value }}</span>                                    
                                @endforeach
                            @else
                                <span>-----</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>

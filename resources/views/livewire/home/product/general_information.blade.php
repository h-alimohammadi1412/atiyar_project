<div class="tab-pane fade show active" id="general" role="tabpanel">
    <div class="row">
        <!-- گالری محصولات-->
        <div class="col-lg-7 pe-lg-0">
            <div class="product-gallery">
                <div class="product-gallery-preview order-sm-2">
                    @foreach ($productGallerys as $key => $productGallery)
                        <div class="product-gallery-preview-item @if ($key == 0) active @endif"
                            id="image_galerry_product_{{ $productGallery->id }}"><img class="image-zoom"
                                src="{{ asset('files/uploads/products/gallerys/' . $productGallery->img) }}"
                                data-zoom="{{ asset('files/uploads/products/gallerys/' . $productGallery->img) }}"
                                alt="تصویر محصول">
                            <div class="image-zoom-pane"></div>
                        </div>
                    @endforeach
                </div>
                <div class="product-gallery-thumblist order-sm-1">
                    @foreach ($productGallerys as $key => $productGallery)
                        <a class="product-gallery-thumblist-item @if ($key == 0) active @endif"
                            href="#image_galerry_product_{{ $productGallery->id }}"><img
                                src="{{ asset('files/uploads/products/gallerys/' . $productGallery->img) }}"
                                alt="تصویر محصول"></a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Product details-->
        <div class="col-lg-5 pt-4 pt-lg-0">
            <div class="product-details ms-auto pb-3">
                <div class="h3 fw-normal text-accent mb-3 me-1">{{ $product->price }} <del
                        class="fs-5 text-border">{{ $product->discount_price }}</del></div>
                <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">رنگ:</span></div>
                <div class="position-relative me-n4 mb-3">
                    @foreach ($productSellers as $key => $productSeller)
                        <div class="form-check form-option form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="color"
                                id="color_{{ $productSeller->color->id }}" data-bs-label="colorOption"
                                value="{{ $productSeller->color->name }}"
                                @if ($key == 0) checked @endif>
                            <label class="form-option-label rounded-circle" for="color_{{ $productSeller->color->id }}"><span
                                    class="form-option-color rounded-circle"
                                    style="background-color: {{ $productSeller->color->value }};"></span></label>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex align-items-center pt-2 pb-4">
                    <select class="form-select me-3" style="width: 5rem;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <button class="btn btn-primary btn-shadow d-block w-100" type="button"><i
                            class="ci-cart fs-lg me-2"></i>اضافه کردن به سبدخرید</button>
                </div>
                <div class="d-flex mb-4">
                    <div class="w-100 me-3">
                        <button class="btn btn-secondary d-block w-100" type="button"><i
                                class="ci-heart fs-lg me-2"></i><span class='d-none d-sm-inline'>اضافه کردن </span>علاقه
                            مندی</button>
                    </div>
                    <div class="w-100">
                        <button class="btn btn-secondary d-block w-100" type="button"><i
                                class="ci-compare fs-lg me-2"></i>مقایسه</button>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <ul>
                        @foreach ($productAttributes as $productAttribute)
                            @if ($productAttribute->notShow == 1)
                                @foreach ($productAttribute->getChild as $productAttributeChild)
                                    @if ($productAttributeChild->notShow == 1)
                                        <li class="d-flex align-items-center pb-2">
                                            <i class="ci-check-circle text-success me-2"></i>
                                            <span class="text-muted"> {{ $productAttributeChild->title }} : </span>
                                            @foreach ($productAttributeChild->getValue as $value)
                                                <span class="ms-2">{{ $value->value }}</span>
                                            @endforeach
                                        </li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </div>
                {{-- <!-- Product panels-->
                <div class="accordion mb-4" id="productPanels">
                    <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button"
                                href="#shippingOptions" role="button" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="shippingOptions"><i
                                    class="ci-delivery text-muted lead align-middle mt-n1 me-2"></i>گزینه
                                های ارسال</a></h3>
                        <div class="accordion-collapse collapse show" id="shippingOptions"
                            data-bs-parent="#productPanels">
                            <div class="accordion-body fs-sm">
                                <div class="d-flex justify-content-between border-bottom pb-2">
                                    <div>
                                        <div class="fw-semibold text-dark">پیک</div>
                                        <div class="fs-sm text-muted">4-6 روز</div>
                                    </div>
                                    <div>16050</div>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <div>
                                        <div class="fw-semibold text-dark">پست حمل</div>
                                        <div class="fs-sm text-muted">4-6 روز</div>
                                    </div>
                                    <div>19000</div>
                                </div>
                                <div class="d-flex justify-content-between pt-2">
                                    <div>
                                        <div class="fw-semibold text-dark">پیک</div>
                                        <div class="fs-sm text-muted">&mdash;</div>
                                    </div>
                                    <div>000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header"><a class="accordion-button collapsed"
                                href="#localStore" role="button" data-bs-toggle="collapse"
                                aria-expanded="true" aria-controls="localStore"><i
                                    class="ci-location text-muted fs-lg align-middle mt-n1 me-2"></i>در
                                فروشگاه محلی پیدا کنید</a></h3>
                        <div class="accordion-collapse collapse" id="localStore"
                            data-bs-parent="#productPanels">
                            <div class="accordion-body">
                                <select class="form-select">
                                    <option value>انتخاب کشور</option>
                                    <option value="Argentina">آرژانتین</option>
                                    <option value="Belgium">بلژیک</option>
                                    <option value="France">فرانسه</option>
                                    <option value="Germany">آلمان</option>
                                    <option value="Spain">اسپانیا</option>
                                    <option value="UK">ایالات متحده</option>
                                    <option value="USA">آمریکا</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Sharing-->
                <label class="form-label d-inline-block align-middle my-2 me-3">اشتراک:</label><a
                    class="btn-share btn-twitter me-2 my-2" href="#"><i class="ci-twitter"></i>توییتر</a><a
                    class="btn-share btn-instagram me-2 my-2" href="#"><i
                        class="ci-instagram"></i>اینستاگرام</a><a class="btn-share btn-facebook my-2" href="#"><i
                        class="ci-facebook"></i>فیسبوک</a>
            </div>
        </div>
    </div>
</div>

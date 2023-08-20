<div class="page-title-overlap bg-accent pt-4">
    <div
        class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
        <div class="d-flex align-items-center pb-3">
            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="width: 6.375rem;"><img
                    class="rounded-circle"
                    src="@if(is_null($seller->store->logo)) {{ asset('img/icon-company1.jpg') }}  @else /storage/{{ $seller->store->logo }} @endif"
                    alt="گروه ستین"></div>
            <div class="ps-3">
                <h3 class="text-light fs-lg mb-0">@if(is_null($seller->company_name)) هنوز نامی انتخاب نشده است @else {{
                    $seller->company_name }} @endif</h3><span class="d-block text-light fs-ms opacity-60 py-1">عضویت از
                    {{ jdate($seller->created_at)->format('%B %Y') }}</span>
            </div>
        </div>
        <div class="d-flex">
            <div class="text-sm-end me-5">
                <div class="text-light fs-base">جمع فروش</div>
                <h3 class="text-light">0</h3>
            </div>
            <div class="text-sm-end">
                <div class="text-light fs-base">امتیاز فروشنده</div>
                <div class="star-rating">
                    {{-- <i class="star-rating-icon ci-star-filled active"></i> --}}
                    <i class="star-rating-icon ci-star"></i>
                    <i class="star-rating-icon ci-star"></i>
                    <i class="star-rating-icon ci-star"></i>
                    <i class="star-rating-icon ci-star"></i>
                    <i class="star-rating-icon ci-star"></i>
                </div>
                <div class="text-light opacity-60 fs-xs">بر اساس 0 نظر</div>
            </div>
        </div>
    </div>
</div>
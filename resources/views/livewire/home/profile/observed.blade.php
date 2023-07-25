@extends('livewire.home.profile.profile_layout')
@section('title')
اطلاع رسانی ها-{{ auth()->user()->name }}
@endsection
@section('url_profile')
اطلاع رسانی ها
@endsection
@section('profile_content')
    <section class="col-lg-8">
        <!-- Toolbar-->
        <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
            <h6 class="fs-base text-light mb-0">مواردی که به لیست اطلاع رسانی ها اضافه کردید:</h6>
        </div>
        <!-- Wishlist-->
        @forelse($observeds as $observed)
             <div class="d-sm-flex justify-content-between mt-lg-4 mb-4 pb-3 pb-sm-2 border-bottom">
                    <div class="d-block d-sm-flex align-items-start text-center text-sm-start"><a
                            class="d-block flex-shrink-0 mx-auto me-sm-4" href="{{ url('/product/at-' . $observed->product->id . '/' . $observed->product->link) }}" style="width: 10rem;"><img
                                src="/storage/{{ $observed->product->img }}" alt="محصول"></a>
                        <div class="pt-2">
                            <h3 class="product-title fs-base mb-2"><a
                                    href="shop-single-v1.html">{{ $observed->product->title }}</a></h3>
                            <div class="fs-sm"><span class="text-muted me-2">برند :
                                </span>{{ $observed->product->brand->name }}</div>
                            <div class="fs-sm"><span class="text-muted me-2">دسته
                                    بندی:</span>{{ $observed->product->category->title }}</div>
                            <div class="fs-lg text-accent pt-2">@if($observed->product->price == 0 || $observed->product->price == null) ناموجود  @else {{ $observed->product->price }}   @endif</div>
                        </div>
                    </div>
                    <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                        <button class="btn btn-outline-danger btn-sm" wire:click="deleteFavorite({{ $observed->id }})"><i
                                class="ci-trash me-2"></i>حذف</button>
                    </div>
                </div>
        @empty
             <div class="alert alert-warning text-center">
                هیچ محصولی در لیست اطلاع رسانی های شما وجود ندارد.
            </div>
        @endforelse
        
    </section>
@endsection

<div>
    @if(session()->has('success'))
    <div>
        {{ session()->get('success') }}
    </div>
    @endif
    @include('livewire.home.home.home.slider1')
    @include('livewire.home.home.home.specials_slider')
    <div class="d-flex justify-content-around pt-5 px-5">
        <a style="background-color: #b3ecec" class="text-body align-items-center d-flex fs-5 justify-content-center me-3 py-3 rounded w-25">
            <i class="ci-sign-in fs-3 me-3"></i>
            <span>ثبت نام کن</span>
        </a>
        <a style="background-color: #b3ecec" class="text-body align-items-center d-flex fs-5 justify-content-center me-3 py-3 rounded w-25">
            <i class="ci-document fs-3 me-3 "></i>
            <span>آموزش ببین</span>
        </a>
        <a style="background-color: #ffd4aa" class="text-body align-items-center d-flex fs-5 justify-content-center me-3 py-3 rounded w-25">
            <i class="ci-user fs-3 me-3"></i>
            <span>فروشنده شو</span>
        </a>
        <a style="background-color: #aeadce" class="text-body align-items-center d-flex fs-5 justify-content-center me-3 py-3 rounded w-25">
            <i class="ci-user fs-3 me-3"></i>
            <span>کسب درآمد کن</span>
        </a>
    </div>
    {{-- @include('livewire.home.home.home.categories') --}}
    @include('livewire.home.home.home.Products_grid')
    @include('livewire.home.home.home.featured_category')
    @include('livewire.home.home.home.most_visited')

    @include('livewire.home.home.home.info_cards')

</div>
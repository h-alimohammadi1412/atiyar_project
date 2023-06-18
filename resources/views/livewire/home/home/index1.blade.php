<div>
    @if(session()->has('success'))
    <div>
        {{ session()->get('success') }}
    </div>
    @endif
    @include('livewire.home.home.home.slider1')
    @include('livewire.home.home.home.specials_slider')
    {{-- @include('livewire.home.home.home.categories') --}}
    @include('livewire.home.home.home.Products_grid')
    @include('livewire.home.home.home.featured_category')
    @include('livewire.home.home.home.most_visited')

    @include('livewire.home.home.home.info_cards')

</div>
@yield('topcss')
@if (Request::routeIs('home.index'))
    <title></title>
@else<title>
        @yield('title')| فروشگاه اینترنتی آتی یار</title>
@endif
@include('layouts.modules')
{!! SEO::generate() !!}
@include('layouts.home.css')
@include('layouts.home.js')
<livewire:styles />

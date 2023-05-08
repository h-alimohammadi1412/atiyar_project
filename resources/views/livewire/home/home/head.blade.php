<meta charset="utf-8">
@if (Request::routeIs('home.index'))
    <title></title>
@else
    <title>@yield('title')| فروشگاه اینترنتی آتی یار</title>
@endif
<!-- SEO Meta Tags-->
<meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
<meta name="keywords"
    content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
<meta name="author" content="گروه ستین">
<!-- Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon and Touch Icons-->
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
<link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<!-- Vendor Styles including: Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}" />
<link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}" />
<link rel="stylesheet" media="screen" href="{{ asset('vendor/drift-zoom/dist/drift-basic.min.css') }}" />
<!-- Main Theme Styles + Bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">
<!-- Google Tag Manager-->
<livewire:styles />

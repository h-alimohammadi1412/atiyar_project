<!DOCTYPE html>
<html class="" style="" dir="rtl">
@include('layouts.marketer.head')
<body class=" c-modal-map__body" style="" data-select2-id="20">
@include('sweet::alert')
@include('layouts.marketer.header')

{{$slot}}

@include('layouts.marketer.footer')
<livewire:scripts />
@yield('script')
</body>

</html>

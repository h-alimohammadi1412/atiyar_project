<!DOCTYPE html>
<html class="" style="" dir="rtl">
@include('layouts.seller.head')
<body class=" c-modal-map__body" style="" data-select2-id="20">
    @include('sweet::alert')


{{$slot}}

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
<x-livewire-alert::flash />

<livewire:scripts />
</body>


</html>

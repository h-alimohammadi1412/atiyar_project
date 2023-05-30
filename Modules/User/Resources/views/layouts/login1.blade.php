<!DOCTYPE html>
<html lang="fa">
<head>
    @include('livewire.home.home.head')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <link rel="stylesheet" href="{{asset('digikala/css/8ba74341.css')}}"> --}}
</head>
<body class=" is-access-page account-pages" style="">
@include('sweet::alert')
{{$slot}}
@include('livewire.home.home.script1')
    
</body>

</html>

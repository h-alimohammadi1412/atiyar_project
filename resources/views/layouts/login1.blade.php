<!DOCTYPE html>
<html lang="fa">
<head>
    @include('livewire.home.home.head')

    {{-- <link rel="stylesheet" href="{{asset('digikala/css/8ba74341.css')}}"> --}}
</head>
<body class=" is-access-page account-pages" style="">
@include('sweet::alert')
{{$slot}}
@include('livewire.home.home.script1')
</body>

</html>

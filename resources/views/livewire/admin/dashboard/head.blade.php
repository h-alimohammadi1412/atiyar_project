
    <meta charset="UTF-8">
    <meta name="turbolinks-cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>آتی یار | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive_991.css')}}" media="(max-width:991px)">
    <link rel="stylesheet" href="{{asset('css/responsive_768.css')}}" media="(max-width:768px)">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    {{-- <link href="{{asset('js/jquery.select2.js')}}" rel="stylesheet" /> --}}
    <link href="{{asset('css/dropzone.css')}}" rel="stylesheet">
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/select2-bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">


    <link rel="stylesheet" href="{{asset('css/style.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/bootstrap-iconpicker.min.css')}}">--}}
   <script>

  </script>

    <livewire:styles />

    <style>
        .breadcrumb {
            display: block;
        }
        .form-group
        {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .dropdown-select
        {
            display: none;
        }
        .item-restore::before {
            content: "\E0e5";
            font-size: 16px;
        }
        .table td {
            white-space: nowrap;
            color: #444;
            padding: 13px 5px;
            font-size: 13px;
        }
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
    </style>

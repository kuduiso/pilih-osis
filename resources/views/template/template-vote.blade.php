<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>E-Voting | @yield('title')</title>
        @section('assets-head')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.min.css') }}">
        <link rel="icon" href="{{ asset('favicon.png')  }}" sizes="48x48" type="image/png">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/alpine.min.js') }}" defer></script>
        <script src="{{ asset('js/sweetalert2.all.min.js') }}" defer></script>
        @show
    </head>
</html>
<body class="bg-pattern-b">
    <div class="container mx-auto">
        @yield('main-content')
    </div>

    {{-- JAVASCRIPT --}}
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    @yield('javascript')
</body>

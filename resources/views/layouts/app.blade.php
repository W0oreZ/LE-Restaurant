<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LE-Restaurant</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('Styles')


</head>
<body>
    @include('_includes/nav.main')

    <div id="app">
        @yield('content')
    </div>

    <!--Scripts-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('Scripts')
</body>
</html>

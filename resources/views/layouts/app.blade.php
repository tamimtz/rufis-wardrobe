<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

        <script src="{{ asset('js/jquery-3.7.0.min.js') }}" ></script>

        @include('layouts.nav')
        <br>
        
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<footer>
    
    <div class="row">
        <div class="footer-align pt-5"></div>
        <div class="footer-align col-md-4">Cosmetics</div>
        <div class="footer-align col-md-4">Dress</div>
        <div class="footer-align col-md-4">Home Decoration</div>
    </div>

    <div class="row">
        <div class="footer-align col-md-12 pt-5 pb-5">
            RufisWardrobe|2023
        </div>
        
    </div>

    
</footer>
</html>

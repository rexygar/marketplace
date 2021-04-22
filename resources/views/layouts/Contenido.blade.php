<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/img/logo_icon.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TecnoBuy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hero-backgrounds.css') }}" rel="stylesheet">

    <link href="{{ asset('css/Megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body>
    <div class=" w-full py-auto relative" style="z-index: 99999">

        @include('componentes.brandHeader')
        @include('componentes.Header')
        {{-- @include('componentes.nav-mobile') --}}
        {{-- @include('componentes.Header') --}}
    </div>
    {{-- Contenido --}}
    <main class="">
        @yield('content')
    </main>
    {{-- Contenido --}}





    {{-- footer --}}
    @include('layouts.Footer')
    {{-- footer --}}
</body>

</html>

<!-- /HEADER -->
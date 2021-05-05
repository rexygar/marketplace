<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace Quillota</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/diseño.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/hero-backgrounds.css') }}" rel="stylesheet"> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster+Two&family=Poppins:wght@300&family=Varela+Round&display=swap');
    </style>
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/lozad.min.js') }}"></script>
    <style>
        body {
            font-family: 'Nunito';
        }


        @font-face {
            font-family: 'Lobster Two';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url('/public/fonts/LobsterTwo-Regular.ttf') format('ttf');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;


        }

        @media screen and (min-width: 0px) and (max-width: 650px) {
            .esconder {
                display: none !important;
            }

            /* show it on small screens */
        }

        @media screen and (min-width: 1024px) {
            .no_mostrar_xl {
                display: none !important;
            }

            /* show it on small screens */
        }

        .lobster {

            font-family: 'Lobster Two',
                cursive !important;
        }

        .poppins {
            font-family: 'Poppins',
                sans-serif;

        }

        .valera {
            font-family: 'Varela Round',
                sans-serif;
        }
    </style>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v10.0" nonce="zhrKYBKV"></script>
    <div class=" w-full py-auto relative" style="z-index: 99999">

        @include('componentes.brandHeader')
        @include('componentes.Header')
        {{-- @include('componentes.nav-mobile') --}}
        {{-- @include('componentes.Header') --}}
    </div>
    {{-- Contenido --}}
    <main class="bg-cover bg-center" style="background-image:url('{{ url('/img/FONDO.jpg') }}')">
        @yield('content')
    </main>
    {{-- Contenido --}}





    {{-- footer --}}
    @include('layouts.Footer')
    {{-- footer --}}
</body>
 


<!-- /HEADER -->
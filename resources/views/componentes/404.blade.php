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
  {{-- <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('css/diseño.css') }}" rel="stylesheet">
  <link href="{{ asset('css/Style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/componentes.css') }}" rel="stylesheet">
  <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
  <link href="{{ asset('css/hero-backgrounds.css') }}" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster+Two&family=Poppins:wght@300&family=Varela+Round&display=swap');
  </style>
  <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
  <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
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

<body class="leading-normal tracking-normal antialiased ">
  <main class="h-full flex items-center px-6 py-60 lg:px-32   relative" style="background-color: #44b0e8">
    <header class="w-full absolute left-0 top-0 p-6 lg:p-32">
      <div class="flex justify-between">
        <div>
          <div class="col-span-12">
            <a class="navbar-brand lg:w-1/3 lg:mx-auto md:w-5/6" href=" {{ __('/') }}">
              <H1 class="sm:text-2xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-4xl lobster font-bold"
                style="color: darkmagenta">MARKETPLACE</H1>
            </a>
          </div>

        </div>
      </div>
    </header>
    <section class="w-full md:w-10/12 py-8 xl:w-10/12  bg-indigo-500">
      <div></div>
      <h1 class="text-3xl lg:text-8xl font-bold bg-indigo-500 ">
        Error 404 <br>Pagina no encontrada
      </h1>
      <a class="navbar-brand lg:w-1/3 lg:mx-auto md:w-5/6 bg-indigo-500" href=" {{ __('/') }}">
        <H1 class="sm:text-2xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-4xl lobster font-bold"
          style="color: darkblue">Volver al inicio</H1>
      </a>
    </section>

  </main>

</body>
{{-- @include('Layouts.footer') --}}

</html>

<!-- /HEADER -->
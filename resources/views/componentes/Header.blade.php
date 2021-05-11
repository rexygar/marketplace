<style>
    .bg-celeste {
        background-color: #409bca !important;
    }

    @media screen and (min-width: 0px) and (max-width: 650px) {
        .no_mostrar {
            display: none !important;
        }

        /* show it on small screens */
    }

    /* show it on small screens */
    }

    @media screen and (min-width: 0px) and (max-width: 769px) {
        .mostrar_xl {
            display: block !important;
        }

        /* show it on small screens */
    }

    @media screen and (min-width: 360px) and (max-width: 769px) {
        .mostrar {
            display: block !important;
        }

        /* show it on small screens */
    }

    @media screen and (min-width: 0px) and (max-width: 769px) {
        .no_mostrar_xl {
            display: none !important;
        }

        /* show it on small screens */
    }

    @media screen and (min-width: 770px) {
        .mostrar_x2 {
            display: block !important;
        }

        /* show it on small screens */
    }

    @media screen and (min-width: 0px) and (max-width: 769px) {
        .esconder {
            display: none !important;
        }

        /* show it on small screens */
    }
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<div class="esconder sm:hidden 
md:hidden  lg:block" x-data="{ searchy : true}">
    <nav class="font-sans grid  grid-cols-12 text-justify content-center sm:flex-row sm:text-left sm:justify-between py-2  sm:items-baseline w-full"
        :class="{' bg-transparent': searchy, 'bg-celeste': !searchy}">
        <div class="grid grid-cols-12  col-span-12 md:grid-cols-12 lg:py-2">
            <div class="col-span-3 sm:col-span-3 md:col-span-3 lg:col-span-3 xl:col-span-3 2xl:col-span-3">
                <div class="col-span-12">
                    <a class="navbar-brand lg:w-2/3 lg:mx-auto md:w-5/6" href=" {{ __('/') }}">
                        <img class="branding__logo img-fluid" src=" {{asset('/img/IMPULSALOGO-w.png')}}"
                            max-width="95px" alt="">
                    </a>
                </div>
            </div>
            <div class="md:col-span-9 lg:col-span-9 sm:col-span-9 xl:col-span-9 2xl:col-span-9 grid grid-cols-12  ">

                <div class="col-span-12 grid grid-cols-12  ">


                    <div class="col-span-12  grid grid-cols-12 gap-4">

                        <div class="col-span-4 xl:col-start-2">

                            <form class="bg-white flex items-center rounded-full shadow-xl h-2/3 py-4"
                                action="{{ __('Search') }}" method="GET">


                                <input id="searchfield" type="search" name="search"
                                    class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none"
                                    placeholder="Buscar">

                                <div class="p-4">
                                    <button
                                        class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>

                            </form>


                        </div>
                        <div class="col-span-8  xl:col-span-7 py-4">
                            <span
                                class="font-bold  col-span-1 text-blue-900 text-xl sm:text-base md:text-xl lg:text-xl xl:text-xl 2xl:text-2xl lg:px-2 xl:px-2 2xl:px-2"><a
                                    href="/">INICIO
                                </a></span>
                            <span
                                class="font-bold col-span-1 text-blue-900 text-xl sm:text-base md:text-xl lg:text-xl xl:text-xl 2xl:text-2xl lg:px-2 xl:px-2 2xl:px-2"><a
                                    href="/About">QUIÉNES
                                    SOMOS</a></span>
                            <span
                                class="font-bold col-span-1 text-blue-900 text-xl sm:text-base md:text-xl lg:text-xl xl:text-xl 2xl:text-2xl lg:px-2 xl:px-2 2xl:px-2"><a
                                    href="/Categorias">PRODUCTOS
                                </a></span>
                            <span
                                class="font-bold col-span-1 text-blue-900 text-xl sm:text-base md:text-xl lg:text-xl xl:text-xl 2xl:text-2xl lg:px-2 xl:px-2 2xl:px-2"><a
                                    href="/Blog">BLOG</a></span>
                        </div>

                    </div>


                </div>

            </div>
        </div>

    </nav>
</div>
{{-- <div class="relative px-24 bg-white shadow-xl block" :class="{' hidden': searchy, 'block': !searchy}"
        id="search-content">
        <div class="container mx-auto py-4 text-black">
            <form action="{{ __('Search') }}" method="GET">

<input id="searchfield" type="search" name="search" placeholder="Search..." autofocus="autofocus"
    class="w-5/6 text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl">
<button type="button" @click="searchy =  !searchy"
    class="text-white dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
    aria-label="toggle menu">
    <i class="fas fa-times text-2xl"></i>
</button>
</form>
</div>
</div> --}}
</div>
{{-- menu movil --}}
<nav class="relative border-gray-300 text-gray-900 block lg:hidden" style="z-index: 999;background-color: #44b0e8"
    x-data="{ isNavbar : true}">
    <div class="container mx-auto  flex flex-wrap justify-between col-span-1 mx-auto block grid grid-cols-2">
        <div class="md:relative      text-xl text-white font-bold col-span-1">
            <div class="col-span-12 ">
                <a class="navbar-brand  p-4" href=" /">
                    <img class="branding__logo img-fluid  w-2/3 md:w-2/3" src=" http://127.0.0.1:8000/img/IMPULSALOGO-w.png"
                        max-width="95px" alt="">
                </a>
            </div>

        </div>
        <div @click="isNavbar = !isNavbar" :class="{' block': isNavbar, 'hidden': !isNavbar}"
            class="col-span-1 mx-auto block">
            <button type="button"
                class="text-white dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10  py-10 focus:text-gray-600 dark:focus:text-gray-400"
                aria-label="toggle menu">
                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                    <path fill-rule="evenodd"
                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                    </path>
                </svg>
            </button>
        </div>
        <div @click="isNavbar = !isNavbar" :class="{' hidden': isNavbar, 'block': !isNavbar}"
            class="col-span-1 mx-auto hidden">
            <button type="button"
                class="text-white dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10  py-10 focus:text-gray-600 dark:focus:text-gray-400"
                aria-label="toggle menu">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>

        <div class="col-span-2 grid-cols-6 w-full hidden" :class="{' hidden': isNavbar, 'grid': !isNavbar}">

            <div class="col-span-6 grid-cols-6 grid gap-3">

                <div class="col-span-12 px-4">
                    <form class="bg-white flex items-center rounded-full shadow-xl h-2/3 py-4 " action="Search"
                        method="GET">


                        <input id="searchfield" type="search" name="search"
                            class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none"
                            placeholder="Buscar">

                        <div class="p-4">
                            <button
                                class="bg-blue-500 text-white rounded-full p-2 hover:bg-blue-400 focus:outline-none w-12 h-12 flex items-center justify-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>

                    </form>
                </div>


            </div>
        </div>

        <div :class="{' hidden': isNavbar, 'block': !isNavbar}"
            class="grid grid-cols-1 col-span-2 auto-cols-auto md:relative py-4 px-4 text-xl text-white font-bold hidden">
            <div class="col-span-12 py-4 grid grid-cols-2  auto-cols-auto gap-2 text-center">
                <span
                    class="font-bold  col-span-1 text-blue-900 text-xl sm:text-base md:text-xl lg:text-xl xl:text-xl 2xl:text-2xl lg:px-2 xl:px-2 2xl:px-2"><a
                        href="/">INICIO
                    </a></span>
                <span
                    class="font-bold col-span-1 text-blue-900 text-xl sm:text-base md:text-xl lg:text-xl xl:text-xl 2xl:text-2xl lg:px-2 xl:px-2 2xl:px-2"><a
                        href="/About">QUIÉNES
                        SOMOS</a></span>
                <span
                    class="font-bold col-span-1 text-blue-900 text-xl sm:text-base md:text-xl lg:text-xl xl:text-xl 2xl:text-2xl lg:px-2 xl:px-2 2xl:px-2"><a
                        href="/Categorias">PRODUCTOS
                    </a></span>
                <span
                    class="font-bold col-span-1 text-blue-900 text-xl sm:text-base md:text-xl lg:text-xl xl:text-xl 2xl:text-2xl lg:px-2 xl:px-2 2xl:px-2"><a
                        href="/Blog">BLOG</a></span>
            </div>

        </div>

    </div>
</nav>
<script src="{{ asset('js/alpine.js') }} "></script>
{{-- end menu movil --}}
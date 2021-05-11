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
<div class="no_mostrar_xl mostrar_x2" x-data="{ searchy : true}">
    <nav class="font-sans grid  grid-cols-12 text-justify content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 sm:items-baseline w-full"
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
            <div class="md:col-span-9 lg:col-span-9 sm:col-span-9 xl:col-span-9 2xl:col-span-9 grid grid-cols-12">

                <div class="col-span-12 grid grid-cols-12  ">


                    <div class="col-span-12  grid grid-cols-12">

                        <div class="col-span-4">

                            <form class="bg-white flex items-center rounded-full shadow-xl" action="{{ __('Search') }}"
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
                        <div class="col-span-8 py-4">
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
    class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
    aria-label="toggle menu">
    <i class="fas fa-times text-2xl"></i>
</button>
</form>
</div>
</div> --}}
</div>

<div class="mostrar_xl " x-data="{ searchy : true}">
    <nav style="background-color: #44b0e8"
        class="font-sans grid grid-cols-12 text-justify content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-black shadow sm:items-baseline w-full">
        <div class="grid col-span-12  grid-cols-12 lg:py-2 ">
            <div class="col-span-2 -mr-10">
                <a class="navbar-brand lg:w-1/3 lg:mx-auto md:w-5/6" href=" {{ __('/') }}">
                    <H1 class="text-xl lobster font-bold" style="color: darkmagenta">MARKETPLACE</H1>
                </a>
            </div>

            <div class="col-span-6 grid px-3 col-start-6 grid-cols-12">
                <div class="col-span-6  col-start-4 md:-ml-10 block md:hidden">
                    <div class="  p-4 lg:p-6 col-span-1 mx-auto">
                        <button type="button" @click="searchy = !searchy"
                            class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
                            aria-label="toggle menu">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </nav>
    <div class="relative w-full bg-white shadow-xl  md:hidden" :class="{' hidden': searchy, 'block': !searchy}"
        id="search-content">
        <div class="container mx-auto py-4 text-black">
            <form action="{{ __('Search') }}" method="GET">

                <input id="searchfield" type="search" name="search" placeholder="Search..." autofocus="autofocus"
                    class="w-full text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl">

            </form>
        </div>

    </div>
</div>
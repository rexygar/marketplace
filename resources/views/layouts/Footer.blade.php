<style>
  ::placeholder {
    color: darkgray;
    font-size: 1em;
    padding-left: 3px;
  }

  @media screen and (min-width: 0px) and (max-width:769px) {
    .no_mostrar {
      display: none !important;
    }

    /* show it on small screens */
  }
</style>
<footer class="w-full col-span-12 no_mostrar  pt-16 lg:pt-16 md:pt-32 xl:pt-16 2xl:pt-16 pb-36 md:pb-48  sm:block hidden   animate__fadeInUp animate__animated wow"
  style="background-image:url('{{ url('/img/FOOT.png') }}');background-repeat: no-repeat;background-size: cover;">

  <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
    style="height: 80px; transform: translateZ(0px);">
    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
      version="1.1" viewBox="0 0 2560 100" x="0" y="0">
      <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>

  <!-- <footer> -->

  <div class="grid grid-cols-12 px-16 md:px-6 lg:px-24 xl:px-24 2xl:px-24">



    <div class="col-span-3 lg:col-span-3 md:col-span-4 xl:col-span-3 2xl:col-span-3 grid grid-cols-12 ">
      <div class="col-span-12  ">
        <div
          class="h-auto  rounded-t-2xl mx-2 text-left bg-white   shadow-xl lg:w-3/12 xl:w-3/12 2xl:w-3/12  md:w-4/12 absolute md:p-0 lg:p-0 md:mx-0 md:pr-0   lg:mx-0 w-full   md:-mt-36 xl:-mt-36 2xl:-mt-36 lg:-mt-36"
          @click.away="Despacho = false" style="z-index: 99999999;">
          <!-- Success alert -->
          <div style="background-color: #fba70b" class="flex p-4  text-center rounded-t-2xl">

            <div class="text-center w-full">
              <div class="text-black text-center">
                <h2 class=" font-bold md:text-2xl text-center  text-white">
                  ESCRIBENOS
                </h2>
              </div>

            </div>
          </div>
          {{-- modal body --}}
          <div class="mt-3 text-justify px-4 rounded-b-lg">
            <article style="" class=" col-start-1 col-end-3">
              <label class="py-2">
                <!--Card 1-->
                <div class=" w-full  lg:flex">

                  <div class=" rounded-b lg:rounded-b-none  w-full lg:rounded-r p-4 leading-normal">
                    <div class="mb-8">
                      <div class="py-2">

                        <input type="text" placeholder=" Nombre completo"
                          class="text-sm pl-4 w-full inline-block  text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                          style="background-color: #f9f9f9">
                      </div>
                      <div class="py-2">
                        <input type="email" placeholder=" Email"
                          class="text-sm pl-4 w-full inline-block  text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                          style="background-color: #f9f9f9">
                      </div>
                      <div class="py-2">
                        <input type="text" placeholder=" Url de tu sitio web"
                          class="text-sm pl-4 w-full inline-block  text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                          style="background-color: #f9f9f9">
                      </div>
                      <div class="py-2">
                        <input type="text" placeholder=" Nombre de la Empresa"
                          class="text-sm pl-4 w-full inline-block  text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                          style="background-color: #f9f9f9">


                      </div>
                      {{-- <input type="hidden"
                                    id="urlGuardar"
                                    value="{{ route('comuna') }}">
                      --}}

                      <div class="text-2xl col-span-12 ">

                        <span class="flex w-full  shadow-sm py-3">
                          <button @click="Despacho = false" style="background-color: #fba70b"
                            class="inline-flex justify-center text-justify text-base rounded-3xl font-boldpx-6 py-3 text-white  w-full hover:bg-black">
                            OBTENGA SU INFORME!
                          </button>
                        </span>

                        <span class=" w-full text-base  py-3 text-justify">Nos pondremos en contacto contigo en un plazo
                          de 24
                          horas.</span>
                      </div>
                    </div>

                  </div>
                </div>
              </label>
            </article>
          </div> 
        </div>
      </div>
    </div>
    <div
      class="col-span-9 lg:col-span-9 md:col-span-8 xl:col-span-9 2xl:col-span-9 grid grid-cols-3  md:grid-flow-row row-span-2">
      <div></div>
      <div class="col-span-2 lg:col-span-2 xl:col-span-2  2xl:col-span-2  md:col-span-2 md:col-start-2 rounded-3xl">
        <img class="rounded-3xl w-8/12" src="{{ asset('img/map.png') }}" alt="">
      </div>
      <div class="col-span-3  md:col-span-3 lg:col-span-3 xl:col-span-3 2xl:col-span-3 md:col-start-2">
        <div class="col-span-12 ">
          <a class="navbar-brand lg:w-1/3 lg:mx-auto md:w-5/6 py-5" href=" {{ __('/') }}">
            <H1 class="text-4xl lobster font-bold" style="color: darkmagenta">MARKETPLACE</H1>
          </a>
        </div>
      </div>


    </div>
 
  </div>



  <!-- </footer> -->

</footer>
<script src="{{ asset('js/wow.min.js') }} "></script>
<script src="{{ asset('js/alpine.js') }} "></script>
<script>
  new WOW().init();
</script>

@include('layouts.Footer-mobile')
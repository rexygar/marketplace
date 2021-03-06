<style>
  ::placeholder {
    color: darkgray;
    font-size: 1em;
    padding-left: 3px;


  }


  @media screen and (min-width: 0px) and (max-width: 769px) {
    .mostrar {
      display: block !important;
    }

    /* show it on small screens */
  }
</style>
<footer class="w-full col-span-12 mostrar  pt-16 lg:pt-16 md:pt-16 xl:pt-16 2xl:pt-16 pb-6 block sm:hidden"
  style="background-image:url('{{ url('/img/FOOT.png') }}');background-repeat: no-repeat;background-size: cover;">

  <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
    style="height: 80px; transform: translateZ(0px);">
    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
      version="1.1" viewBox="0 0 2560 100" x="0" y="0">
      <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>

  <!-- <footer> -->

  <div class="grid grid-cols-12 px-6">



    <div class="col-span-12 grid grid-cols-12 bg-white">
      <div class="col-span-12  ">
        <article style=" " class="panel is-primary  ">
          <div class=" " style=" ">
            <ul class=" " x-data="{selected:null}">
              <li class=" text-center">
                <div style="background-color: #fba70b" @click="selected !== 0 ? selected = 0 : selected = null"
                  class="flex p-4  text-center">

                  <div class="text-center w-full">
                    <div class="text-black text-center">
                      <h2 class=" font-bold md:text-2xl text-center text-white">
                        ESCRIBENOS
                      </h2>
                    </div>

                  </div>
                </div>


                <div x-show="selected == 0" class="border py-4 px-2 overflow-y-auto h-72">




                  <!-- Success alert -->

                  {{-- modal body --}}
                  <div class="mt-3 text-justify px-4 rounded-b-lg">
                    <article style="" class=" col-start-1 col-end-3">
                      <label class="py-2">
                        <!--Card 1-->
                        <div class=" w-full  lg:flex">

                          <div class=" rounded-b lg:rounded-b-none  w-full lg:rounded-r p-4 leading-normal">
                            <div class="mb-8">
                              <div class="py-2">
                                <input type="hidden" id="url" value="{{ route('contacto') }}">
                                <input type="text" id="nombre_mble" placeholder=" Nombre completo"
                                  class="text-sm pl-4 w-full inline-block text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none py-3"
                                  style="background-color: #f9f9f9">
                              </div>
                              <div class="py-2">
                                <input type="email" id="correo_mble" placeholder=" Email"
                                  class="text-sm pl-4 w-full inline-block text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none py-3"
                                  style="background-color: #f9f9f9">
                              </div>
                              <div class="py-2">
                                <input type="text" id="urlSitio_mble" placeholder=" Url de tu sitio web"
                                  class="text-sm pl-4 w-full inline-block text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none py-3"
                                  style="background-color: #f9f9f9">
                              </div>
                              <div class="py-2">
                                <input type="text" id="nombreEmp_mble" placeholder=" Nombre de la Empresa"
                                  class="text-sm pl-4 w-full inline-block text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none py-3"
                                  style="background-color: #f9f9f9">


                              </div>
                              {{-- <input type="hidden"
                                            id="urlGuardar"
                                            value="{{ route('comuna') }}">
                              --}}

                              <div class="text-2xl col-span-12 ">

                                <span class="flex w-full  shadow-sm py-3">
                                  <button id="enviar_mble" style="background-color: #fba70b"
                                    class="inline-flex justify-center text-base rounded-3xl font-boldpx-6 py-3 text-white text-justify  w-full hover:bg-black">
                                    OBTENGA SU INFORME!
                                  </button>
                                </span>

                                <span class=" w-full text-base text-justify py-3">Nos pondremos en contacto contigo en
                                  un plazo de
                                  24
                                  horas.</span>
                              </div>
                            </div>

                          </div>
                        </div>
                      </label>
                    </article>
                  </div>



                </div>
              </li>

            </ul>
          </div>


        </article>
      </div>
    </div>
    {{--  --}}
    {{-- 
    <div class="col-span-12 grid grid-cols-12  md:grid-flow-row row-span-2">
      <div class="col-span-12 grid grid-cols-3  px-2 ">
        <div class="col-span-1 pl-6">
          <figure class="image is-128x128 ">
            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
          </figure>
        </div>
        <div class="col-span-3">
          <article class="media">

            <div class="media-content">
              <div class="content">
                <p class="text-white text-xl">
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque
                  tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                  <br>
                  <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                </p>
              </div>
              <nav class="level is-mobile pl-6">
                <div class="level-left">
                  <a class="level-item">
                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                  </a>
                  <a class="level-item">
                    <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                  </a>
                  <a class="level-item">
                    <span class="icon is-small"><i class="fas fa-heart"></i></span>
                  </a>
                </div>
              </nav>
            </div>
            <div class="media-right">
              <button class="delete"></button>
            </div>
          </article>
        </div>
      </div>
    </div> --}}

    {{--  --}}
    <div class="col-span-12 grid gap-4 grid-cols-12 py-4">

      <div></div>
      <div class="col-span-12 text-center  grid grid-cols-12">
        <h2 class="font-black col-span-12 text-xl">MARKETPLACE QUILLOTA</h2>
        <div class="col-span-1 col-start-6   grid grid-cols-12">


          <div class=" w-full">
            <div style="background-color: transparent" class="h-2 flex-auto"></div>
          </div>
          <div class=" w-full">
            <div style="background-color: transparent" class="h-2 flex-auto"></div>
          </div>
          <div class=" w-full">
            <div style="background-color: transparent" class="h-2 flex-auto"></div>
          </div>
          <div class=" w-full">
            <div style="background-color: transparent" class="h-2 flex-auto"></div>
          </div>
          <div class=" w-full">
            <div style="background-color: transparent" class="h-2 flex-auto"></div>
          </div>
          <div class=" w-full">
            <div style="background-color: transparent" class="h-2 flex-auto"></div>
          </div>
          <div class=" w-full">
            <div style="background-color: transparent" class="h-2 flex-auto"></div>
          </div>
          <div class=" w-full">
            <div style="background-color: #4b82db" class="h-2 flex-auto"></div>
          </div>
          <div class=" w-full">
            <div style="background-color: #4b82db" class="h-2 flex-auto"></div>
          </div>
          <div class=" w-full">
            <div style="background-color: #4b82db" class="h-2 flex-auto"></div>
          </div>
          <div class=" w-full">
            <div style="background-color: #4b82db" class="h-2 flex-auto"></div>
          </div>
          <div class=" w-full">
            <div style="background-color: #4b82db" class="h-2 flex-auto"></div>
          </div>

        </div>
        <div class="col-span-1 col-start-7  grid grid-cols-12">

          <div class="flex-1">
            <div style="background-color: #4b82db" class="h-2  flex-1 "></div>
          </div>
          <div class="flex-1">
            <div style="background-color: #4b82db" class="h-2  flex-1 "></div>
          </div>
          <div class="flex-1">
            <div style="background-color: transparent" class="h-2  flex-1 "></div>
          </div>
          <div class="flex-1">
            <div style="background-color: transparent" class="h-2  flex-1 "></div>
          </div>
          <div class="flex-1">
            <div style="background-color: transparent" class="h-2  flex-1 "></div>
          </div>
          <div class="flex-1">
            <div style="background-color: transparent" class="h-2  flex-1 "></div>
          </div>
          <div class="flex-1">
            <div style="background-color: #183f9b" class="h-2  flex-1 "></div>
          </div>

          <div class="flex-1">
            <div style="background-color: #183f9b" class="h-2  flex-1 "></div>
          </div>
          <div class="flex-1">
            <div style="background-color: transparent" class="h-2  flex-1 "></div>
          </div>

          <div class="flex-1">
            <div style="background-color: #183f9b" class="h-2  flex-1 "></div>
          </div>


        </div>

      </div>
      <div class="col-span-12 text-justify">
        <p class="py-3 px-6 font-black text-base text-gray-700  w-full  "> Impulsa tu Negocio es un programa de
          capacitaci??n destinado a potenciar 45 emprendimientos que nace a ra??z de la iniciativa de la Municipalidad de
          Quillota, en conjunto con la empresa Colb??n, Fundaci??n BanAmor, Fundaci??n La Semilla y Marca Consciente.
          Conoce los productos y servicios que los emprendedores de Quillota tienen para ti.</p>
      </div>
      <div></div>


    </div>

    <hr class="my-6 border-gray-400 col-span-12 mx-auto" />
    <div class="grid grid-cols-6 col-span-12 mx-auto">
      <div class="col-span-12 ">
        <a class="navbar-brand lg:w-1/3 lg:mx-auto md:w-5/6 py-5" href=" /">
          <img class="branding__logo img-fluid" src=" http://127.0.0.1:8000/img/IMPULSALOGO-w.png" max-width="95px" alt="">
        </a>
      </div>
    </div>
  </div>



  <!-- </footer> -->

</footer>
<script src="{{ asset('js/toastr/toastr.js') }}"></script>
<script src="{{ asset('js/alpine.js') }} "></script>
<script src="{{ asset('js/lozad.min.js') }}"></script>
<script defer src="{{ asset('js/contacto.js') }}"></script>
<script defer src="{{ asset('js/contacto_mobile.js') }}"></script>
<script>
  const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();
</script>

</html>
<script src="{{ asset('js/wow.min.js') }} "></script>
<script>
  new WOW().init();
</script>
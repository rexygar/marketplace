<style>
  ::placeholder {
    color: darkgray;
    font-size: 1em;
    padding-left: 3px;
  }
</style>
<footer class="relative bk-rndm   pt-16 lg:pt-16 md:pt-16 xl:pt-16 2xl:pt-16 pb-6 ">

  <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
    style="height: 80px; transform: translateZ(0px);">
    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
      version="1.1" viewBox="0 0 2560 100" x="0" y="0">
      <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>

  <!-- <footer> -->

  <div class="grid grid-cols-12 px-16">



    <div class="col-span-3 grid grid-cols-12 ">
      <div class="col-span-12  ">
        <div
          class="h-auto  rounded-t-2xl mx-2 text-left bg-white   shadow-xl md:w-3/12 absolute md:p-0 lg:p-0 md:mx-0 md:pr-0   lg:mx-0 w-full   md:-mt-36 xl:-mt-36 2xl:-mt-36 lg:-mt-36"
          @click.away="Despacho = false" style="z-index: 99999999;">
          <!-- Success alert -->
          <div style="background-color: #fba70b" class="flex p-4  text-center rounded-t-2xl">

            <div class="text-center w-full">
              <div class="text-black text-center">
                <h2 class=" font-bold md:text-2xl text-center text-white">
                  ESCRIBENOS
                </h2>
              </div>

            </div>
          </div>
          {{-- modal body --}}
          <div class="mt-3 text-center px-4 ">
            <article style="" class=" col-start-1 col-end-3">
              <label class="py-2">
                <!--Card 1-->
                <div class=" w-full  lg:flex">

                  <div class=" rounded-b lg:rounded-b-none  w-full lg:rounded-r p-4 leading-normal">
                    <div class="mb-8">
                      <div class="py-2">

                        <input type="text" placeholder=" Nombre completo"
                          class="text-sm pl-4 w-full inline-block align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                          style="background-color: #f9f9f9">
                      </div>
                      <div class="py-2">
                        <input type="email" placeholder=" Email"
                          class="text-sm pl-4 w-full inline-block align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                          style="background-color: #f9f9f9">
                      </div>
                      <div class="py-2">
                        <input type="text" placeholder=" Url de tu sitio web"
                          class="text-sm pl-4 w-full inline-block align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                          style="background-color: #f9f9f9">
                      </div>
                      <div class="py-2">
                        <input type="text" placeholder=" Nombre de la Empresa"
                          class="text-sm pl-4 w-full inline-block align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                          style="background-color: #f9f9f9">


                      </div>
                      {{-- <input type="hidden"
                                    id="urlGuardar"
                                    value="{{ route('comuna') }}">
                      --}}

                      <div class="text-2xl col-span-12 ">

                        <span class="flex w-full  shadow-sm py-3">
                          <button @click="Despacho = false" style="background-color: #fba70b"
                            class="inline-flex justify-center text-base rounded-3xl font-boldpx-6 py-3 text-white  w-full hover:bg-black">
                            OBTENGA SU INFORME!
                          </button>
                        </span>

                        <span class=" w-full text-base  py-3">Nos pondremos en contacto contigo en un plazo de 24
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
    <div class="col-span-9 grid grid-cols-12  md:grid-flow-row row-span-2">
      <div class="col-span-6 grid grid-cols-3  px-2 ">
        <div class="col-span-1 pl-16">
          <figure class="image is-128x128 ">
            <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
          </figure>
        </div>
        <div class="col-span-3">
          <article class="media">

            <div class="media-content">
              <div class="content">
                <p class="text-white text-xl pl-16">
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque
                  tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                  <br>
                  <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                </p>
              </div>
              <nav class="level is-mobile pl-16">
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
      <div class="col-span-6 rounded-3xl">
        <img class="rounded-3xl" src="{{ asset('img/map.PNG') }}" alt="">
      </div>



    </div>

    <hr class="my-6 border-gray-400 col-span-12 mx-auto" />
    <div class="flex flex-wrap items-center md:justify-between  ">
      <div class="w-full md:w-4/12 px-4 mx-auto text-center">
        <div class="text-sm text-gray-600 font-semibold py-1">
          {{-- <a href="https://www.Tecnobuy.cl" class="text-gray-600 hover:text-gray-900">https://www.Tecnobuy.cl</a>. --}}
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
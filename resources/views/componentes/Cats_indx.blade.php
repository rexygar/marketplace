<style>
  input[type="radio"],
  input[type="checkbox"] {
    position: relative;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    outline: none;
  }

  .sombra-txt:hover {
    color: white;
    text-shadow: 2px 2px 2px black;
  }
  .sombra-txt {
    color: white;
     text-shadow: -4px 3px 0 black;
  }

  input[type="checkbox"]+span:before {
    width: 16px;
    height: 16px;
    border: 1px solid #000;
    content: "\2714";
    color: transparent;
    display: inline-block;
    font-size: 13px;
    margin-right: 5px;
    text-align: center;
    /* new code notice me! */
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }
</style>
<div
  class="col-span-12 grid grid-cols-12 h-full md:px-6 lg:px-16 xl:px-16 2xl:px-16 pt-6 pb-36 md:pt-6 md:pb-16 lg:pt-6 lg:pb-36 xl:pt-6 xl:pb-36 2xl:pt-6 2xl:pb-36 animate__fadeInLeft animate__animated wow ">

  <div class="col-span-12 grid gap-4 grid-cols-12 py-4 xs:px-6 sm:px-16 md:px-16 lg:px-16 2xl:px-16 xl:px-16">

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
      <p class="py-3 px-6 font-black text-base text-gray-700  w-full ">Impulsa tu Negocio es un programa de
        capacitación destinado a potenciar 45 emprendimientos que nace a raíz de la iniciativa de la Municipalidad de
        Quillota, en conjunto con la empresa Colbún, Fundación BanAmor, Fundación La Semilla y Marca Consciente.
        Conoce los productos y servicios que los emprendedores de Quillota tienen para ti.</p>
    </div>
    <div></div>


  </div>

  <div
    class="col-span-12 grid grid-cols-7  pt-16 lg:pt-16 sm:pt-10   md:pt-16 xl:pt-16 2xl:pt-16 pb-6  xs:px-6 sm:px-16 md:px-16 lg:px-24 2xl:px-36 xl:px-36 animate__fadeInUp animate__animated wow">
    <div class="col-span-7 grid grid-cols-2  gap-1 md:grid-cols-3  sm:gap-6 lg:gap-8 xl:gap-8 2xl:gap-8 md:gap-4">


      {{--  --}}
      <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

        <a href="{{ URL('/') }}/Categorias/1">
          <div class="content">

            <div class="w-full max-w-6xl rounded md:mb-0  ">
              <div class="relative panel-wrapper">
                <div
                  style="background-image:url('{{ asset('img/CATEGORIAS/TEXTIL-min.jpg') }}');background-repeat: no-repeat;background-size: cover;background-position: center;"
                  class="image is-1by1 rounded-3xl w-full hover:border-black    h-48 object-cover overflow-hidden">
                  <div
                    class="  h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-75 hover:opacity-95 rounded-3xl bg-blue-600 hover:bg-transparent hover:border-black   border-4 border-blue-600  ">
                    <p style="z-index: 99999999999999999;opacity: 100%;"
                      class="text-black sm:text-2xl text-center roboto  sombra-txt font-bold h-full  w-full text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl pt-24 md:pt-12 lg:pt-12 xl:pt-24 2xl:pt-24 uppercase">
                      textil</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>

      </div>

      {{--  --}}


      {{--  --}}
      <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

        <a href="{{ URL('/') }}/Categorias/5">
          <div class="content">

            <div class="w-full max-w-6xl rounded md:mb-0  ">
              <div class="relative panel-wrapper">
                <div
                  style="background-image:url('{{ asset('img/CATEGORIAS/GASTRONOMIA-min.jpg') }}');background-repeat: no-repeat;background-size: cover;background-position: center;"
                  class="image is-1by1 rounded-3xl w-full hover:border-black    h-48 object-cover overflow-hidden">
                  <div
                    class="  h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-75 hover:opacity-95 rounded-3xl bg-blue-600 hover:bg-transparent hover:border-black   border-4 border-blue-600  ">
                    <p style="z-index: 99999999999999999;opacity: 100%;"
                      class="text-black sm:text-2xl text-center roboto  sombra-txt font-bold h-full  w-full text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl pt-24 md:pt-12 lg:pt-12 xl:pt-24 2xl:pt-24 uppercase">
                      gastronomia</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>

      </div>

      {{--  --}}


      {{--  --}}
      <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

        <a href="{{ URL('/') }}/Categorias/4">
          <div class="content">

            <div class="w-full max-w-6xl rounded md:mb-0  ">
              <div class="relative panel-wrapper">
                <div
                  style="background-image:url('{{ asset('img/CATEGORIAS/DECORACION-min.jpg') }}');background-repeat: no-repeat;background-size: cover;background-position: center;"
                  class="image is-1by1 rounded-3xl w-full hover:border-black    h-48 object-cover overflow-hidden">
                  <div
                    class="  h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-75 hover:opacity-95 rounded-3xl bg-blue-600 hover:bg-transparent hover:border-black   border-4 border-blue-600  ">
                    <p style="z-index: 99999999999999999;opacity: 100%;"
                      class="text-black sm:text-2xl text-center roboto  sombra-txt font-bold h-full  w-full text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl pt-24 md:pt-12 lg:pt-12 xl:pt-24 2xl:pt-24 uppercase">
                      Casa y Decoración</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>

      </div>

      {{--  --}}


      {{--  --}}
      <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

        <a href="{{ URL('/') }}/Categorias/6">
          <div class="content">

            <div class="w-full max-w-6xl rounded md:mb-0  ">
              <div class="relative panel-wrapper">
                <div
                  style="background-image:url('{{ asset('img/CATEGORIAS/NATURALEZA-min.jpg') }}');background-repeat: no-repeat;background-size: cover;background-position: center;"
                  class="image is-1by1 rounded-3xl w-full hover:border-black    h-48 object-cover overflow-hidden">
                  <div
                    class="  h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-75 hover:opacity-95 rounded-3xl bg-blue-600 hover:bg-transparent hover:border-black   border-4 border-blue-600  ">
                    <p style="z-index: 99999999999999999;opacity: 100%;"
                      class="text-black sm:text-2xl text-center roboto  sombra-txt font-bold h-full  w-full text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl pt-24 md:pt-12 lg:pt-12 xl:pt-24 2xl:pt-24 uppercase">
                      naturaleza</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>

      </div>

      {{--  --}}


      {{--  --}}
      <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

        <a href="{{ URL('/') }}/Categorias/3">
          <div class="content">

            <div class="w-full max-w-6xl rounded md:mb-0  ">
              <div class="relative panel-wrapper">
                <div
                  style="background-image:url('{{ asset('img/CATEGORIAS/BELLEZA Y CUIDADO-min.jpg') }}');background-repeat: no-repeat;background-size: cover;background-position: center;"
                  class="image is-1by1 rounded-3xl w-full hover:border-black    h-48 object-cover overflow-hidden">
                  <div
                    class="  h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-75 hover:opacity-95 rounded-3xl bg-blue-600 hover:bg-transparent hover:border-black   border-4 border-blue-600  ">
                    <p style="z-index: 99999999999999999;opacity: 100%;"
                      class="text-black sm:text-2xl text-center roboto  sombra-txt font-bold h-full  w-full text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl pt-24 md:pt-12 lg:pt-12 xl:pt-24 2xl:pt-24 uppercase">
                      salud y belleza</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>

      </div>

      {{--  --}}


      {{--  --}}
      <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

        <a href="{{ URL('/') }}/Categorias/2">
          <div class="content">

            <div class="w-full max-w-6xl rounded md:mb-0  ">
              <div class="relative panel-wrapper">
                <div
                  style="background-image:url('{{ asset('img/CATEGORIAS/DISEÑO-min.jpg') }}');background-repeat: no-repeat;background-size: cover;background-position: center;"
                  class="image is-1by1 rounded-3xl w-full hover:border-black    h-48 object-cover overflow-hidden">
                  <div
                    class="  h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-75 hover:opacity-95 rounded-3xl bg-blue-600 hover:bg-transparent hover:border-black   border-4 border-blue-600  ">
                    <p style="z-index: 99999999999999999;opacity: 100%;"
                      class="text-black sm:text-2xl text-center roboto  sombra-txt font-bold h-full  w-full text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl pt-24 md:pt-12 lg:pt-12 xl:pt-24 2xl:pt-24 uppercase">
                      Diseño</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </a>

      </div>

      {{--  --}}

    </div>
  </div>
  <div
    class="col-span-12 grid gap-4 grid-cols-12 py-4 xs:px-6 block sm:hidden md:hidden lg:hidden sm:px-16 md:px-16 lg:px-16 2xl:px-16 xl:px-16 ">


    <div class="col-span-4 col-start-2 -mx-5">
      <div class="fb-page" data-href="https://www.facebook.com/DigitalizaQuillota.cl" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/DigitalizaQuillota.cl" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DigitalizaQuillota.cl">Digitaliza tu Negocio Quillota</a></blockquote></div>
    </div>
    <div></div>
    <div class="col-span-4 -mx-5">
      <iframe src="https://snapwidget.com/embed/935243" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
    </div>



  </div>

  <div class="col-span-12 grid gap-4 grid-cols-6 py-4 xs:px-6 sm:px-16 md:px-16 lg:px-16 2xl:px-16 xl:px-16 ">

    <div class="col-span-1">
      <a href="http://www.fundacionbanamor.cl/" target="_blank">
        <img src="img/footer/ban-amor.png" alt="" srcset="">
      </a>
    </div>
    <div class="col-span-1">
      <a href="https://www.colbun.cl/" target="_blank">
        <img src="img/footer/colbun.png" alt="" srcset="">
      </a>
    </div>
    <div class="col-span-1">
      <a href="https://marcaconsciente.cl/" target="_blank">
        <img src="img/footer/marca-con.png" alt="" srcset="">
      </a>
    </div>
    <div class="col-span-1">
      <a href="https://www.quillota.cl/udel/" target="_blank">
        <img src="img/footer/qui-dedeco.png" alt="" srcset="">
      </a>
    </div>
    <div class="col-span-1">
      <a href="https://quillota.cl/municipalidad/" target="_blank">
        <img src="img/footer/quillota.png" alt="" srcset="">
      </a>
    </div>
    <div class="col-span-1">
      <a href="https://www.fundacionlasemilla.cl/" target="_blank">
        <img src="img/footer/semilla.png" alt="" srcset="">
      </a>
    </div>


  </div>



</div>
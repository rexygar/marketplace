 
<div
  class="col-span-12 grid grid-cols-12 h-full md:px-6 lg:px-16 xl:px-16 2xl:px-16 pt-6 pb-36 md:pt-6 md:pb-36 lg:pt-6 lg:pb-36 xl:pt-6 xl:pb-36 2xl:pt-6 2xl:pb-36">

  <div class="col-span-12 grid gap-4 grid-cols-12 py-4 xs:px-6 sm:px-16 md:px-16 lg:px-16 2xl:px-16 xl:px-16 ">



    <div
      class="col-span-12 lg:col-span-12 md:col-span-12 xl:col-span-12 2xl:col-span-12 grid grid-cols-12   md:grid-flow-row row-span-2">


      @if ($blog == null)

      <div
        class="col-span-12  lg:col-span-12 md:col-span-12 xl:col-span-12 2xl:col-span-12 grid grid-cols-3  px-10  py-6 ">
        <h1
          class="col-span-12 text-justify py-5 font-black 2xl:text-6xl xl:text-6xl lg:text-4xl md:text-3xl sm:text-2xl">
          No hay publicaciones por el momento</h1>
      </div>
      @else
      @foreach ($blog as $publicacion)
      <div
        class="col-span-12  lg:col-span-12 md:col-span-12 xl:col-span-12 2xl:col-span-12 grid grid-cols-3  px-10  py-6 ">
        <div class="col-span-3 grid grid-cols-12 ">
          <div class="col-span-12 font-black text-3xl">
            <h1
              class="col-span-12 text-center py-5 font-black 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-3xl sm:text-2xl">
              {{ $publicacion->titulo}}</h1>
          </div>
          <img class="col-span-12 mx-auto" src="/storage/{{ $publicacion->img}}" alt="">
        </div>
        <div class="col-span-3 grid grid-cols-12">
          <article class=" col-span-12  grid grid-cols-12">

            <div class=" col-span-12  grid grid-cols-12">
              <div class="text-black text-xl text-justify  col-span-12">
                <p class="">
                  <br>
                  {!! html_entity_decode( $publicacion->descripcion) !!}

                  <br>

                </p>
              </div>

            </div>
            <nav class="level is-mobile col-span-10">
              <div class="level-left">
                {{ $publicacion->created_at}}
              </div>
              
            </nav>
            
          </article>
        </div>
      </div>
      @endforeach
      @endif
      {{--  --}}
      {{--  --}}



    </div>
    <div></div>


  </div>

  <div
    class="col-span-12 grid grid-cols-7  pt-16 lg:pt-16 sm:pt-10   md:pt-16 xl:pt-16 2xl:pt-16 pb-6  xs:px-6 sm:px-16 md:px-16 lg:px-36 2xl:px-36 xl:px-36 ">

  </div>





</div>
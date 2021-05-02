<div class="col-span-12 grid grid-cols-7 _Textil py-20 px-36  sm:px-10  md:px-16 lg:px-24 2xl:px-36 xl:px-36 animate__fadeInUp animate__animated wow">
  <div
    class="col-span-7 grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 grid-cols-2 sm:gap-1  gap-6 lg:gap-4">

    @if ($tiendas_Textil)

    @foreach ($tiendas_Textil as $tiendas_t)

    @php
    $img_producto_t = null;
    $img_tienda_t = null;
    $img_t= null;
    $ruta_t = null;
    @endphp


    @if ( $tiendas_t->logo != null)
      @php
        $img_tienda_t = $tiendas_t->logo;
      @endphp
    @endif

    @if ( $tiendas_t->producto != null  && $img_tienda_t == null)
      @foreach ($tiendas_t->producto as $t)
        @if ($loop->first)
          @php
            $img_producto_t = $t->img;
          @endphp
        @endif
      @endforeach
    @endif

    @if ($img_tienda_t == null)
        @if ($img_producto_t == null)
          @php
          $img_t = "/TEXTIL-min.jpg";
          $ruta_t= "/img/CATEGORIAS";
          @endphp
        @else
          @php
          $img_t = $img_producto_t;
          $ruta_t= "/storage/";
          @endphp
        @endif
      @else
        @php
          $ruta_t = "/storage/";
          $img_t= $img_tienda_t;
        @endphp
    @endif

    {{--  --}}
    <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

      <a href="{{ URL('/') }}/Tienda/{{$tiendas_t->id}}">
        <div class="content">

          <div class="w-full max-w-6xl rounded md:mb-0  ">
            <div class="relative panel-wrapper">
              <div  data-background-image="{{$ruta_t }}{{$img_t }}"
                style="background-repeat: no-repeat;background-size: contain;background-position: center;"
                class="image is-1by1 lozad border-4 border-blue-400 hover:border-yellow-500 w-full h-48 object-cover overflow-hidden">
                <div
                  class="px-6 py-4 h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-50 hover:opacity-95 bg-blue-500 hover:bg-yellow-500">
                  <p
                    class="text-black sm:text-2xl text-center lobster font-bold text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl mix-blend-multiply pt-5 md:pt-12 lg:pt-12 xl:pt-12 2xl:pt-24 uppercase">
                    {{$tiendas_t->razon_social}} </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </a>

    </div>

    {{--  --}}
    @endforeach
    @else

    @endif
  </div>
</div>
<div class="col-span-12 grid grid-cols-7 _Gastronomia py-20 px-36  sm:px-10  md:px-16 lg:px-24 2xl:px-36 xl:px-36 animate__fadeInUp animate__animated wow">
  <div
    class="col-span-7 grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 grid-cols-2 sm:gap-1  gap-6 lg:gap-4">



    @if ($t_Gas)

    @foreach ($t_Gas as $tiendas_g)

    @php
    $img_producto_g = null;
    $img_tienda_g = null;
    $img_g= null;
    $ruta_g = null;
    @endphp

    @if ( $tiendas_g->logo != null)
    @php
    $img_tienda_g = $tiendas_g->logo;
    @endphp
    @endif

    @if ( $tiendas_g->producto != null  && $img_tienda_g == null)
    @foreach ($tiendas_g->producto as $g)
    @if ($loop->first)
    @php
    $img_producto_g = $g->img;
    @endphp
    @endif
    @endforeach
    @endif

    @if ($img_tienda_g == null)
    @if ($img_producto_g == null)
    @php
    $img_g = "/GASTRONOMIA-min.jpg";
    $ruta_g= "/img/CATEGORIAS";
    @endphp
    @else
    @php
    $img_g = $img_producto_g;
    $ruta_g= "/storage/";
    @endphp
    @endif
    @else
    @php
    $ruta_g = "/storage/";
    $img_g= $img_tienda_g;
    @endphp
    @endif
    {{--  --}}
    <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

      <a href="{{ URL('/') }}/Tienda/{{$tiendas_g->id}}">
        <div class="content">

          <div class="w-full max-w-6xl rounded md:mb-0  ">
            <div class="relative panel-wrapper">
              <div data-background-image="{{$ruta_g }}{{$img_g }}"
                style="background-repeat: no-repeat;background-size: contain;background-position: center;"
                class="image is-1by1 lozad border-4 border-blue-400 hover:border-yellow-500 w-full h-48 object-cover overflow-hidden">
                <div
                  class="px-6 py-4 h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-50 hover:opacity-95 bg-blue-500 hover:bg-yellow-500">
                  <p style="z-index: 99999999999999999;opacity: 100%;"
                    class="text-black sm:text-2xl sombra-txt text-center lobster font-bold text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl pt-5 md:pt-12 lg:pt-12 xl:pt-12 2xl:pt-24 uppercase">
                    {{$tiendas_g->razon_social}}</p>

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
<div class="col-span-12 grid grid-cols-7 _Diseño py-20  px-2   sm:px-10  md:px-16 lg:px-24 2xl:px-36 xl:px-36 animate__fadeInUp animate__animated wow">
  <div
    class="col-span-7 grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 grid-cols-2 sm:gap-1  md:gap-2 gap-1 xl:gap-6 2xl:gap-6 lg:gap-4">


    @if ($tiendas_Diseño)

    @foreach ($tiendas_Diseño as $tiendas_d)

    @php
    $img_producto_d = null;
    $img_tienda_d = null;
    $img_d= null;
    $ruta_d = null;
    @endphp

    @if ( $tiendas_d->logo != null)
    @php
    $img_tienda_d = $tiendas_d->logo;
    @endphp
    @endif

    @if ( $tiendas_d->producto != null && $img_tienda_d == null)
    @foreach ($tiendas_d->producto as $d)
    @if ($loop->first)
    @php
    $img_producto_d = $d->img;
    @endphp
    @endif
    @endforeach
    @endif

    @if ($img_tienda_d == null)
    @if ($img_producto_d == null)
    @php
    $img_d = "/DISEÑO-min.jpg";
    $ruta_d= "/img/CATEGORIAS";
    @endphp
    @else
    @php
    $img_d = $img_producto_d;
    $ruta_d= "/storage/";
    @endphp
    @endif
    @else
    @php
    $ruta_d = "/storage/";
    $img_d= $img_tienda_d;
    @endphp
    @endif
   {{--  --}}
   <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

    <a href="{{ URL('/') }}/Tienda/{{$tiendas_d->id}}">
      <div class="content">

        <div class="w-full max-w-6xl rounded md:mb-0  ">
          <div class="relative panel-wrapper">
            <div data-background-image="{{$ruta_d }}{{$img_d }}"
              style="background-repeat: no-repeat;background-size: cover;background-position: center;"
              class="image is-1by1 lozad rounded-3xl w-full hover:border-black h-48 object-cover overflow-hidden filtegray">
              <div
                class="  h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-75 hover:opacity-95 rounded-3xl hover:bg-transparent hover:border-black"
                style=" display: table;">
                <p style="z-index: 99999999999999999;opacity: 100%; display: table-cell; vertical-align: middle; margin: 0; padding: 0;"
                  class="text-black sm:text-2xl text-center lobster font-bold sombra-txt font-bold h-full  w-full text-base md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-4xl pt-4 md:pt-12 lg:pt-12 xl:pt-24 2xl:pt-24 uppercase">
                  {{$tiendas_d->razon_social}}</p>

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
<div
  class="col-span-12 grid grid-cols-7  pt-16 lg:pt-16 sm:pt-10   md:pt-16 xl:pt-16 2xl:pt-16 pb-6  xs:px-6 sm:px-16 md:px-16 lg:px-24 2xl:px-36 xl:px-36 animate__fadeInUp animate__animated wow">
  <div class="col-span-7 grid grid-cols-2  gap-1 md:grid-cols-3  sm:gap-6 lg:gap-8 xl:gap-8 2xl:gap-8 md:gap-4">


    @if ($tiendas)

    @foreach ($tiendas as $tiendas_all)

    @php
    $img_producto_all = null;
    $img_tienda__all = null;
    $img__all= null;
    $ruta__all = null;
    @endphp

    {{--  --}}

    @if ( $tiendas_all->logo != null)
    @php
    $img_tienda__all = $tiendas_all->logo;
    @endphp
    @endif

    @if ( $tiendas_all->producto != null && $img_tienda__all == null)
    @foreach ($tiendas_all->producto as $all)
    @if ($loop->first)
    @php
    $img_producto_all = $all->img;
    @endphp
    @endif
    @endforeach
    @endif

    @if ($img_tienda__all == null)
    @if ($img_producto_all == null)
    @php
    $img__all = $fondo;
    $ruta__all= "/img/CATEGORIAS";
    @endphp
    @else
    @php
    $img__all = $img_producto_all;
    $ruta__all= "/storage/";
    @endphp
    @endif
    @else
    @php
    $ruta__all = "/storage/";
    $img__all= $img_tienda__all;
    @endphp
    @endif
    {{--  --}}
    <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

      <a href="{{ URL('/') }}/Tienda/{{$tiendas_all->id}}">
        <div class="content">

          <div class="w-full max-w-6xl rounded md:mb-0  ">
            <div class="relative panel-wrapper">
              <div data-background-image="{{$ruta__all }}{{$img__all }}"
                style="background-repeat: no-repeat;background-size: cover;background-position: center;"
                class="image is-1by1 lozad rounded-3xl w-full hover:border-black    h-48 object-cover overflow-hidden">
                <div
                  class="  h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-75 hover:opacity-95 rounded-3xl bg-blue-600 hover:bg-transparent hover:border-black   border-4 border-blue-600  ">
                  <p style="z-index: 99999999999999999;opacity: 100%;"
                    class="text-black sm:text-2xl text-center roboto  sombra-txt font-bold h-full  w-full text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl pt-24 md:pt-12 lg:pt-12 xl:pt-24 2xl:pt-24 uppercase">
                    {{$tiendas_all->razon_social}}</p>

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
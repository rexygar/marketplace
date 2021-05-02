<div class="col-span-12 grid grid-cols-7 _Salud py-20 px-36  sm:px-10  md:px-16 lg:px-24 2xl:px-36 xl:px-36 animate__fadeInUp animate__animated wow">
  <div
    class="col-span-7 grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 grid-cols-2 sm:gap-1  gap-6 lg:gap-4">


    @if ($tiendas_Salud )

    @php
    $img_producto_s = null;
    $img_tienda_s = null;
    $img_s= null;
    $ruta_s = null;
    @endphp


    @foreach ($tiendas_Salud as $tiendas_s)

    @if ( $tiendas_s->logo != null)
    @php
    $img_tienda_s = $tiendas_s->logo;
    @endphp
    @endif

    @if ( $tiendas_s->producto != null  && $img_tienda_s == null)
    @foreach ($tiendas_s->producto as $s)
    @if ($loop->first)
    @php
    $img_producto_s = $s->img;
    @endphp
    @endif
    @endforeach
    @endif

    @if ($img_tienda_s == null)
    @if ($img_producto_s == null)
    @php
    $img_s = "/BELLEZA Y CUIDADO-min.jpg";
    $ruta_s= "/img/CATEGORIAS";
    @endphp
    @else
    @php
    $img_s = $img_producto_s;
    $ruta_s= "/storage/";
    @endphp
    @endif
    @else
    @php
    $ruta_s = "/storage/";
    $img_s= $img_tienda_s;
    @endphp
    @endif
    {{--  --}}
    <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

      <a href="{{ URL('/') }}/Tienda/{{$tiendas_s->id}}">
        <div class="content">

          <div class="w-full max-w-6xl rounded md:mb-0  ">
            <div class="relative panel-wrapper">
              <div  data-background-image="{{$ruta_s }}{{$img_s }}"
                style="background-repeat: no-repeat;background-size: contain;background-position: center;"
                class="image is-1by1 lozad border-4 border-blue-400 hover:border-yellow-500 w-full h-48 object-cover overflow-hidden">
                <div
                  class="px-6 py-4 h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-50 hover:opacity-95 bg-blue-500 hover:bg-yellow-500">
                  <p
                    class="text-black sm:text-2xl text-center lobster font-bold text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl mix-blend-multiply pt-5 md:pt-12 lg:pt-12 xl:pt-12 2xl:pt-24 uppercase">
                    {{$tiendas_s->razon_social}}</p>

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
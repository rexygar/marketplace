<div class="col-span-12 grid grid-cols-7 _Naturaleza py-20 px-36  sm:px-10  md:px-16  lg:px-24 2xl:px-36 xl:px-36 animate__fadeInUp animate__animated wow">
  <div
    class="col-span-7 grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 grid-cols-2 sm:gap-1  gap-6 lg:gap-4">

    @if ($tiendas_Naturaleza)

    @foreach ($tiendas_Naturaleza as $tiendas_n)


    @php
    $img_producto_n = null;
    $img_tienda_n = null;
    $img_n= null;
    $ruta_n = null;
    @endphp

    @if ( $tiendas_n->logo != null)
    @php
    $img_tienda_n = $tiendas_n->logo;
    @endphp
    @endif

    @if ( $tiendas_n->producto != null  && $img_tienda_n == null)
    @foreach ($tiendas_n->producto as $n)
    @if ($loop->first)
    @php
    $img_producto_n = $n->img;
    @endphp
    @endif
    @endforeach
    @endif

    @if ($img_tienda_n == null)
    @if ($img_producto_n == null)
    @php
    $img_n = "/NATURALEZA-min.jpg";
    $ruta_n= "/img/CATEGORIAS";
    @endphp
    @else
    @php
    $img_n = $img_producto_n;
    $ruta_n= "/storage/";
    @endphp
    @endif
    @else
    @php
    $ruta_n = "/storage/";
    $img_n= $img_tienda_n;
    @endphp
    @endif
 {{--  --}}
 <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

  <a href="{{ URL('/') }}/Tienda/{{$tiendas_n->id}}">
    <div class="content">

      <div class="w-full max-w-6xl rounded md:mb-0  ">
        <div class="relative panel-wrapper">
          <div data-background-image="{{$ruta_n }}{{$img_n }}"
            style="background-repeat: no-repeat;background-size: cover;background-position: center;"
            class="image is-1by1 lozad rounded-3xl w-full hover:border-black    h-48 object-cover overflow-hidden">
            <div
              class="  h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-75 hover:opacity-95 rounded-3xl bg-blue-600 hover:bg-transparent hover:border-black   border-4 border-blue-600  ">
              <p style="z-index: 99999999999999999;opacity: 100%;"
                class="text-black sm:text-2xl text-center lobster  sombra-txt font-bold h-full  w-full text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl pt-24 md:pt-12 lg:pt-12 xl:pt-24 2xl:pt-24 uppercase">
                {{$tiendas_n->razon_social}}</p>

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
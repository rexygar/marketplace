<div class="col-span-12 grid grid-cols-7 _Casa py-20 px-36  sm:px-10  md:px-16 lg:px-24 2xl:px-36 xl:px-36 ">
  <div class="col-span-7 grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 grid-cols-2 sm:gap-1  gap-6 lg:gap-4">

    @if ($tiendas_Casa)

    @foreach ($tiendas_Casa as $tiendas_c)
    {{--  --}}
    <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

      <a href="{{ URL('/') }}/Tienda/{{$tiendas_c->id}}">
        <div class="content">

          <div class="w-full max-w-6xl rounded md:mb-0  ">
            <div class="relative panel-wrapper">
              <div
                style="background-image:url('{{ url('uploads/CASA Y DECORACIÓN/Creaciones Luisa/Sin título-1-10-min.jpg') }}');background-repeat: no-repeat;background-size: contain;"
                class="image is-3by4 border-4 border-blue-400 hover:border-yellow-500 w-full h-48 object-cover overflow-hidden">
                <div
                  class="px-6 py-4 h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-50 hover:opacity-95 bg-blue-500 hover:bg-yellow-500">
                  <p
                  class="text-black sm:text-2xl text-center lobster font-bold text-2xl md:text-2xl lg:text-2xl xl:text-3xl 2xl:text-5xl mix-blend-multiply pt-5 md:pt-12 lg:pt-12 xl:pt-12 2xl:pt-24 uppercase">
                    {{$tiendas_c->razon_social}}</p>

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
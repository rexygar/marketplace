<div class="col-span-12 grid grid-cols-7 _Naturaleza py-20 px-36 sm:px-6 md:px-16 lg:px-36 2xl:px-36 xl:px-36">

  <div class="col-span-12 grid gap-4 grid-cols-12 py-4 xs:px-6 sm:px-16 md:px-16 lg:px-16 2xl:px-16 xl:px-16 ">

    @for ($i = 0; $i < 1; $i++) <div class="col-span-3 grid-cols-3 grid -mt-10">
      <div class="block-inline col-span-3 grid-cols-3 grid float" style="z-index: 9999999">
        <div class="col-span-3 block-inline">
          <div class="col-span-1 inline">
            @if ($tienda[0]->facebook != null)
            <a href="https://web.facebook.com/{{$tienda[0]->facebook }}" target="_blank">
              <img class="inline w-3/12 h-auto" src="/img/FB.png" alt="" srcset="">

            </a>
            @endif
          </div>
          <div class="col-span-1 inline">
            @if ($tienda[0]->instagram != null)
            <a href="https://www.instagram.com/{{$tienda[0]->instagram}}" target="_blank">
              <img class="inline w-3/12 h-auto" src="/img/IG.png" alt="" srcset="">
            </a>

            @endif
          </div>

          @if ($tienda[0]->instagram != null)
          <div class="col-span-1 inline">
            <p class="inline py-3 font-black text-2xl">/{{$tienda[0]->instagram}}</p>
          </div>
          @endif

        </div>
      </div>
  </div>
  <div class="col-span-12 text-center  grid grid-cols-12">

    <h2 class="font-black col-span-12 text-6xl lg:-mt-24 xl:-mt-24 2xl:-mt-24 " style="color: #066393">
      {{$tienda[0]->razon_social}}</h2>


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
    <p class="py-3 px-6 font-black text-base text-gray-700  w-full ">{{$tienda[0]->descr}}</p>
  </div>
  @endfor
  <div></div>


</div>
<div
  class="col-span-7 grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-3 md:grid-cols-3 px-36 md:px-6 sm:px-16 lg:px-16 xl:px-36 2xl:px-36  gap-6 lg:gap-4 py-10">
  @foreach ($tienda as $productos)
  @if (!isset($productos->id))
  <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">
    NADA QUE MOSTRAR

  </div>
  @else
  <div class=" md:mb-10 xl:mb-10 xl:mb-10 2xl:mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

    <a target="_blank" href="{{$productos->link}} ">
      <div class="content">

        <div class="w-full max-w-6xl rounded md:mb-0  ">
          <div class="relative panel-wrapper">
            <div style="background-image:url('/storage/{{$productos->img}} ');background-repeat: no-repeat;"
              class="image is-1by1 border-4 border-blue-700 rounded-sm hover:border-yellow-500 w-full h-full  overflow-hidden bg-center bg-contain">
              <div class="px-6 py-4 h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-50 ">
                {{-- <p
                    class="text-white text-justify lobster font-bold text-5xl md:text-2xl lg:text-5xl xl:text-5xl 2xl:text-5xl mix-blend-multiply pt-24 md:pt-12 lg:pt-24 xl:pt-24 2xl:pt-24 uppercase">
                    {{$productos->titulo}}</p>
                <p
                  class="text-white text-justify lobster font-bold text-3xl md:text-2xl lg:text-3xl xl:text-3xl 2xl:text-3xl mix-blend-multiply pt-24 md:pt-12 lg:pt-24 xl:pt-24 2xl:pt-24 uppercase">
                  {{$productos->descripcion}}</p> --}}

              </div>
            </div>
          </div>
        </div>
      </div>
    </a>

  </div>
  @endif
  {{--  --}}

  {{--  --}}
  @endforeach


</div>

<div class="col-span-12 grid gap-4 grid-cols-6 py-4 xs:px-6 sm:px-16 md:px-16 lg:px-16 2xl:px-16 xl:px-16 ">

  @for ($i = 0; $i < 1; $i++) 
  <div>
</div>
<div>
</div>
<div class="col-span-2">
  <a target="_blank" href="{{$tienda[0]->link}} ">

    <button class="rounded-full py-3 px-6 font-black text-white w-full bg-yellow-500 uppercase"> visitar</button>

  </a>
</div>
<div></div>
@endfor
</div>
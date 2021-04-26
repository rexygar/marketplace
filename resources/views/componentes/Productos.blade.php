<div class="col-span-12 grid grid-cols-7 _Naturaleza py-20 px-36 md:px-16 lg:px-36 2xl:px-36 xl:px-36">

  <div class="col-span-12 grid gap-4 grid-cols-12 py-4 xs:px-6 sm:px-16 md:px-16 lg:px-16 2xl:px-16 xl:px-16 ">

    <div class="col-span-3 grid-cols-3 grid">
      <div class="block-inline col-span-3 grid-cols-3 grid">
        <div class="col-span-2"> <img class="inline w-3/12 h-auto" src="/img/FB.png" alt="" srcset="">
          <img class="inline w-3/12 h-auto" src="/img/IG.png" alt="" srcset=""></div>
        <p class="inline lg:-ml-16 py-3 font-medium">/aaaaaaaaaaaaaaaaa</p>
      </div>
    </div>
    <div class="col-span-12 text-center  grid grid-cols-12">

      @for ($i = 0; $i < 1; $i++) <h2 class="font-black col-span-12 text-6xl" style="color: #066393">
        {{$tienda[0]->razon_social}}</h2>
        @endfor

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
    <div class="col-span-12 text-center">
      <p class="py-3 px-6 font-black text-base text-gray-700  w-full capitalize "> Velit ea aliqua et minim. Labore eu
        reprehenderit elit irure
        pariatur. Pariatur elit magna non eiusmod. Tempor mollit incididunt nisi aute deserunt minim nostrud quis do et
        anim occaecat laborum. Ea voluptate duis incididunt esse eiusmod minim et adipisicing. </p>
    </div>
    <div></div>


  </div>
  <div class="col-span-7 grid grid-cols-3   gap-6 lg:gap-4">
    @if ($tienda[0]->id == null)
    <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">
      NADA QUE MOSTRAR

    </div>

    @else
    @foreach ($tienda as $productos)
    {{--  --}}
    <div class=" mb-10 md:container md:mx-auto px-4 md:px-0 col-span-1">

      <a href="{{ URL('/') }}/Tienda/{{$productos->id}}">
        <div class="content">

          <div class="w-full max-w-6xl rounded md:mb-0  ">
            <div class="relative panel-wrapper">
              <div style="background-image:url('/storage/{{$productos->img}} ');background-repeat: no-repeat;"
                class="image is-3by4 border-4 border-blue-700 rounded-sm hover:border-yellow-500 w-full h-full  overflow-hidden bg-center bg-contain">
                <div class="px-6 py-4 h-full  w-full absolute  bg-blend-darken left-0 top-0 opacity-50 ">
                  {{-- <p
                    class="text-white text-center lobster font-bold text-5xl md:text-2xl lg:text-5xl xl:text-5xl 2xl:text-5xl mix-blend-multiply pt-24 md:pt-12 lg:pt-24 xl:pt-24 2xl:pt-24 uppercase">
                    {{$productos->titulo}}</p>
                  <p
                    class="text-white text-center lobster font-bold text-3xl md:text-2xl lg:text-3xl xl:text-3xl 2xl:text-3xl mix-blend-multiply pt-24 md:pt-12 lg:pt-24 xl:pt-24 2xl:pt-24 uppercase">
                    {{$productos->descripcion}}</p> --}}

                </div>
              </div>
            </div>
          </div>
        </div>
      </a>

    </div>

    {{--  --}}
    @endforeach
    @endif


  </div>
  <div class="col-span-12 grid gap-4 grid-cols-6 py-4 xs:px-6 sm:px-16 md:px-16 lg:px-16 2xl:px-16 xl:px-16 ">

    <div></div>

    <div></div>
    <div class="col-span-2">
      <button class="rounded-full py-3 px-6 font-black text-white w-full bg-yellow-500 uppercase"> visitar</button>
    </div>

    <div></div>


  </div>
</div>
<style>
    input[type="radio"],
    input[type="checkbox"] {
        position: relative;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        outline: none;
    }

    input[type="checkbox"]+span:before {
        width: 16px;
        height: 16px;
        border: 1px solid #000;
        content: "\2714";
        color: transparent;
        display: inline-block;
        font-size: 13px;
        margin-right: 5px;
        text-align: center;
        /* new code notice me! */
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

</style>
<div
    class="col-span-12 grid grid-cols-12 h-full md:px-6 lg:px-16 xl:px-16 2xl:px-16 pt-6 pb-36 md:pt-6 md:pb-36 lg:pt-6 lg:pb-36 xl:pt-6 xl:pb-36 2xl:pt-6 2xl:pb-36">
    
    <div class="col-span-12 grid gap-4 grid-cols-12 py-4 xs:px-6 sm:px-16 md:px-16 lg:px-16 2xl:px-16 xl:px-16 ">

        

        <div
            class="col-span-12 lg:col-span-12 md:col-span-12 xl:col-span-12 2xl:col-span-12 grid grid-cols-12   md:grid-flow-row row-span-2">


            @if ($blogs == null)

                <div
                    class="col-span-12  lg:col-span-12 md:col-span-12 xl:col-span-12 2xl:col-span-12 grid grid-cols-3  px-10  py-6 ">
                    <h1
                        class="col-span-12 text-justify py-5 font-black 2xl:text-6xl xl:text-6xl lg:text-4xl md:text-3xl sm:text-2xl">
                        No hay publicaciones por el momento</h1>
                </div>
            @else
                <div
                    class="col-span-12  lg:col-span-12 md:col-span-12 xl:col-span-12 2xl:col-span-12 grid grid-cols-3  px-10 gap-2 py-6">

                    @foreach ($blogs as $blog)



                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                            <img class="w-full" src="/storage/{{ $blog->img }}" alt="Mountain">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-justify">{{ $blog->titulo }}</div>
                                <p class="text-gray-700 text-base text-justify">
                                    {!! html_entity_decode($blog->resumen) !!}...
                                </p>
                            </div>
                            <div class="px-6 pt-4 pb-2 text-justify">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $blog->created_at }}</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><a
                                        href="/Blog/{{ $blog->id }}" class="text-blue-500 w-full hover:text-blue-700">Leer
                                        Más</a></span>
                            </div>
                        </div>
                        {{-- <div class="col-span-12 font-black text-3xl">
            <h1
              class="col-span-12 text-center py-5 font-black 2xl:text-3xl xl:text-3xl lg:text-3xl md:text-3xl sm:text-2xl">
              {{ $blog->titulo}}</h1>
          </div>
          <img class="col-span-12 mx-auto" src="/storage/{{ $blog->img}}" alt=""> --}}


                        {{-- <div class="col-span-3 grid grid-cols-12">
          <article class=" col-span-12  grid grid-cols-12">

            <div class=" col-span-12  grid grid-cols-12">
              <div class=" col-span-12">
                <p class="text-black text-xl font-bold">
                  <br>
                  {!! html_entity_decode( $blog->resumen) !!}...

                  <br>

                </p>
              </div>

            </div>
            <nav class="level is-mobile col-span-10">
              <div class="level-left">
                
              </div>
              <div class="level-left">
                
              </div>

            </nav>
            
          </article>
        </div> --}}
                    @endforeach
                </div>
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

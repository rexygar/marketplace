@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Crear Blog')


@section('content')
<div class="col-span-10 col-start-3 h-auto">
    <div class="min-h-screen bg-gray-100 py-24 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-32">
            <div class="w-11/12 mx-auto">
              <div class="flex items-center space-x-5">
                <div class="h-14 w-14 bg-blue-500 rounded-full flex flex-shrink-0 justify-center items-center text-white-50 text-2xl font-mono">B</div>
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                @if (isset($blog->id))
                    <h2 class="leading-relaxed">Editar Producto</h2>
                @else
                    <h2 class="leading-relaxed">Crear Producto</h2>
                @endif
                </div>
              </div>
              <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                  <div class="flex flex-col">
                    <form action="{{ route('add.blog') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="@if (isset($blog->id)) {{ $blog->id }} @endif">
                      <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Titulo de la publicación</span>
                      <input type="text" name="titulo" value="@if (isset($blog->titulo)){{ $blog->titulo }} @endif">
                      <div class="mt-8">

                      </div>
                      <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Descripción de la Publicación</span>
                      <textarea class="ckeditor" name="descripcion" id="editor" cols="30" rows="100">
                        @if (isset($blog->descripcion))  {{ $blog->descripcion }}  @endif
                    </textarea>
                      <div class="mt-8">

                      </div>
                      <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Foto de la Tienda</span>
                      <input type="file" accept="image/*" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" name="logo">
                      <div class="pt-4 flex items-center space-x-4">
                        @if (isset($blog->id))
                        <button id="crear" type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Editar</button>
                        @else
                        <button id="crear" type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Crear</button>
                        @endif
                        <a href="{{ route('admin.index') }}" class="bg-red-700 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Cancelar</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@stop

@section('vendor-script')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
@endsection
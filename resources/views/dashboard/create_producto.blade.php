@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Crear Producto')

@section('content')
<div class="col-span-10 xl:col-span-10 2xl:col-span-10 lg:col-span-10 md:col-span-9 sm:col-span-9 col-start-3 h-auto">
  <div class="min-h-screen bg-gray-100 py-24 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 px-16">
      <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl ">
        <div class="w-11/12 mx-auto">
          <div class="flex items-center space-x-5">
            <div
              class="h-14 w-14 bg-blue-500 rounded-full flex flex-shrink-0 justify-center items-center text-white-50 text-2xl font-mono">
              C</div>
            <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
              @if (isset($producto->id))
              <h2 class="leading-relaxed">Editar Producto</h2>
              @else
              <h2 class="leading-relaxed">Crear Producto</h2>
              @endif
            </div>
          </div>
          <div class="divide-y divide-gray-200">
            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
              <div class="flex flex-col">
                <form action="{{ route('add.product') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="@if (isset($producto->id)){{ $producto->id }} @endif">
                  <span
                    class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Titulo</span>
                  <br>
                  <input type="text" required
                    class="text-sm pl-4 w-full inline-block  text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                    name="titulo" value="@if (isset($producto->titulo)){{ $producto->titulo }} @endif">
                  <div class="mt-8">

                  </div>
                  <span
                    class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Descripción</span>
                  <br>
                  <input type="text" required
                    class="text-sm pl-4 w-full inline-block  text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                    name="descripcion" value="@if (isset($producto->descripcion)){{ $producto->descripcion }} @endif">
                  <div class="mt-8">

                  </div>
                  <label class="leading-loose">Imagen del producto</label>
                  <input type="file" required name="img" accept="image/*"
                    value="@if (isset($producto->img)){{ $producto->img }} @endif"
                    class="text-sm pl-4 w-full inline-block  text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                    placeholder="Event title">
                  <div class="mt-8">

                  </div>
                  <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Tienda
                    del Producto</span> <br>
                  <select name="tienda"
                    class="text-sm pl-4 w-full inline-block  text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none">
                    @foreach ($tienda as $t)
                    @if(!isset($producto->id_tienda))
                    <option value="{{ $t->id }}">{{ $t->razon_social }}</option>
                    @else
                    <option value="{{ $t->id }}" @if($t->id == $producto->id_tienda) selected
                      @endif>{{ $t->razon_social }}</option>
                    @endif

                    @endforeach
                  </select>
                  <div class="mt-8"></div>
                  <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Enlace
                    al Vendedor</span> <br>
                  <input type="text" name="enlace"
                    class="text-sm pl-4 w-full inline-block  text-justify align-middle  rounded-2xl md:p-2 bg-white border-2 border-gray-300  placeholder-gray-600 shadow-md focus:placeholder-gray-500  focus:border-gray-600 focus:outline-none"
                    value="@if (isset($enlace->id)){{ $enlace->link }} @endif">
                  <div class="mt-8">

                  </div>
                  <div class="pt-4 flex items-center space-x-4">
                    <button id="crear" type="submit"
                      class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Crear</button>
                    <a href="{{ route('admin.index') }}"
                      class="bg-red-700 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Cancelar</a>
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

@section('page-styles')
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
@endsection

@section('vendor-script')
<script src="{{ asset('js/toastr/toastr.js') }}"></script>
@endsection
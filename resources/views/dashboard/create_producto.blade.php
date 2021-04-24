@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Crear Producto')

@section('content')
    <div class="col-span-10 col-start-3 h-auto">
        <div class="min-h-screen bg-gray-100 py-24 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
              <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-32">
                <div class="w-11/12 mx-auto">
                  <div class="flex items-center space-x-5">
                    <div class="h-14 w-14 bg-black rounded-full flex flex-shrink-0 justify-center items-center text-yellow-600 text-2xl font-mono">C</div>
                    <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                      <h2 class="leading-relaxed">Crear Producto</h2>
                    </div>
                  </div>
                  <div class="divide-y divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                      <div class="flex flex-col">
                        <form action="{{ route('add.product') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="id" value="@if (isset($producto->id)){{ $producto->id }} @endif">
                          <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Titulo</span>
                          <input type="text" class="mr-16 border border-gray-700" name="titulo" value="@if (isset($producto->titulo)){{ $producto->titulo }} @endif">
                          <br>
                          <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Descripción</span>
                          <input type="text" class="mr-16 border border-gray-700" name="descripcion" value="@if (isset($producto->descripcion)){{ $producto->descripcion }} @endif">
                          <br>
                          <label class="leading-loose">Imagen del producto</label>
                          <input type="file" name="img" accept="image/" value="@if (isset($producto->img)){{ $producto->img }} @endif" multiple class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event title">
                          <div class="mt-8"></div>
                          <select name="tienda">
                            @foreach ($tienda as $t)
                                <option value="{{ $t->id }}" @if($t->id == $producto->id_tienda) selected @endif>{{ $t->razon_social }}</option>
                            @endforeach
                          </select>
                          <div class="mt-8"></div>
                          <span class="text-xl leading-relaxed text-center sm:text-left  w-full font-bold text-gray-700">Enlace al Vendedor</span>
                          <input type="text" name="enlace" value="@if (isset($enlace->id)){{ $enlace->link }} @endif">
                          <br><br>
                          <div class="pt-4 flex items-center space-x-4">
                            <button id="crear" type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Crear</button>
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

@section('page-styles')
<link rel="stylesheet" href="{{ asset('js/toastr/toastr.min.css') }}">
@endsection

@section('vendor-script')
<script src="{{ asset('js/toastr/toastr.js') }}"></script>
@endsection
@extends('layouts_admin.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Editar Tienda')


@section('content')
<div class="col-span-10 col-start-3 h-auto">
    <div class="min-h-screen bg-gray-100 py-24 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-32">
            <div class="w-11/12 mx-auto">
              <div class="flex items-center space-x-5">
                <div class="h-14 w-14 bg-blue-500 rounded-full flex flex-shrink-0 justify-center items-center text-white-50 text-2xl font-mono">E</div>
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                  <h2 class="leading-relaxed">Editar Tienda</h2>
                </div>
              </div>
              <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                  <div class="flex flex-col">
                    <form action="{{ route('update.tienda') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="@if (isset($tienda->id)) {{ $tienda->id }} @endif">
                      <label class="leading-loose">Nombre de la Tienda</label>
                      <input type="text" name="nombre" value="{{ $tienda->razon_social }}">
                      <div class="pt-4 flex items-center space-x-4">
                        <button id="crear" type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Editar</button>
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

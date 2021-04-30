@extends('layouts.Contenido')

@section('content')
{{-- @include('componentes.hero-index') --}}
<div class="w-full">
    @include('componentes.quienes_Somos')
    @include('componentes.quienes_Somos2')
    @include('componentes.quienes_Somos3')
</div>
@endsection
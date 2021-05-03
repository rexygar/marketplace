@extends('layouts.Contenido')

@section('content')
{{-- @include('componentes.hero-index') --}}
<div class="w-full">
    @include('componentes.quienes_hero')
    @include('componentes.quienes_hero2')
    @include('componentes.quienes_hero3')
</div>
@endsection
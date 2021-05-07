@extends('layouts.Contenido')

@section('content')
@include('componentes.hero-index')
<div class="w-full">
    @include('componentes.Publicacion',compact('blog')) 
</div>
@endsection
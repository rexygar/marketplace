@extends('layouts.Contenido')

@section('content')
@include('componentes.hero-index')
<div class="w-full">
    @include('componentes.Blog',compact('blogs')) 
</div>
@endsection
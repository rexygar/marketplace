@extends('layouts.Contenido')

@section('content')
@include('componentes.hero-index')
<div class="w-full">

   
    @include('componentes.Productos',compact('tienda'),compact('vacia'))
</div>
@endsection
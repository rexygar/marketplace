@extends('layouts.Contenido')

@section('content')
@include('componentes.hero-blog')
<div class="w-full">
    @include('componentes.Blog',compact('blogs')) 
</div>
@endsection
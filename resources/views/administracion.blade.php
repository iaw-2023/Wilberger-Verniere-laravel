@extends('master')
@section('content')
<div class="wrapper">
    <form action="{{ route('genero.index') }}" method="Post" class="item">
        <a class="btn btn-secondary btn-generos" href="{{ route('genero.index')}}">Generos</a>
    </form>
    <form action="{{ route('pelicula.index')}}" method="Post" class="item">
        <a class="btn btn-secondary btn-peliculas" href="{{ route('pelicula.index')}}">Peliculas</a>
    </form>            
    <form action="{{ route('funcion.index')}}" method="Post" class="item">
        <a class="btn btn-secondary btn-funciones" href="{{ route('funcion.index')}}">Funciones</a>
    </form>              
    <form action="{{ route('sala.index') }}" method="Post" class="item">
        <a class="btn btn-secondary btn-salas" href="{{ route('sala.index') }}">Salas</a>
    </form> 
    <form action="{{ route('compra.index') }}" method="Post" class="item">
        <a class="btn btn-secondary btn-compras" href="{{ route('compra.index') }}">Compras</a>
    </form>             
</div>
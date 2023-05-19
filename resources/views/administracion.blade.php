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

@section('css')
<link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        @vite(['resources/css/administracion.css'])
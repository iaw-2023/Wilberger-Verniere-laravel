<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebCines</title>

    </head>
    <body>
        <form action="{{ route('genero.index') }}" method="Post">
            <a class="btn btn-primary" href="{{ route('genero.index')}}">Generos</a>
        </form>        
        <form action="" method="Post">
            <a class="btn btn-primary" href="">Funciones</a>
        </form> 
        <form action="" method="Post">
            <a class="btn btn-primary" href="">Peliculas</a>
        </form> 
        <form action="{{ route('sala.index') }}" method="Post">
            <a class="btn btn-primary" href="{{ route('sala.index') }}">Salas</a>
        </form> 
    </body>
</html>

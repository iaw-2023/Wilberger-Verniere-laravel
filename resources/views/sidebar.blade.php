<a href="{{ url('/administracion') }}">Inicio</a>

<div class="btn-group">
    <a class="elem" href="{{ route('funcion.index') }}">Funciones</a>
    <a class="añadir" href="{{ route('funcion.create') }}">+</a>
</div>

<div class="btn-group">
    <a class="elem" href="{{ route('pelicula.index') }}">Peliculas</a>
    <a class="añadir" href="{{ route('pelicula.create') }}">+</a>
</div> 

<div class="btn-group">
    <a class="elem" href="{{ route('genero.index') }}">Generos</a>
    <a class="añadir" href="{{ route('genero.create') }}">+</a>
</div> 

<div class="btn-group">
    <a class="elem" href="{{ route('sala.index') }}">Salas</a>
    <a class="añadir" href="{{ route('sala.create') }}">+</a>
</div>  

<div class="btn-group">
    <a class="elem" href="{{ route('compra.index') }}">Compras</a>
</div>

<a class="logout" href="{{ route('compra.index') }}">Log Out</a>
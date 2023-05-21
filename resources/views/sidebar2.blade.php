<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/administracion') }}">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('funcion.index') }}">Funciones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('pelicula.index') }}">Peliculas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('genero.index') }}">Generos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('sala.index') }}">Salas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('compra.index') }}">Compras</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('compra.index') }}">Log Out</a>
  </li>
</ul>
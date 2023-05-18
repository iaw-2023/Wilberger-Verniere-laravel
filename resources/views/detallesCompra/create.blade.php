@extends('master')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Añadir nueva funcion:</h2>
            </div>
        </div>
    </div>
    <form action="{{ route('funcion.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Pelicula:</label>
            <select name="Pelicula" id="pel" placeholder="Elija una opcion" required>
                @foreach ($peliculas as $pel)
                    <option value="{{$pel->id}}"> {{ $pel->nombre }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Sala:</label>
            <select name="Sala" id="s" placeholder="Elija una opcion" required>
                @foreach ($salas as $s)
                    <option value="{{$s->id}}"> {{ $s->id }} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Fecha:</label>
            <input type="date" id="date" name="Fecha" required>
            <label>Hora:</label>
            <input type="time" id="date" name="Hora" min="08:00" max="24:00" required>
        </div>
        <a class="btn btn-danger" href="{{ route('funcion.index') }}">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
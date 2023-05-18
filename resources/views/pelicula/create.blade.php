@extends('master')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Añadir nueva pelicula:</h2>
            </div>
        </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('pelicula.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="Nombre" class="form-control" placeholder="Ej: Star Wars" required>
                    @error('Nombre')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
            <label>ID Genero:</label>
            <select name="Genero" id="gen" placeholder="Elija una opcion" required>
                @foreach ($generos as $gen)
                    <option value="{{$gen->id}}"> {{ $gen->id }} </option>
                @endforeach
            </select>
        </div>
        </div>
        <a class="btn btn-danger" href="{{ route('pelicula.index') }}">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
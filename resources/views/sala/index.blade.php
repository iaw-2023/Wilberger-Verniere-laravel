@extends('master')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Salas</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('sala.create') }}">Añadir Sala</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID:</th>
                    <th>Nombre: </th>
                    <th>Capacidad: </th>
                    <th>Habilitado: </th>
                    <th>Accion: </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($salas as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->nombre }}</td>
                    <td>{{ $s->capacidadMaxima }}</td>
                    <td>
                    @if ($s->habilitado) {{ 'SI' }} 
                    @else {{ 'NO' }} 
                    @endif 
                    </td>
                    <td>      
                    @if($s->habilitado)
                        <form action="{{ route('sala.destroy',$s->id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="Sala" value="{{ $s->id }}">
                            <button type="submit" class="btn btn-danger">Deshabilitar</button>
                        </form>
                    @else
                        <form action="{{ route('sala.update',$s->id) }}" method="Post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="Sala" value="{{ $s->id }}">
                            <button type="submit" class="btn btn-primary">Habilitar</button>
                        </form>
                    @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $salas->links() !!}
</div>

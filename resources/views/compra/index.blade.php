@extends('master')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Compras</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('compra.create') }}">Añadir Compra</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID:</th>
                <th>Observaciones:</th>
                <th>Fecha:</th>
                <th>Acciones:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compras as $com)
                <tr>
                    <td>{{ $com->id }}</td>
                    <td>{{ $com->observaciones }}</td>
                    <td>{{ $com->fecha }}</td>
                    <td>
                        <form action="{{ route('detallesCompra.index',$com->id) }}" method="Post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="idCompra" value="{{ $com->id }}">
                                    <button type="submit" class="btn-primary">Ver detalles</button>
                        </form>
                        <form action="{{ route('compra.destroy',$com->id) }}" method="Post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="idCompra" value="{{ $com->id }}">
                            <button type="submit" class="btn btn-danger">Cancelar Compra</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $compras->links() !!}
</div>

@section('css')
<link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
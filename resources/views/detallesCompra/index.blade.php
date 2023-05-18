@extends('master')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ordenes</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('funcion.create') }}">Añadir Orden</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Compra ID:</th>
                <th>ID:</th>
                <th>Funcion ID:</th>
                <th>Tickets:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ordenes as $ord)
                <tr>
                    <td>{{ $ord->idCompra }}</td>
                    <td>{{ $ord->id }}</td>
                    <td>{{ $ord->idFuncion }}</td>
                    <td>{{ $ord->cantidadTickets }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $ordenes->links() !!}
</div>
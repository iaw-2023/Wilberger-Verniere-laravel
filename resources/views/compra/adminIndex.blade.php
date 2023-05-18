@extends('master')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Compras</h2>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID:</th>
                <th>Email:</th>
                <th>Observaciones:</th>
                <th>Fecha:</th>
                <th>Accion:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($compras as $com)
                <tr>
                    <td>{{ $com->id }}</td>
                    <td>{{ $com->emailCliente }}</td>
                    <td>{{ $com->observaciones }}</td>
                    <td>{{ $com->fecha }}</td>
                    <td>
                        <form action="{{ route('detallesCompra.index',$com->id) }}" method="Post">
                            @csrf
                            <input type="hidden" name="idCompra" value="{{ $com->id }}">
                            <button type="submit" class="btn btn-primary">Ver ordenes</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $compras->links() !!}
</div>
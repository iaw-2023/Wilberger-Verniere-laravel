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
    <form action="{{ route('compra.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Orden ID:</th>
                    <th>Funcion ID:</th>
                    <th>Tickets:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ordenes as $ord)
                    <tr>
                        <td>{{ $ord->id }}</td>
                        <td>{{ $ord->idFuncion }}</td>
                        <td>{{ $ord->cantidadTickets }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>                
        <button type="submit" class="btn btn-primary">Confirmar Compra</button>
    </form>
    {!! $ordenes->links() !!}
    <form action="{{ route('compra.update') }}" method="POST" enctype="multipart/form-data">
        <button type="submit" class="btn btn-primary">Añadir orden</button>
    </form>
    <form action="{{ route('compra.destroy') }}" method="POST" enctype="multipart/form-data">
        <button type="submit" class="btn btn-danger">Cancelar Compra</button>
    </form>
</div>
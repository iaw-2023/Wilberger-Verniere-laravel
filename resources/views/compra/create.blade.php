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

@section('css')
<link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
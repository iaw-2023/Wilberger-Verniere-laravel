<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Salas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
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
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Capacidad</th>
                        <th>Hablitado</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($salas as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->nombre }}</td>
                            <td>{{ $s->capacidadMaxima }}</td>
                            <td>{{ $s->habilitado }}</td>
<<<<<<< HEAD
                            <td>
=======
                            <td>                                
>>>>>>> a6c952d1a393e17e657b7b2fbac7e6304ffc6c55
                                <form action="{{ route('sala.destroy',$s->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('sala.update',$s->id) }}">Habilitar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deshabilitar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $salas->links() !!}
        </div>
    </body>
</html>
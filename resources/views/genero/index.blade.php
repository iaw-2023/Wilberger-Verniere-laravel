<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Generos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Generos</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('genero.create') }}">Añadir Genero</a>
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
                        <th>Hablitado</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($generos as $gen)
                        <tr>
                            <td>{{ $gen->id }}</td>
                            <td>{{ $gen->nombre }}</td>
                            <td>{{ $gen->habilitado }}</td>
                            <td>
                                <!--
                                <a class="btn btn-primary" href="{{ route('genero.update',$gen->id) }}">Habilitar</a> 
                                <a class="btn btn-danger" href="{{ route('genero.destroy',$gen->id) }}">Deshabilitar</a>
                                -->
                                <form action="{{ route('genero.destroy',$gen->id) }}" method="Post">
                                    <a class="btn btn-primary" href="{{ route('genero.update',$gen->id) }}">Habilitar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deshabilitar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $generos->links() !!}
        </div>
    </body>
</html>
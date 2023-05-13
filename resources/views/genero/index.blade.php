<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Generos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
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
                        <th>ID:</th>
                        <th>Nombre:</th>
                        <th>Habilitado:</th>
                        <th>Accion:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($generos as $gen)
                        <tr>
                            <td>{{ $gen->id }}</td>
                            <td>{{ $gen->nombre }}</td>
                            <td>
                                @if ($gen->habilitado) {{ 'SI' }} 
                                @else {{ 'NO' }} 
                                @endif 
                            </td>
                            <td>
                            @if($gen->habilitado)
                                <form action="{{ route('genero.destroy',$gen->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="Genero" value="{{ $gen->id }}">
                                    <button type="submit" class="btn btn-danger">Deshabilitar</button>
                                </form>
                            @else
                                <form action="{{ route('genero.update',$gen->id) }}" method="Post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="Genero" value="{{ $gen->id }}">
                                    <button type="submit" class="btn btn-primary">Habilitar</button>
                                </form>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $generos->links() !!}
        </div>
    </body>
</html>
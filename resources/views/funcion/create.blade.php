<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Formulario Funcion</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left mb-2">
                        <h2>Añadir nueva funcion:</h2>
                    </div>
                </div>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('funcion.store') }}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Pelicula:</label>
                    <div class="dropdown">
                        
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Elija una opcion
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach ($peliculas as $pel)
                                <a class="dropdown-item" href="#">
                                    {{ $pel->nombre }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Sala:</label>
                    <div class="dropdown">
                        
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Elija una opcion
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach ($salas as $s)
                                <a class="dropdown-item" href="#">
                                    $s->id
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Fecha:</label>
                    <input type="date" id="date" name="Fecha" required>
                    <label>Hora:</label>
                    <input type="time" id="date" name="Hora" min="08:00" max="24:00" required>
                </div>

                <a class="btn btn-danger" href="{{ route('funcion.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>
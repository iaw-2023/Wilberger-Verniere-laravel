<?php

use App\Models\Pelicula;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PeliculaController extends Controller{

    /*
        Agrega una pelicula de la lista de funciones
     */
    public function añadirPelicula(Request $request): RedirectResponse
    {
        //VALIDAR SI IDGENER ES VALIDO
        $pelicula = new Pelicula;

        $pelicula->nombre     = $request->Nombre;
        $pelicula->idGenero   = $request->Genero;
        
        $pelicula->save();

        return redirect('/');
    }

    /*
        Elimina una pelicula de la lista de Peliculas
     */
    public function quitarPelicula(Request $request): RedirectResponse
    {
        //VALIDAR ID SI EXISTE EN LA TABLA
        $pelicula = $request->Pelicula; //Id de la pelicula

        Pelicula::delete($pelicula);
        Pelicula::truncate();

        return redirect('/');
    }
}
<?php

use App\Models\Genero;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GeneroController extends Controller {

    /*
        Añade una genero a la lista de generos
     */
    public function añadirGenero(Request $request): RedirectResponse
    {
        $genero = new Genero;

        $genero->nombre = $request->Nombre;
        
        $genero->save();

        return redirect('/');
    }

    /*
        Elimina un genero de la lista de generos
     */
    public function quitarGenero(Request $request): RedirectResponse
    {
        //VALIDAR ID SI EXISTE EN LA TABLA

        $genero = $request->Genero; //Id del genero

        Genero::delete($genero);
        Genero::truncate();

        return redirect('/');
    }
}
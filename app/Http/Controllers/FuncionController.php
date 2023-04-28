<?php

use App\Models\Funcion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FuncionController extends Controller {

    /*
        Añade una funcion a la lista de funciones
     */
    public function agregarFuncion(Request $request): RedirectResponse
    {
/*         //VALIDAR SI IDPELICULA Y IDSALA SON VALIDOS
        $funcion = new Funcion;

        $funcion->idPelicula = $request->Pelicula;
        $funcion->idSala     = $request->Sala;
        $funcion->fecha      = $request->Fecha;
        $funcion->hora       = $request->Hora;
        
        $funcion->save();  <--Esto se movio a el modelo correspondiente*/

        return redirect('/');
    }

    /*
        Elimina una funcion de la lista de funciones
     */
    public function quitarFuncion(Request $request): RedirectResponse
    {
/*         //VALIDAR ID SI EXISTE EN LA TABLA

        $funcion = $request->Funcion; //Id de la funcion

        Funcion::delete($funcion);
        Funcion::truncate(); */

        return redirect('/');
    }
}
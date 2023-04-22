<?php

use App\Models\Sala;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SalaController extends Controller {

    /*
        Añade una sala a la lista de salas
     */
    public function añadirSala(Request $request): RedirectResponse
    {
        $sala = new Sala;

        $sala->nombre = $request->Nombre;
        $sala->capacidadMaxima = $request->Capacidad;
        
        $sala->save();

        return redirect('/');
    }

    /*
        Elimina un sala de la lista de salas
     */
    public function quitarSala(Request $request): RedirectResponse
    {
        //VALIDAR ID SI EXISTE EN LA TABLA

        $sala = $request->Sala; //Id del sala

        Sala::delete($sala);
        Sala::truncate();

        return redirect('/');
    }
}
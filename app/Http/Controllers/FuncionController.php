<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcion;
use App\Models\DetallesCompra;
use App\Models\Pelicula;
use App\Models\Sala;
use Illuminate\Support\Facades\DB;

class FuncionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funciones = Funcion::index();
            // Ver si se puede agregar el atributo cant funciones;
        return view('funcion.index', compact('funciones'));
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peliculas = Pelicula::habilitadas();
        $salas = Sala::habilitadas();
        return view('funcion.create', compact('peliculas','salas'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Pelicula' => 'exists:pelicula,id',
            'Sala' => 'exists:sala,id',
        ]);
        if ($validated && $this->validarFuncionUnica($request)){
            Funcion::agregarFuncion($request);
            return redirect()->route('funcion.index')->with('Success','Funcion has been created successfully.');
        }
        return redirect()->route('funcion.index')->with('Error','Funcion could not been created.');
    }
        private function validarFuncionUnica(Request $request): bool {
            $funciones = Funcion::where([
                ['idSala', $request->Sala],
                ['fecha', $request->Fecha],
                ['hora', $request->Hora]
            ]);
            if ($funciones->exists()){
                return false;
            } 
            return true;
        }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {   
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id=$request->Funcion;
        $funcion = Funcion::find($id);
        return view('funcion.edit',compact('funcion','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'Pelicula' => 'exists:pelicula,id',
            'Sala' => 'exists:sala,id',
        ]);

        if ($validated) { 
            Funcion::editarFuncion($request,$id);
            return redirect()->route('funcion.index')->with('Success','Funcion could be updated');
        }
        return redirect()->route('funcion.index')->with('Error','Funcion could not be updated');
    }

    public function destroy(Request $request)
    {
        //
    }

    public function habilitar(Request $request)
    {
        $validated = $request->validate([
            'Funcion' => 'exists:funcion,id',
        ]);
        if ($validated){
            Funcion::habilitarFuncion($request);
            return redirect()->route('funcion.index')->with('Success','Funcion has been enabled successfully');
        }
        return redirect()->route('funcion.index')->with('Error','Funcion has not been enabled successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deshabilitar(Request $request)
    {
        $validated = $request->validate([
            'Funcion' => 'exists:funcion,id',
        ]);
        if ($validated && $this->noInscriptos($request)){
            Funcion::quitarFuncion($request);
            return redirect()->route('funcion.index')->with('Success','Funcion has been disabled successfully');
        }
        return redirect()->route('funcion.index')->with('Error','Funcion has not been disabled successfully');
    }
        private function noInscriptos(Request $request): bool {
            $detallesCompra = DetallesCompra::where([
                ['idFuncion', $request->Funcion]
            ]);
            return $detallesCompra->exists()? false : true;
        }
    
    public static function getTicketsAsociados(int $id){
        $cantTickets=0;
        $detallesCompra=DetallesCompra::all();
        foreach ($detallesCompra as $d){
            if ($d->idFuncion == $id){
                $cantTickets=$cantTickets+$d->cantidadTickets;
            }
        }
        return $cantTickets;
    }

    public static function formatoFecha($fecha)
    {
        return date('d/m/Y', strtotime($fecha));
    }
}

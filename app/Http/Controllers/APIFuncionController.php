<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\FuncionResource;
use App\Models\Funcion;
use App\Models\Pelicula;

class APIFuncionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FuncionResource::collection(Funcion::elementosHabilitados());
    }

    public function indexWithPelicula(Request $request)
    {
        $id = $request->query('Id');
        $pelicula = Pelicula::find($id);
        $setFunciones = Funcion::elementosHabilitados();
        $funcionesPelicula = $pelicula->funciones;
        return FuncionResource::collection($funcionesPelicula->intersect($setFunciones));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        if ($this->validarFuncion($id)) { return new FuncionResource(Funcion::findorfail($id)); } 
        else { return response()->json(['error' => 'No se encontro esa funcion'], 404); }
    }
        private function validarFuncion($id) {
            $funcion = Funcion::find($id);
            if ($funcion) {
                if ($funcion->habilitado) { return true; }
            }
            return false;
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

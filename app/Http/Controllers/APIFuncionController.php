<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\FuncionResource;
use App\Http\Resources\ErrorResource;
use App\Models\Funcion;
 
class APIFuncionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FuncionResource::collection(Funcion::elementosHabilitados());
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
        
        if (validarFuncion($id)) { return new FuncionResource(Funcion::findorfail($id)); } 
        else return new ErrorResource;
    }
        private function validarFuncion($id) {
            if (Funcion::exists($id)) {
                $funcion = Funcion::find($id);
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

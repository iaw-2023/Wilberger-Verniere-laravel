<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\GeneroResource;
use App\Http\Resources\ErrorResource;
use App\Models\Genero;

class APIGeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GeneroResource::collection(Genero::elementosHabilitados());
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
    public function show(String $id)
    {
        if (validarGenero($id)) { return new GeneroResource(Genero::findorfail($id)); }
        else return new ErrorResource;
    }
        private function validarGenero($id) {
            if (Genero::exists($id)) {
                $genero = Genero::find($id);
                if ($genero->habilitado) { return true; }
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

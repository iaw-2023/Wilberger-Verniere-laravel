<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PeliculaResource;
use App\Models\Pelicula;

class APIPeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PeliculaResource::collection(Pelicula::elementosHabilitados());
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
        if ($this->validarPelicula($id)) { return new PeliculaResource(Pelicula::findorfail($id)); }
        else { return response()->json(['error' => 'No se encontro esa pelicula'], 404); }
    }
        private function validarPelicula($id) {
            $pelicula = Pelicula::find($id);
            if ($pelicula) {
                if ($pelicula->habilitado) { return true; }
            }
            return false;
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        //
    }
}

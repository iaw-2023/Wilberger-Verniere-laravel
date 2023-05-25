<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PeliculaCollection;
use App\Http\Resources\PeliculaResource;
use App\Models\Pelicula;

class APIPeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PeliculaCollection(Pelicula::where('habilitado',true)->get());
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
        return new PeliculaResource(Pelicula::where('id', $id)->get());
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

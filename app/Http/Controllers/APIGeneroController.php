<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Resources\GeneroCollection;
use App\Http\Resources\GeneroResource;
use App\Models\Genero;

class APIGeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new GeneroCollection(Genero::where('habilitado',true)->get());
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
        return new GeneroResource(Genero::where('id', $id)->get());
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

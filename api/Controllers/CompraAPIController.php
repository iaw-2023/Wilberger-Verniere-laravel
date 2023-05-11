<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CompraCollection(Compraa::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // GUARDAR COMPRA CUANDO SE CONFIRMA
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        // DESTRUIR LOS DETALLES COMPRA ASOCIADOS???
    }
}

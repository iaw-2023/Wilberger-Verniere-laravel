<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetallesCompraAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new DetallesCompraCollection(DetallesCompra::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'Funcion' => 'exists:funcion,id',
        ]);
        if ($validated){
            DetallesCompra::agregarDetallesCompra($request);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new DetallesCompraResource(DetallesCompra::where('id',$id));
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
    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'DetallesCompra' => 'exists:detalles_compra,id',
        ]);
        if ($validated){
            DetallesCompra::quitarDetallesCompra($request);
        }
    }
}

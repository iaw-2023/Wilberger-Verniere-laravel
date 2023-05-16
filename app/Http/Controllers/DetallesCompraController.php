<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallesCompra;

class DetallesCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $ordenes = DetallesCompra::where('id',$request->idCompra)->orderBy('id')->paginate(10);
        return view('detallesCompra.adminIndex', compact('ordenes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        DetallesCompra::agregarDetallesCompra(); //Crea detallesCompra con valores por defecto
        return view('detallesCompra.create');
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
            DetallesCompra::confirmarDetallesCompra($request);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
        $validated = $request->validate([
            'DetallesCompra' => 'exists:detalles_compra,id',
        ]);
        if ($validated){
            DetallesCompra::quitarDetallesCompra($request);
        }
        return view();
    }
}

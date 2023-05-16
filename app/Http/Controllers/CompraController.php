<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\DetallesCompra;
use App\Http\DetallesCompraController;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compras = Compra::orderBy('id')->paginate(10);
        return view('compra.adminIndex', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ordenes=DetallesCompra::where('idCompra',$request->id)->get();
        return view('compra.create',compact('ordenes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ordenesAsociadas=DetallesCompra::where('idCompra',$request->id)->get();
        foreach($ordenesAsociadas as $d){
            DetallesCompraController::store($d);
        }
        Compra::confirmarCompra($request);
        return redirect()->route('compra.index')->with('Success','A Compra has been created successfully.');
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
        DetallesCompraController::create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $validated = $request->validate([
            'Compra' => 'exists:compra,id',
        ]);
        if ($validated){
            $detallesComprasAsociados=DetallesCompra::where('idCompra',$request->id)->get();
            foreach($detallesComprasAsociados as $d){
                DetallesCompraController::destroy($d);
            }
            Compra::quitarCompra($request);
        }
    }
}

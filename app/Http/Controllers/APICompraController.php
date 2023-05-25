<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CompraCollection;
use App\Http\Resources\CompraResource;
use App\Models\Compra;

class APICompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new CompraCollection(Compra::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    //Llega un JSON con (Observaciones, emailCliente, fecha y una lista de DetallesCompra) ???
    {
        CompraController::store($request);
        $idCompra = Compra::lastInsertId();
        //Obtener id de ultima compra insertada en base de datos y pasarla al store de DetallesCompra
        $listaOrdenes=$request->listaOrdenes; //$listaOrdenes=$request[listaOrdenes]; reemplazando idCompra por lo obtenido arriba ??

        foreach ($listaOrdenes as $ord){
            DetallesCompraController::store($ord);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new CompraResource(Compra::where('id',$id));
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
            'Compra' => 'exists:compra,id',
        ]);
        if ($validated){
            $listaOrdenes=$request->listaOrdenes;  //$listaOrdenes=$request[listaOrdenes];
            foreach ($listaOrdenes as $ord){
                DetallesCompraController::destroy($ord);
            }
            CompraController::destroy($request);
        }
    }
}

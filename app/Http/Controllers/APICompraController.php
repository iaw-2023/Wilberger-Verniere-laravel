<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CompraResource;
use App\Models\Compra;
use App\Models\DetallesCompra;

class APICompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CompraResource::collection(Compra::all());
    }

    public function indexWithEmail(Request $request)
    {
        $email = $request->query('email');
        return CompraResource::collection(Compra::where('emailCliente',$email)->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Compra::agregarCompra($request);
        $idCompra = DB::getPdo()->lastInsertId();
        $listaOrdenes=$request->Compras;

        foreach ($listaOrdenes as $ord){
            DetallesCompra::agregarDetallesCompra($ord, $idCompra);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if ($this->validarCompra($id)) { return new CompraResource(Compra::findorfail($id)); }
        else { return response()->json(['error' => 'No se encontro esa compra'], 404); }
    }
        private function validarCompra($id)
        {
            return (Compra::exists($id));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\DetallesCompraCollection;
use App\Http\Resources\DetallesCompraResource;
use App\Models\DetallesCompra;

class APIDetallesCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}

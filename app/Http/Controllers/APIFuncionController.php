<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\FuncionCollection;
use App\Http\Resources\FuncionResource;
use App\Models\Funcion;
 
class APIFuncionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new FuncionCollection(Funcion::where('habilitado',true)->get());
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
        return new FuncionResource(Funcion::where('id', $id)->get());
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

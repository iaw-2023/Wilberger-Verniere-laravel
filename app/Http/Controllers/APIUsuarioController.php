<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class APIUsuarioController extends Controller
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
        $email = $request->query('Email');
        $contraseña = $request->query('Contraseña');
        $nombre = $request->query('Nombre');
        $validarEmail = $request->validate([
            $email => 'exists:usuario,email',
        ]);
        $validarNombre = $request->validate([
            $nombre => 'exists:usuario,nombre',
        ]);

        if (!$validarEmail && !$validarNombre){
            User::agregarUsuario($email,$contraseña,$nombre);
            return response()->json(['success' => 'Se creo el nuevo usuario'], 200);
        }
        else{
            return response()->json(['error' => 'No se creo el nuevo usuario'], 400);
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
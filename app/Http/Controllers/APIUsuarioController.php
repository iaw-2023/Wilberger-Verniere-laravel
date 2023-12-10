<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UsuarioResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $email = $request->email;
        $contraseña = $request->password;
        $nombre = $request->name;
    
        $existeUsuario = User::where('email', $email)->first();

        if (!$existeUsuario){
            $hashContraseña = Hash::make($contraseña);
            User::agregarUsuario($email,$hashContraseña,$nombre);
            $token = auth()->user()->createToken('token-name')->plainTextToken;

            return response()->json([
                'success' => 'Se creo el nuevo usuario',
                'access_token' => $token
            ], 200);
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

    public function getWithEmail(Request $request)
    {
        $email = $request->input('Email');
        $contraseña = $request->input('Contraseña');

        $usuario = User::where('email', $email)->first();
        if ($usuario && Hash::check($contraseña, $usuario->password)){
            return new UsuarioResource(User::where('email',$email)->first()); 
        }
        else { return response()->json(['error' => 'El email o la contraseña no son validos'], 400); }
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

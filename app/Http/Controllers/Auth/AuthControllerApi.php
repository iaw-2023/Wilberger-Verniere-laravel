<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;


class AuthControllerApi extends Controller
{
    use HasApiTokens;

    public function login(Request $request)
    {
        // Validar las credenciales del usuario
        if (!auth()->attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Nombre de usuario o contraseña incorrectas'], 401);
        }

        // Generar y devolver el token de acceso
        $token = auth()->user()->createToken('token-name')->plainTextToken;

        return response()->json(['access_token' => $token]);
    }

    public function logout(Request $request)
    {
        $user = Auth::user();
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();

        return response()->json(['message' => 'Sesión cerrada correctamente']);
    }

/* 
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $response = Password::sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? response()->json(['message' => 'Correo electrónico de restablecimiento de contraseña enviado'])
            : response()->json(['message' => 'No se pudo enviar el correo electrónico de restablecimiento de contraseña'], 400);
    } */ 
}

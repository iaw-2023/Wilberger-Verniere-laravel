<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Exception;
use Gemini\Laravel\Facades\Gemini;
use GuzzleHttp\Client;

class APIGeminiController extends Controller
{
    public function infoGemini(Request $request)
    {
        $consulta = $request->query('consulta');

        try {
            $result = Gemini::geminiPro()->generateContent($request);
            Log::info("Respuesta GEMINI API: " . $result->text());

            $response = $result->text();

            if ($response === 'Error al buscar una sinopsis en Gemini') {
                return response()->json(['error' => $response], 404); //No encontro info pelicula, pero dio respuesta de error 
            }

            return response()->json(['content' => $response], 200); //Encontro info pelicula
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

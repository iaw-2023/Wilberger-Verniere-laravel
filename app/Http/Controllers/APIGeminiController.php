<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Exception;
use Gemini\Laravel\Facades\Gemini;

class APIGeminiController extends Controller
{
    public function infoGemini(Request $request)
    {
        $consulta = $request->query('consulta');

        try {
            $result = Gemini::geminiPro()->generateContent($request);
            Log::info("Respuesta GEMINI API: " . $result->text());

            $response = $result->text();
            $responseASJSON = json_decode($responseText, true);

            
            if (isset($responseASJSON['content'])) { return response()->json([
                'content' => $responseASJSON['content'],
                'fullResponse' => $response
            ], 200); }
            if (isset($responseASJSON['error'])) { return response()->json([
                'error' => $responseASJSON['error'],
                'fullResponse' => $response
            ], 404); }

            return response()->json([
                'error' => 'Error formato respuesta GEMINI',
                'fullResponse' => $response
            ], 500);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(), 
                'fullResponse' => $response
            ], 500);
        }
    }
}

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APICompraController;
use App\Http\Controllers\APIDetallesCompraController;
use App\Http\Controllers\APIFuncionController;
use App\Http\Controllers\APIGeneroController;
use App\Http\Controllers\APIPeliculaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/generos', [APIGeneroController::class, 'index']);
Route::get('/generos/{idGenero}', [APIGeneroController::class, 'show']);

Route::get('/peliculas', [APIPeliculaController::class, 'index']);
Route::get('/peliculas/{idPelicula}', [APIPeliculaController::class, 'show']);

Route::get('/funciones', [APIFuncionController::class, 'index']);
Route::get('/funciones/{idFuncion}', [APIFuncionController::class, 'show']);

Route::get('/compras', [APICompraController::class, 'index']);
Route::get('/compras/{idCompra}', [APICompraController::class, 'show']);

Route::get('/detallesCompras/{idDetallesCompra}', [APIDetallesCompraController::class, 'show']);

//https://www.toptal.com/laravel/restful-laravel-api-tutorial
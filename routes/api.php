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

Route::get('/generos', [APIGeneroController::class, 'index'])->middleware(CORS::Class);
Route::get('/generos/{idGenero}', [APIGeneroController::class, 'show'])->middleware(CORS::Class);

Route::get('/peliculas', [APIPeliculaController::class, 'index'])->middleware(CORS::Class);
Route::get('/peliculas/{idPelicula}', [APIPeliculaController::class, 'show'])->middleware(CORS::Class);

Route::get('/funciones', [APIFuncionController::class, 'index'])->middleware(CORS::Class);
Route::get('/funciones/{idFuncion}', [APIFuncionController::class, 'show'])->middleware(CORS::Class);

Route::get('/compras', [APICompraController::class, 'index'])->middleware(CORS::Class);
Route::get('/compras/{idCompra}', [APICompraController::class, 'show'])->middleware(CORS::Class);
Route::post('/compras/crear', [APICompraController::class, 'store'])->middleware(CORS::Class);
Route::delete('/compras/eliminar', [APICompraController::class, 'destroy'])->middleware(CORS::Class);

Route::get('/detallesCompras/{idDetallesCompra}', [APIDetallesCompraController::class, 'show'])->middleware(CORS::Class);
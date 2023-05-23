<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Api\Controllers\CompraAPIController;
use Api\Controllers\DetallesCompraAPIController;
use Api\Controllers\FuncionAPIController;
use Api\Controllers\GeneroAPIController;
use Api\Controllers\PeliculaAPIController;

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

Route::resource('APIgenero', GeneroAPIController::class); //PREGUNTAR
Route::resource('APIdetallesCompra', DetallesCompraAPIController::class); //PREGUNTAR
Route::resource('APIcompra', CompraAPIController::class); //PREGUNTAR
Route::resource('APIfuncion', FuncionAPIController::class); //PREGUNTAR
Route::resource('APIpelicula', PeliculaAPIController::class); //PREGUNTAR
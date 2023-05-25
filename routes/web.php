<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneroController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\FuncionController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DetallesCompraController;
use App\Http\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/administracion', function () {
    return view('administracion');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('genero', GeneroController::class)->middleware(Authenticate::Class);
Route::put('genero/habilitar/{id}', [GeneroController::class, 'habilitar'])
    ->name('genero.habilitar')
    ->middleware(Authenticate::Class);
Route::delete('genero/deshabilitar/{id}', [GeneroController::class, 'deshabilitar'])
    ->name('genero.deshabilitar')
    ->middleware(Authenticate::Class);

Route::resource('pelicula', PeliculaController::class)->middleware(Authenticate::Class);
Route::put('pelicula/habilitar/{id}', [PeliculaController::class, 'habilitar'])
    ->name('pelicula.habilitar')
    ->middleware(Authenticate::Class);
Route::delete('pelicula/deshabilitar/{id}', [PeliculaController::class, 'deshabilitar'])
    ->name('pelicula.deshabilitar')
    ->middleware(Authenticate::Class);

Route::resource('funcion', FuncionController::class)->middleware(Authenticate::Class);
Route::put('funcion/habilitar/{id}', [FuncionController::class, 'habilitar'])
    ->name('funcion.habilitar')
    ->middleware(Authenticate::Class);
Route::delete('funcion/deshabilitar/{id}', [FuncionController::class, 'deshabilitar'])
    ->name('funcion.deshabilitar')
    ->middleware(Authenticate::Class);

Route::resource('sala', SalaController::class)->middleware(Authenticate::Class);
Route::put('sala/habilitar/{id}', [SalaController::class, 'habilitar'])
    ->name('sala.habilitar')
    ->middleware(Authenticate::Class);
Route::delete('sala/deshabilitar/{id}', [SalaController::class, 'deshabilitar'])
    ->name('sala.deshabilitar')
    ->middleware(Authenticate::Class);

Route::resource('compra', CompraController::class)->middleware(Authenticate::Class);

Route::resource('detallesCompra', DetallesCompraController::class)->middleware(Authenticate::Class);
Route::get('detallesCompra/listaOrdenes/{idCompra}', [DetallesCompraController::class, 'ordenesAsociadas'])
    ->name('detallesCompra.ordenesAsociadas')
    ->middleware(Authenticate::Class);




Route::view('/swagger', 'swagger');




require __DIR__.'/auth.php';

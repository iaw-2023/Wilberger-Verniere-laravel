<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneroController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\FuncionController;
use App\Http\Controllers\SalaController;

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

Route::resource('genero', GeneroController::class);//->middleware(Authenticate::Class);
Route::resource('pelicula', PeliculaController::class);//->middleware(Authenticate::Class);
Route::resource('funcion', FuncionController::class);//->middleware(Authenticate::Class);
Route::resource('sala', SalaController::class);//->middleware(Authenticate::Class);


require __DIR__.'/auth.php';

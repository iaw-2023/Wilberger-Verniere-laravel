<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Genero;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peliculas = Pelicula::orderBy('id')->paginate(10);
        return view('pelicula.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generos = Genero::where('habilitado',true)->get();
        return view('pelicula.create', compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Genero' => 'exists:genero,id',
        ]);
        if ($validated) {
            Pelicula::agregarPelicula($request);
        }
        return redirect()->route('pelicula.index')->with('Success','Pelicula has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'Pelicula' => 'exists:pelicula,id',
        ]);
        if ($validated){
            Pelicula::habilitarPelicula($request);
            return redirect()->route('pelicula.index')->with('Success','Pelicula has been enabled successfully');
        }
        return redirect()->route('pelicula.index')->with('Error','Pelicula has not been enabled successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'Pelicula' => 'exists:pelicula,id',
        ]);
        if ($validated){
            Pelicula::quitarPelicula($request);
            return redirect()->route('pelicula.index')->with('Success','Pelicula has been disabled successfully');
        }
        return redirect()->route('pelicula.index')->with('Error','Pelicula has not been disabled successfully');
    }
}

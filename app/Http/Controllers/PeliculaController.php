<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

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
        return view('pelicula.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'genero' => 'exists:genero',
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
        return view('pelicula.show',compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        //
        return view('pelicula.edit',compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        //
        $validated = $request->validate([
            'id' => 'exists:pelicula',
        ]);
        if ($validated){
            Pelicula::habilitarPelicula($request);
        }
        return redirect()->route('pelicula.index')->with('Success','Pelicula has been enabled successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'id' => 'exists:pelicula',
        ]);
        if ($validated){
            Pelicula::quitarPelicula($request);
        }
        return redirect()->route('pelicula.index')->with('Success','Pelicula has been disabled successfully');
    }
}

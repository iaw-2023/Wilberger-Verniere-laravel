<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $generos = Genero::orderBy('id')->paginate(10);
        return view('genero.index', compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Nombre' => 'exists:genero,nombre'
        ]);
        if (!$validated){
            Genero::agregarGenero($request);
            return redirect()->route('genero.index')->with('Success','Genero has been created successfully.');
        }
        else return redirect()->route('genero.index')->with('Error','Genero has not been created successfully.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Genero $genero)
    {
        //
        return view('genero.show',compact('genero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genero $genero)
    {
        //
        return view('genero.edit',compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $validated = $request->validate([
            'Genero' => 'exists:genero,id',
        ]);
        if ($validated){
            Genero::habilitarGenero($request);
            return redirect()->route('genero.index')->with('Success','Genero has been enabled successfully');
        }
        return redirect()->route('genero.index')->with('Error','Genero has not been enabled successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'Genero' => 'exists:genero,id',
        ]);
        if ($validated){
            Genero::quitarGenero($request);
            return redirect()->route('genero.index')->with('Success','Genero has been disabled successfully');
        }
        return redirect()->route('genero.index')->with('Error','Genero has not been disabled successfully');
    }
}

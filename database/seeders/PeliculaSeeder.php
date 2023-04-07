<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Pelicula;
use App\Models\Genero;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$generosIDs = DB::table('Genero')->pluck('id');
        Pelicula::factory()->count(5)->create();
        /* DB::table('Pelicula') -> insert ([
            'nombre' => Str::random(40),
            'idGenero' => $generosIDs -> random() //Solo numeros de Genero('id') y unico
        ]); */
    }
}

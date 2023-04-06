<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generosIDs = DB::table('Genero')->pluck('id');
        DB::table('Pelicula') -> insert ([
            'nombre' => Str::random(40),
            'idGenero' => $generosIDs -> random() //Solo numeros de Genero('id') y unico
        ]);
    }
}

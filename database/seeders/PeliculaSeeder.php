<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Pelicula') -> insert ([
            'nombre' => Str::random(40),
            'idGenero' => Int::random() // Solo numeros de Genero('id') y unico
        ]);
    }
}

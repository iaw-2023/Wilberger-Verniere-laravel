<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Funcion') -> insert ([
            'date' => Date::random(),
            'time' => Time::random(),
            'idPelicula' => Int::random(), // Solo numeros de Pelicula('id') y unico
            'idSala' => Int::random() // Solo numeros de Sala('id') y unico
        ]);
    }
}

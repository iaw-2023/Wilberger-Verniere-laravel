<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Sala') -> insert ([
            'nombre' => Str::random(40),
            'capacidadMaxima' => int::random(),
        ]);
    }
}

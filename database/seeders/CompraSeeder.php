<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Compra') -> insert ([
            'nombre' => Str::random(40),
            'observaciones' => Str::random(300),
            'fecha' => date::random(),
            'idFuncion' => Int::random(), // Solo numeros de Funcion('id')
            'idCompra' => Int::random() // Solo numeros de Compra('id')
        ]);
    }
}

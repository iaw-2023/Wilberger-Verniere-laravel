<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $funcionesIDs = DB::table('Funcion')->pluck('id');
        $comprasIDs = DB::table('Detalles_Compra')->pluck('id');
        DB::table('Compra') -> insert ([
            'emailCliente' => Str::random(40),
            'observaciones' => Str::random(300),
            'fecha' => Carbon::now(),
            'idFuncion' => $funcionesIDs->random(), // Solo numeros de Funcion('id')
            'idCompra' => $comprasIDs->random() // Solo numeros de Compra('id')
        ]);
    }
}

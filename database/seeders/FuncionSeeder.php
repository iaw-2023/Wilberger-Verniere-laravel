<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Funcion;

class FuncionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$peliculasIDs = DB::table('Pelicula')->pluck('id');
        //$salasIDs = DB::table('Sala')->pluck('id');
        Funcion::factory()->count(5)->create();
        /* DB::table('Funcion') -> insert ([
            'fecha' => Carbon::now()->format('Y-m-d'),
            'hora' => Carbon::now()->subMinutes(random_int(0,300))->format('H:i:s'),
            'idPelicula' => $pelicudatabase/seeders/FuncionSeeder.phplasIDs->random(), // Solo numeros de Pelicula('id') y unico
            'idSala' => $salasIDs->random() // Solo numeros de Sala('id') y unico
        ]); */
    }
}

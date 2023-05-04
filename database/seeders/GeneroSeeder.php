<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Genero;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Xylis\FakerCinema\Provider\Movie($faker));
        $listaGeneros=$faker->movieGenres(21);

        $usados = array();

        foreach ($listaGeneros as $genero){
            if (!in_array($genero, $usados)) {
                DB::table('genero')->insert([
                    'nombre' => $genero,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
                $usados[] = $genero;
            }
        }
        
        //Genero::factory()->count(20)->create(); NO LO USAMOS
    }
}

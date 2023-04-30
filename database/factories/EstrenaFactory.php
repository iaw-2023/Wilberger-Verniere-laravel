<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Funcion;
use App\Models\Pelicula;
use App\Models\Sala;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EstrenaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'idFuncion'=>$this->faker->randomElement(Funcion::pluck('id')),
            'idPelicula'=>$this->faker->randomElement(Pelicula::pluck('id')),
            'idSala'=>$this->faker->randomElement(Sala::pluck('id')),
        ];
    }
}

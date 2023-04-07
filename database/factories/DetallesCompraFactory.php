<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DetallesCompra;
use App\Models\Funcion;
use App\Models\Compra;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class detallescompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [    
            'idCompra'=>$this->faker->randomElement(Compra::pluck('id')),
            'idFuncion'=>$this->faker->randomElement(Funcion::pluck('id')),        
            'cantidadTickets'=>$this->faker->numberBetween(1,3),
            
        ];
    }
}

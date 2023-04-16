<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Compra;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class compraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [            
            'emailCliente'=>$this->faker->safeEmail(),
            'observaciones'=>$this->faker->text($maxNbChars = 30),
            'fecha'=>$this->faker->date($format = 'Y-m-d'),
        ];
    }
}

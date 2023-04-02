<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('Genero') -> insert ([
            'nombreGenero' => Str::random(25),
        ]);

        DB::table('Peliculas') -> insert ([
            'idPelicula' => Int::random(),
            'nombrePelicula' => Str::random(20),
            'precio' => Decimal::random(10,2),
        ]);

        DB::table('Cines') -> insert ([
            'idCine' => Int::random(),
            'ubicacion' => Str::random(40),
            'nroOcupado' => Int::random(),
            'capacidadMaxima' => Int::random(),
        ]);

        DB::table('Clientes') -> insert ([
            'nombreUsuario' => Str::random(20),
            'clave' => Str::random(20),
            'mail' => Str::random(45),
        ]);

        DB::table('Tickets') -> insert ([
            'nroTicket' => Int::random(),
            'precio' => Decimal::random(10,2),
        ]);

    }
}

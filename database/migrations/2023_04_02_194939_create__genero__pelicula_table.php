<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Genero_pelicula', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId("pelicula")->references("idPelicula")->on("Peliculas");
            $table->foreignId("genero")->references("nombreGenero")->on("Generos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Genero_Pelicula');
    }
};

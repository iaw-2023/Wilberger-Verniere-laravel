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
        Schema::create('_cine__pelicula', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId("pelicula")->references("idPelicula")->on("Peliculas") -> id();
            $table->foreignId("cine")->references("idCine")->on("Cines") -> id();
            $table->date("fechaEstreno") -> id();
            $table->time("horaEstreno") -> id();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_cine__pelicula');
    }
};

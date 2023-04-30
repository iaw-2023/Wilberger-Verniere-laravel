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
        Schema::create('estrena_funcion_pelicula_sala', function (Blueprint $table) {
            $table->id();
            

            $table->foreignId("idFuncion")->references("id")->on("funcion"); 
            $table->foreignId("idPelicula")->references("id")->on("pelicula");
            $table->foreignId("idSala")->references("id")->on("sala");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estrena_funcion_pelicula_sala');
    }
};

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
        Schema::create('funcion', function (Blueprint $table) {
            $table->id();
            $table->date("fecha");
            $table->time("hora");
            $table->boolean("habilitado")->default('true');

            $table->foreignId("idPelicula")->references("id")->on("pelicula");
            $table->foreignId("idSala")->references("id")->on("sala");

            $table->timestamps();

            $table->unique(['fecha', 'hora', 'idSala']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcion');
    }
};

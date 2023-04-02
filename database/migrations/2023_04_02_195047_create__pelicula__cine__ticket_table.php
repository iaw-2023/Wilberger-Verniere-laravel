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
        Schema::create('Pelicula_Cine_Ticket', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId("pelicula")->references("idPelicula")->on("Peliculas");
            $table->foreignId("cine")->references("idCine")->on("Cines");
            $table->foreignId("ticket")->references("nroTicket")->on("Ticket") -> id();

            $table->date("fecha");
            $table->time("hora");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pelicula_Cine_Ticket');
    }
};

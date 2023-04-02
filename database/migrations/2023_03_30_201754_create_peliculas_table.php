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
        Schema::create('Peliculas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->increments("idPelicula") -> id();
            $table->string("nombrePelicula",20);
            $table->decimal("precio",$precision = 10, $scale = 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Peliculas');
    }
};

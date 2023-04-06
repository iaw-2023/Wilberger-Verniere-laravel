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
        Schema::create('Compra', function (Blueprint $table) {
            $table->id();
            $table->string("emailCliente",40);
            $table->string("observaciones",300);
            $table->date("fecha");
        
            $table->foreignId("idFuncion")->references("id")->on("Funcion");
            $table->foreignId("idCompra")->references("id")->on("Compra");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Compra');
    }
};

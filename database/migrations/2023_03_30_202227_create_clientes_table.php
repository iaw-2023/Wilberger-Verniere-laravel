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
        Schema::create('Clientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("nombreUsuario",20) -> id();
            $table->string("clave",20);
            $table->string("mail",45);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Clientes');
    }
};

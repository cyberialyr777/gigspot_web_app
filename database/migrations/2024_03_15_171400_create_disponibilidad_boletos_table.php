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
        Schema::create('disponibilidad_boletos', function (Blueprint $table) {
            $table->id("id_disponibilidad_boletos");
            $table->integer("cantidad_disponible");
            $table->dateTime("fecha_disponibilidad");
            $table->unsignedBigInteger("id_zona_fk");
            $table->foreign("id_zona_fk")->references("id_zona")->on("zonas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilidad_boletos');
    }
};

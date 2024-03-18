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
        Schema::create('ticket_avaliables', function (Blueprint $table) {
            $table->id();
            $table->integer("cantidad_disponible");
            $table->dateTime("fecha_disponibilidad");
            $table->unsignedBigInteger("zone_id");
            $table->timestamps();

            // $table->foreign("id_zona_fk")->references("id_zona")->on("zonas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_avaliables');
    }
};

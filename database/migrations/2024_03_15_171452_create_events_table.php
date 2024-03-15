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
        Schema::create('events', function (Blueprint $table) {
            $table->id('id_events');
            $table->unsignedBigInteger('id_zonas');
            $table->unsignedBigInteger('id_genero');
            $table->unsignedBigInteger('id_banda');
            $table->unsignedBigInteger('id_pais');
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_municipio');
            $table->unsignedBigInteger('id_lugar');
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('id_comentario');
            $table->string('comentario', length:500);
            $table->integer('calificacion');
            $table->timestamps();
            $table->unsignedBigInteger('id_cliente_fk');
            $table->foreign("id_cliente_fk")->references("id_cliente")->on("clientes");
            $table->unsignedBigInteger('id_evento_fk');
            $table->foreign("id_cliente_fk")->references("id_events")->on("events");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};

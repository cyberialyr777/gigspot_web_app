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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comentario', length:500);
            $table->integer('calificacion');
            $table->timestamps();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('event_id');

            // $table->foreign("id_cliente_fk")->references("id_cliente")->on("clientes");
            // $table->foreign("id_cliente_fk")->references("id_events")->on("events");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};

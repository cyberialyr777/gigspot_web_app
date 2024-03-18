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
            $table->unsignedBigInteger('clients_id');
            $table->unsignedBigInteger('events_id');

            // $table->foreign("clients_id")->references("id")->on("clients");
            // $table->foreign("events_id")->references("id")->on("events");
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

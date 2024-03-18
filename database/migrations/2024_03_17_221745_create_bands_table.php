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
        Schema::create('bands', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("genre_id");
            $table->timestamps();

            // $table->foreign("id_usuario_fk")->references("id_usuario")->on("usuarios");
            // $table->foreign("id_genero_fk")->references("id_genero")->on("generos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bands');
    }
};

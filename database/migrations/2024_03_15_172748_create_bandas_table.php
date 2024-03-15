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
        Schema::create('bandas', function (Blueprint $table) {
            $table->id('id_banda');
            $table->string('nombre');
            $table->string('descripcion');
            $table->unsignedBigInteger("id_usuario_fk");
            $table->foreign("id_usuario_fk")->references("id_usuario")->on("usuarios");
            $table->unsignedBigInteger("id_cliente_fk");
            $table->foreign("id_cliente_fk")->references("id_cliente")->on("clientes");
            $table->unsignedBigInteger("id_genero_fk");
            $table->foreign("id_genero_fk")->references("id_genero")->on("generos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bandas');
    }
};

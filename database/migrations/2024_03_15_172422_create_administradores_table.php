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
        Schema::create('administradores', function (Blueprint $table) {
            $table->id('id_administrador');
            $table->string('nombre', length: 50);
            $table->string('apellido_paterno', length: 50);
            $table->string('apellido_materno', length: 50);
            $table->unsignedBigInteger("id_usuario_fk");
            $table->foreign("id_usuario_fk")->references("id_usuario")->on("usuarios");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradores');
    }
};

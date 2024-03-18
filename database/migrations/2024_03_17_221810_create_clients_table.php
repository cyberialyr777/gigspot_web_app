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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nombreUsuario');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->unsignedBigInteger("ticket_id");
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

            // $table->foreign("id_usuario_fk")->references("id_usuario")->on("usuarios");
            // $table->foreign("id_boletos_fk")->references("id_boleto")->on("boletos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

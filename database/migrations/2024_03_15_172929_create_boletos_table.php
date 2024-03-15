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
        Schema::create('boletos', function (Blueprint $table) {
            $table->id('id_boleto');
            $table->integer('precio');
            $table->unsignedBigInteger("id_evento_fk");
            $table->foreign("id_evento_fk")->references("id_events")->on("events");
            $table->unsignedBigInteger("id_zona_fk");
            $table->foreign("id_zona_fk")->references("id_zona")->on("zonas");
            $table->unsignedBigInteger("id_cliente_fk");
            $table->foreign("id_cliente_fk")->references("id_cliente")->on("clientes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boletos');
    }
};

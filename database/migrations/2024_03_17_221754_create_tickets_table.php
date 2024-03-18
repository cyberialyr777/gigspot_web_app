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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('precio');
            $table->unsignedBigInteger("event_id");
            $table->unsignedBigInteger("zone_id");
            $table->unsignedBigInteger("client_id");
            $table->timestamps();

            // $table->foreign("id_evento_fk")->references("id_events")->on("events");
            // $table->foreign("id_zona_fk")->references("id_zona")->on("zonas");
            // $table->foreign("id_cliente_fk")->references("id_cliente")->on("clientes");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};

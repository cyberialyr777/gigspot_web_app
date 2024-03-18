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
            $table->unsignedBigInteger("events_id");
            $table->unsignedBigInteger("zones_id");
            $table->unsignedBigInteger("clients_id");
            $table->timestamps();

            // $table->foreign("events_id")->references("id")->on("events");
            // $table->foreign("zones_id")->references("id")->on("zones");
            // $table->foreign("clients_id")->references("id")->on("clients");
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

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
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string("zona", length:50);
            $table->unsignedBigInteger("events_id");
            $table->unsignedBigInteger("ticket_avaliables_id");
            $table->timestamps();

            // $table->foreign("events_id")->references("id")->on("events");
            // $table->foreign("ticket_avaliables_id")->references("id")->on("ticket_avaliables");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};

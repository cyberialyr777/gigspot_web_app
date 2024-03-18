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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger("zones_id");
            $table->unsignedBigInteger("genres_id");
            $table->unsignedBigInteger("bands_id");
            $table->unsignedBigInteger("countrys_id");
            $table->unsignedBigInteger("states_id");
            $table->unsignedBigInteger("municips_id");
            $table->unsignedBigInteger("places_id");
            $table->timestamps();

            // $table->foreign("zones_id")->references("id")->on("zones");
            // $table->foreign("genres_id")->references("id")->on("genres");
            // $table->foreign("bands_id")->references("id")->on("bands");
            // $table->foreign("countrys_id")->references("id")->on("countrys");
            // $table->foreign("states_id")->references("id")->on("states");
            // $table->foreign("municips_id")->references("id")->on("municips");
            // $table->foreign("places_id")->references("id")->on("places");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};

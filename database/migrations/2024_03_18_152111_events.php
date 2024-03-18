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
        Schema::table('events', function (Blueprint $table) {

            $table->foreign("zones_id")->references("id")->on("zones");
            $table->foreign("genres_id")->references("id")->on("genres");
            $table->foreign("bands_id")->references("id")->on("bands");
            $table->foreign("countrys_id")->references("id")->on("countrys");
            $table->foreign("states_id")->references("id")->on("states");
            $table->foreign("municips_id")->references("id")->on("municips");
            $table->foreign("places_id")->references("id")->on("places");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

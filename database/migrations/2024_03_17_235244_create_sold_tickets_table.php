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
        Schema::create('sold_tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_boletos_fk");
            $table->timestamps();

            // $table->foreign("id_boletos_fk")->references("id_boletos")->on("boletos");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sold_tickets');
    }
};

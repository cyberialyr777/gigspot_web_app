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
        Schema::create('vendido_boletos', function (Blueprint $table) {
            $table->id("id_vendido_boleto");
            $table->unsignedBigInteger("id_boletos_fk");
            $table->foreign("id_boletos_fk")->references("id_boletos")->on("boletos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendido_boletos');
    }
};

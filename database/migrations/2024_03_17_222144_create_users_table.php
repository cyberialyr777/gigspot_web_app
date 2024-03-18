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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer("tipo_usuario");
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger("clients_id");
            $table->unsignedBigInteger("admins_id");
            $table->unsignedBigInteger("bands_id");
            $table->timestamps();

            // $table->foreign("clients_id")->references("id")->on("clients");
            // $table->foreign("admins_id")->references("id")->on("admins");
            // $table->foreign("bands_id")->references("id")->on("bands");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

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
            $table->unsignedBigInteger("zone_id");
            $table->unsignedBigInteger("genre_id");
            $table->unsignedBigInteger("band_id");
            $table->unsignedBigInteger("country_id");
            $table->unsignedBigInteger("state_id");
            $table->unsignedBigInteger("municip_id");
            $table->unsignedBigInteger("place_id");
            $table->unsignedBigInteger("comment_id");
            $table->timestamps();

            // $table->foreign("id_zona_fk")->references("id_zona")->on("zonas");
            // $table->foreign("id_genero_fk")->references("id_genero")->on("generos");
            // $table->foreign("id_banda_fk")->references("id_banda")->on("bandas");
            // $table->foreign("id_pais_fk")->references("id_pais")->on("paises");
            // $table->foreign("id_esatdo_fk")->references("id_estado")->on("estados");
            // $table->foreign("id_municipio_fk")->references("id_municipio")->on("municipios");
            // $table->foreign("id_lugar_fk")->references("id_lugar")->on("lugares");
            // $table->foreign("id_comentario_fk")->references("id_comentario")->on("comentarios");
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

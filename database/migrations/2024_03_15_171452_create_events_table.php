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
            $table->id('id_events');
            $table->date('fecha');
            $table->time('hora');
            $table->unsignedBigInteger("id_zona_fk");
            $table->foreign("id_zona_fk")->references("id_zona")->on("zonas");
            $table->unsignedBigInteger("id_genero_fk");
            $table->foreign("id_genero_fk")->references("id_genero")->on("generos");
            $table->unsignedBigInteger("id_banda_fk");
            $table->foreign("id_banda_fk")->references("id_banda")->on("bandas");
            $table->unsignedBigInteger("id_pais_fk");
            $table->foreign("id_pais_fk")->references("id_pais")->on("paises");
            $table->unsignedBigInteger("id_esatdo_fk");
            $table->foreign("id_esatdo_fk")->references("id_estado")->on("estados");
            $table->unsignedBigInteger("id_municipio_fk");
            $table->foreign("id_municipio_fk")->references("id_municipio")->on("municipios");
            $table->unsignedBigInteger("id_lugar_fk");
            $table->foreign("id_lugar_fk")->references("id_lugar")->on("lugares");
            $table->unsignedBigInteger("id_comentario_fk");
            $table->foreign("id_comentario_fk")->references("id_comentario")->on("comentarios");
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }


};

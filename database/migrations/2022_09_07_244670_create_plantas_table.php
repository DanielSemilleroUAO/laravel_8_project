<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('tipo_planta_id')->unsigned();
            $table->foreign('tipo_planta_id')->references('id')->on('tipo_planta');
            $table->integer('locacion_id')->unsigned();
            $table->foreign('locacion_id')->references('id')->on('locacion');
            $table->timestamp('fecha_coleccion')->nullable();
            $table->string('importancia', 40);
            $table->string('medida', 40);
            $table->integer('unidades_medida_id')->unsigned();
            $table->foreign('unidades_medida_id')->references('id')->on('unidades_medida');
            $table->integer('familia_id')->unsigned();
            $table->foreign('familia_id')->references('id')->on('familia');
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('genero');
            $table->integer('especie_id')->unsigned();
            $table->foreign('especie_id')->references('id')->on('especie');
            $table->integer('fotos_id')->unsigned();
            $table->foreign('fotos_id')->references('id')->on('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plantas');
    }
};

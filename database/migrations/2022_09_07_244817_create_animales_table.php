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
        Schema::create('animales', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nombre', 40);
            $table->integer('localidad_id')->unsigned();
            $table->foreign('localidad_id')->references('id')->on('localidad');
            $table->string('repositorio', 40);
            $table->integer('convenio_id')->unsigned();
            $table->foreign('convenio_id')->references('id')->on('convenio');
            $table->timestamp('fecha_colecta')->nullable();
            $table->integer('familia_id')->unsigned();
            $table->foreign('familia_id')->references('id')->on('familia');
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('genero');
            $table->integer('especie_id')->unsigned();
            $table->foreign('especie_id')->references('id')->on('especie');
            $table->string('identificador_alternativo', 10)->unique();
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
        Schema::dropIfExists('animales');
    }
};

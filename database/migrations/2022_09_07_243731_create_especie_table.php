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
        Schema::create('especie', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id', true, true);
            $table->string('nombre', 40);
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('genero');
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
        Schema::dropIfExists('especie');
    }
};

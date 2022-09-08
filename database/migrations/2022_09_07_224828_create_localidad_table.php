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
        Schema::create('localidad', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id', true, true);
            $table->string('nombre', 40);
            $table->string('pais', 40);
            $table->string('polaridad', 10);
            $table->double('latitud', 8, 4);
            $table->double('longitud', 8, 4);
            $table->double('altura');
            $table->string('comentarios', 180);
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
        Schema::dropIfExists('localidad');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Material extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {

            $table->increments('id');
            $table->string('titulo', 200);
            $table->unsignedInteger('anio_publicacion' );
            $table->unsignedInteger('nro_paginas');
            $table->enum('forma', [
                'Original',
                'Fotocopia',
            ])->default('Original');
            $table->enum('tipo', [
                'Libro', 'Tesis', 'Profocom', 'Revista'
            ])->default('Libro');

            $table->string('idioma', 15);
            $table->string('url', 500)->nullable();
            $table->string('observacion', 200)->nullable();
            $table->boolean('alta')->default(true);
            $table->enum('condicion', [
                'Bueno',
                'Regular',
                'Malo'
            ])->default('Bueno');
            $table->string('isbn', 20);
            $table->string('disponibilidad')->default(true);
            $table->string('descripcion', 200)->nullable();
            $table->string('catalogo', 30)->nullable();

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
    //
}
}

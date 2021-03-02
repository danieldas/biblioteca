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
            $table->unsignedInteger('aniopublic' );
            $table->unsignedInteger('nropaginas');
            $table->string('forma', 10);
            $table->string('tipo', 10);
            $table->string('idioma', 10);
            $table->string('urldescarga', 500);
            $table->string('observacion', 200);
            $table->string('estado', 5);
            $table->string('condicion', 20);
            $table->string('isbn', 20);
            $table->string('disponibilidad', 20);
            $table->string('descripcion', 200);
            $table->string('catalogo', 30);
            $table->smallInteger('ejemplares');

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

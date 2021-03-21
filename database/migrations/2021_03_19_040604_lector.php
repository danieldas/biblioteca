<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lector extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lector', function (Blueprint $table) {

            $table->increments('id');
            $table->string('expedido', 10);
            $table->string('nombre', 100);
            $table->string('apellido', 50);
            $table->string('tipo', 50);
            $table->string('password', 50);
            $table->string('direccion', 50);
            $table->unsignedInteger('celular' );
            $table->boolean('alta')->default(true);


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

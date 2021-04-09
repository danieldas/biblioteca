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
            $table->string('direccion', 50);
            $table->unsignedInteger('celular' );
            $table->boolean('alta')->default(true);
            
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->on('usuario');


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

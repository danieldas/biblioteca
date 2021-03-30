<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Descarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descarga', function (Blueprint $table) {

            $table->increments('id');
            $table->date('fecha');
            $table->unsignedInteger('lector_id');
            $table->foreign('lector_id')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->on('lector');

            $table->unsignedInteger('material_id');
            $table->foreign('material_id')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->on('material');

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

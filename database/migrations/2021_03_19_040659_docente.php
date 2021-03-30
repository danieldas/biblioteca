<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Docente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente', function (Blueprint $table) {

            $table->increments('id');
            $table->string('lugar_trabajo', 100);
            $table->unsignedInteger('lector_id');
            $table->foreign('lector_id')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->on('lector');


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

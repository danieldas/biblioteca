<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tesis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tesis', function (Blueprint $table) {

            $table->increments('id');
            $table->string('categoria', 30);
            $table->string('tutor', 100);
            $table->string('revisor', 100);
            $table->unsignedInteger('nroejemplares');
            $table->unsignedInteger('disponibles');

            $table->unsignedInteger('carrera_id');
            $table->foreign('carrera_id')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->on('carrera');

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

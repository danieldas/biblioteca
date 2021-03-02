<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MateriaMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_material', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('materia_id');
            $table->foreign('materia_id')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->on('materia');

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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AutorMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_material', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('autor_id');
            $table->foreign('autor_id')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->on('autor');

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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Documento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento', function (Blueprint $table) {

            $table->increments('id');
            $table->string('observacion', 200)->nullable();
            $table->date('fecha_presentacion');
            $table->date('fecha_retiro');
            $table->boolean('alta')->default(true);
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

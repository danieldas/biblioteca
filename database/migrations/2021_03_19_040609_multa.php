<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Multa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multa', function (Blueprint $table) {

            $table->increments('id');
            $table->string('descripcion', 200)->nullable();
            $table->boolean('alta')->default(true);
            $table->unsignedDecimal('monto',6,2)->nullable();
            $table->string('tipo', 200)->nullable();
            $table->unsignedInteger('prestamo_id');
            $table->foreign('prestamo_id')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->on('prestamo');

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

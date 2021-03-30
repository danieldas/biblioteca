<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo', function (Blueprint $table) {

            $table->increments('id');
            $table->string('modalidad', 50);
            $table->string('garantia', 20);
            $table->dateTime('fecha_prestamo');
            $table->date('fecha_limite');
            $table->dateTime('fecha_devolucion');
            $table->string('observacion', 200)->nullable();
            $table->boolean('alta')->default(true);

            $table->unsignedBigInteger('reserva_id');
            $table->foreign('reserva_id')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->on('reserva');
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

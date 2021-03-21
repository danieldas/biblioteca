<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reserva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->date('hora');
            $table->date('fin');
            $table->enum('estado', [
                'Activo',
                'Desactivo',
            ])->default('Activo');
            $table->unsignedInteger('material_id');
            $table->unsignedInteger('lector_id');

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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {

            $table->increments('id');
            $table->string('editorial', 50);
            $table->string('edicion', 20);
            $table->enum('procedencia', [
                'Compra',
                'Donación',
            ])->default('Compra');
            $table->unsignedDecimal('costo',6,2)->nullable();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Revista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revista', function (Blueprint $table) {

            $table->increments('id');
            $table->string('edicion', 30);
            $table->string('editorial', 50);
            $table->enum('procedencia', [
                'Compra',
                'Donación',
            ])->default('Compra');
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

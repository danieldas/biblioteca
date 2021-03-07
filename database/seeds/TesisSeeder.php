<?php

use Illuminate\Database\Seeder;
use App\Models\Tesis;

class TesisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tesis::create([

            'categoria' => 'primera',
            'tutor' => 'juan',
            'revisor' => 'pedro',
            'nroejemplares' => '2',
            'disponibles' => '8',
            'material_id' => '4',
            'carrera_id' => '1'
        ]);
        Tesis::create([

            'categoria' => 'primera',
            'tutor' => 'juan',
            'revisor' => 'julio',
            'nroejemplares' => '3',
            'disponibles' => '8',
            'material_id' => '5',
            'carrera_id' => '2'
        ]);
        Tesis::create([

            'categoria' => 'primera',
            'tutor' => 'cesar',
            'revisor' => 'julio',
            'nroejemplares' => '2',
            'disponibles' => '8',
            'material_id' => '6',
            'carrera_id' => '3'
        ]);
//        Tesis::create([
//
//            'categoria' => 'segunda',
//            'tutor' => 'maria',
//            'revisor' => 'soledad',
//            'nroejemplares' => '3',
//            'disponibles' => '6',
//            'material_id' => '8',
//            'carrera_id' => '3'
//        ]);
    }
}


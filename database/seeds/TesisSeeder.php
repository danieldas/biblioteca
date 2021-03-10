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

            'categoria' => 'proyecto de grado',
            'tutor' => 'juan',
            'revisor' => 'pedro',
            'material_id' => '5',
            'carrera_id' => '1'
        ]);
        Tesis::create([

            'categoria' => 'proyecto de grado',
            'tutor' => 'juan',
            'revisor' => 'julio',
            'material_id' => '6',
            'carrera_id' => '2'
        ]);
        Tesis::create([

            'categoria' => 'proyecto de grado',
            'tutor' => 'cesar',
            'revisor' => 'julio',
            'material_id' => '7',
            'carrera_id' => '3'
        ]);
        Tesis::create([

            'categoria' => 'proyecto de grado',
            'tutor' => 'maria',
            'revisor' => 'soledad',
            'material_id' => '8',
            'carrera_id' => '4'
        ]);
    }
}


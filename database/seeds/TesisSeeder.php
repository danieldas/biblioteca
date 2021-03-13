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

            'categoria' => 'Proyecto de grado',
            'tutor' => 'Juan',
            'revisor' => 'Pedro',
            'material_id' => '5',
            'carrera_id' => '1'
        ]);
        Tesis::create([

            'categoria' => 'Proyecto de grado',
            'tutor' => 'Juan',
            'revisor' => 'Julio',
            'material_id' => '6',
            'carrera_id' => '2'
        ]);
        Tesis::create([

            'categoria' => 'Proyecto de grado',
            'tutor' => 'Cesar',
            'revisor' => 'Julio',
            'material_id' => '7',
            'carrera_id' => '3'
        ]);
        Tesis::create([

            'categoria' => 'Proyecto de grado',
            'tutor' => 'Maria',
            'revisor' => 'Soledad',
            'material_id' => '8',
            'carrera_id' => '4'
        ]);
    }
}


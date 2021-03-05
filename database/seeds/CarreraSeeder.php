<?php

use Illuminate\Database\Seeder;
use App\Models\Carrera;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create([

            'nombre' => 'Fisica',

        ]);

        Carrera::create([

            'nombre' => 'Matematica',

        ]);

        Carrera::create([

            'nombre' => 'Quimica',

        ]);


    }
}



<?php

use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::create([

            'editorial' => 'kipus',
            'edicion' => 'primera',
            'procedencia' => 'compra',
            'material_id' => '1',
            'costo' => '200',

        ]);
        Libro::create([

            'editorial' => 'Plural',
            'edicion' => 'Primera',
            'procedencia' => 'Donación',
            'material_id' => '2',
            'costo' => '150',

        ]);
        Libro::create([

            'editorial' => 'Santillana',
            'edicion' => 'Primera',
            'procedencia' => 'Compra',
            'material_id' => '3',
            'costo' => '200',

        ]);
       Libro::create([

            'editorial' => 'kipus',
            'edicion' => 'Segunda',
            'procedencia' => 'Donación',
            'material_id' => '4',
            'costo' => '100',

        ]);
    }
}

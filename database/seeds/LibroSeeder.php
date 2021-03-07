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
            'procedencia' => 'donado',
            'material_id' => '1',
            'costo' => '200',

        ]);
        Libro::create([

            'editorial' => 'Plural',
            'edicion' => 'primera',
            'procedencia' => 'donado',
            'material_id' => '2',
            'costo' => '150',

        ]);
        Libro::create([

            'editorial' => 'Santillana',
            'edicion' => 'primera',
            'procedencia' => 'donado',
            'material_id' => '3',
            'costo' => '200',

        ]);
        Libro::create([

            'editorial' => 'kipus',
            'edicion' => 'segunada',
            'procedencia' => 'nuevo',
            'material_id' => '4',
            'costo' => '100',

        ]);
    }
}

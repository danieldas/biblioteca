<?php

use Illuminate\Database\Seeder;
use App\Models\Revista;

class RevistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Revista::create([

            'edicion' => 'primera',
            'editorial' => 'Kipus',
            'material_id' => '7',
            'procedencia' => 'donado'

        ]);
       Revista::create([

            'edicion' => 'Primera',
            'editorial' => 'Plural',
            'material_id' => '8',
            'procedencia' => 'Donado'

        ]);
       Revista::create([

            'edicion' => 'Santillana',
            'editorial' => 'primera',
            'material_id' => '9',
            'procedencia' => 'donado'

        ]);
//        Revista::create([
//
//            'edicion' => 'Kipus',
//            'editorial' => 'segunda',
//            'material_id' => '12',
//            'procedencia' => 'nuevo'
//
//        ]);
    }
}

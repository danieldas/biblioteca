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

            'edicion' => 'Primera',
            'editorial' => 'Kipus',
            'material_id' => '9',
            'procedencia' => 'Compra'

        ]);
       Revista::create([

            'edicion' => 'Primera',
            'editorial' => 'Plural',
            'material_id' => '10',
            'procedencia' => 'Compra'

        ]);
       Revista::create([

            'edicion' => 'Santillana',
            'editorial' => 'Primera',
            'material_id' => '11',
            'procedencia' => 'Compra'

        ]);
        Revista::create([

            'edicion' => 'Primera',
            'editorial' => 'Kipus',
            'material_id' => '12',
            'procedencia' => 'Compra'

        ]);
    }
}

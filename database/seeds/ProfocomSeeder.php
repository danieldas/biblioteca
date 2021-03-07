<?php

use Illuminate\Database\Seeder;
use App\Models\Profocom;

class ProfocomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profocom::create([

            'codigo' => '444',
            'material_id' => '10',

        ]);
        Profocom::create([

            'codigo' => '555',
            'material_id' => '11',

        ]);
        Profocom::create([

            'codigo' => '666',
            'material_id' => '12',

        ]);
        Profocom::create([

            'codigo' => '777',
            'material_id' => '12',

        ]);
    }
}

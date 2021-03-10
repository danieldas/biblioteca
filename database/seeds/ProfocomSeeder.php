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
            'material_id' => '13',

        ]);
        Profocom::create([

            'codigo' => '555',
            'material_id' => '14',

        ]);
        Profocom::create([

            'codigo' => '666',
            'material_id' => '15',

        ]);
        Profocom::create([

            'codigo' => '777',
            'material_id' => '16',

        ]);
    }
}

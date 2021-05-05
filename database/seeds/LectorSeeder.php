<?php

use Illuminate\Database\Seeder;
use App\Models\Lector;

class LectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lector::create([

            'direccion' => 'Tarapaca',
            'celular' => 7845512,
            'usuario_id' => 2,
            

        ]);

    }
}


<?php

use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autor::create([

            'nombre' => 'Jose',

        ]);

        Autor::create([

            'nombre' => 'Juan',

        ]);

        Autor::create([

            'nombre' => 'Pedro',

        ]);

        Autor::create([

            'nombre' => 'Luis',

        ]);

        Autor::create([

            'nombre' => 'Miguel',

        ]);

        Autor::create([

            'nombre' => 'Angel',

        ]);

        Autor::create([

            'nombre' => 'Rodrigo',

        ]);

        Autor::create([

            'nombre' => 'Andres',

        ]);

        Autor::create([

            'nombre' => 'Carlos',

        ]);

        Autor::create([

            'nombre' => 'Sofia',

        ]);

    }
}


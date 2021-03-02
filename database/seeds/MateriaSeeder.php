<?php

use Illuminate\Database\Seeder;
use App\Models\Materia;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([

            'nombre' => 'Programacion',
            'sigla' => 'PPP105'
        ]);

        Materia::create([

            'nombre' => 'Redes',
            'sigla' => 'TTT787'

        ]);

        Materia::create([

            'nombre' => 'Mantenimiento',
            'sigla' => 'EES555'
        ]);

        Materia::create([

            'nombre' => 'Analisis',
            'sigla' => 'QQQ777'
        ]);

        Materia::create([

            'nombre' => 'Matematica',
            'sigla' => 'CCC444'
        ]);

        Materia::create([

            'nombre' => 'lenguaje',
            'sigla' => 'RRR333'
        ]);

        Materia::create([

            'nombre' => 'Sistema',
            'sigla' => 'WWD856'
        ]);

        Materia::create([

            'nombre' => 'Wed',
            'sigla' => 'YYY414'
        ]);

        Materia::create([

            'nombre' => 'Desarollo',
            'sigla' => 'PPP451'
        ]);

        Materia::create([

            'nombre' => 'Sociales',
            'sigla' => 'NNN666'
        ]);

    }
}

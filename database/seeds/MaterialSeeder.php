<<?php

use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([

            'titulo' => 'Programacion',
            'aniopublic' => '2015',
            'nropaginas' => '50',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => 'TTT444',
            'observacion' => 'antugua',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'EEE7',
            'ejemplares' => '2'
        ]);

        Material::create([

            'titulo' => 'Redes',
            'aniopublic' => '2007',
            'nropaginas' => '60',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => 'TTT444',
            'observacion' => 'antugua',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'EEE7',
            'ejemplares' => '2'
        ]);

        Material::create([

            'titulo' => 'sistema',
            'aniopublic' => '2002',
            'nropaginas' => '40',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => 'TTT444',
            'observacion' => 'nuevo',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P98',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => '896',
            'ejemplares' => '4'
        ]);
        Material::create([

            'titulo' => 'Robotica',
            'aniopublic' => '2006',
            'nropaginas' => '80',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => '878551',
            'observacion' => 'antugua',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'EEE7',
            'ejemplares' => '2'
        ]);
        Material::create([

            'titulo' => 'Matematica',
            'aniopublic' => '2011',
            'nropaginas' => '70',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => '578514',
            'observacion' => 'nueva',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'EEE7',
            'ejemplares' => '2'
        ]);
        Material::create([

            'titulo' => 'Sociales',
            'aniopublic' => '2015',
            'nropaginas' => '90',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => '787952',
            'observacion' => 'antugua',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'EEE7',
            'ejemplares' => '2'
        ]);
        Material::create([

            'titulo' => 'Biologia',
            'aniopublic' => '2014',
            'nropaginas' => '60',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => '333341',
            'observacion' => 'antugua',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'EEE7',
            'ejemplares' => '2'
        ]);
        Material::create([

            'titulo' => 'filosofia',
            'aniopublic' => '2003',
            'nropaginas' => '100',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => '11212',
            'observacion' => 'antugua',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'EEE7',
            'ejemplares' => '2'
        ]);
        Material::create([

            'titulo' => 'Talleres',
            'aniopublic' => '2006',
            'nropaginas' => '80',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => '444541',
            'observacion' => 'antugua',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'EEE7',
            'ejemplares' => '2'
        ]);
        Material::create([

            'titulo' => 'ingles',
            'aniopublic' => '2018',
            'nropaginas' => '50',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => '6666674',
            'observacion' => 'antugua',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'EEE7',
            'ejemplares' => '2'
        ]);
        Material::create([

            'titulo' => 'Quimica',
            'aniopublic' => '2019',
            'nropaginas' => '70',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => '748542',
            'observacion' => 'antugua',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'EEE7',
            'ejemplares' => '2'
        ]);
        Material::create([

            'titulo' => 'Fisica',
            'aniopublic' => '2009',
            'nropaginas' => '60',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => '78964',
            'observacion' => 'antugua',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'EEE7',
            'ejemplares' => '2'
        ]);
        Material::create([

            'titulo' => 'Lenguaje',
            'aniopublic' => '2000',
            'nropaginas' => '70',
            'forma' => 'mediana',
            'tipo' => 'libro',
            'idioma' => 'español',
            'urldescarga' => '754122',
            'observacion' => 'antugua',
            'estado' => '1',
            'condicion' => 'buena',
            'isbn' => 'P56',
            'disponibilidad' => 'libre',
            'descripcion' => 'anillado',
            'catalogo' => 'E57',
            'ejemplares' => '2'
        ]);
    }
}

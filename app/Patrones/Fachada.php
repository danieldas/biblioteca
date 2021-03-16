<?php


namespace App\Patrones;
use App\Models\Materia;
use App\Models\Autor;

class Fachada
{
    public static function usuarioEstados()
    {
        return array(
            true=> 'Alta',
            false => 'Baja'
        );
    }

    public static function getRoles()
    {
        return array(
            'Administrador'=> 'Administrador',
            'Funcionario' => 'Funcionario'
        );
    }
    public static function getFormas()
    {
        return [
            'Original' => 'Original',
            'Fotocopia' => 'Fotocopia',
        ];
    }
    public static function getIdiomas()
    {
        return [
            'Español' => 'Español',
            'Ingles' => 'Inglés',
            'Frances' => 'Francés',
            'Aymara' => 'Aymara',
            'Quechua' => 'Quechua',
            'Aleman' => 'Alemán',
        ];
    }

    public static function getCondiciones()
    {
        return [
            'Bueno' => 'Bueno',
            'Regular' => 'Regular',
            'Malo' => 'Malo',
        ];
    }
    public static function getProcedencias()
    {
        return [
            'Compra' => 'Compra',
            'Donación' => 'Donación',
        ];
    }
    public static function getCategorias()
    {
        return [
            'Proyecto de grado' => 'Proyecto de grado',
            'Tesis de grado' => 'Tesis de grado',
            'Trabajo dirigido' => 'Trabajo dirigido',
        ];
    }
    public static function getAutores()
    {
        $autores= Autor::where('alta', true)->get()->pluck('nombre', 'id')->toArray();
        return $autores;
    }

    public static function getMaterias()
    {
        $materias= Materia::where('alta', true)->get()->pluck('nombre', 'id')->toArray();
        return $materias;
    }

}

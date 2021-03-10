<?php


namespace App\Patrones;

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
}

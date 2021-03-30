<?php


namespace App\Models;


use App\Http\Controllers\MaterialController;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'material';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'titulo',
        'anio_publicacion',
        'nro_paginas',
        'forma',
        'tipo',
        'idioma',
        'url',
        'observacion',
        'condicion',
        'isbn',
        'disponibilidad',
        'descripcion',
        'catalogo'
    ];
    public function getEscritoresAttribute()
    {
        $controlador = new MaterialController();
        return $controlador->getAutores($this->id);
    }
    public function getAsignaturasAttribute()
    {
        $controlador = new MaterialController();
        return $controlador->getMaterias($this->id);
    }

    public function libro()
    {
        return $this->hasOne(\App\Models\Libro::class, 'material_id');
    }

    public function revista()
    {
        return $this->hasOne(\App\Models\Revista::class, 'material_id');
    }

    public function tesis()
    {
        return $this->hasOne(\App\Models\Tesis::class, 'material_id');
    }

    public function profocom()
    {
        return $this->hasOne(\App\Models\Profocom::class, 'material_id');
    }

}

<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'material';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'titulo',
        'aniopublic',
        'nropaginas',
        'forma',
        'tipo',
        'idioma',
        'urldesacarga',
        'observacion',
        'estado',
        'condicion',
        'isbn',
        'disponibilidad',
        'descripcion',
        'catalogo',
        'ejemplares'
    ];
}

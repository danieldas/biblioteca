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
        'urldescarga',
        'observacion',
        'estado',
        'condicion',
        'isbn',
        'disponibilidad',
        'descripcion',
        'catalogo',
        'ejemplares'
    ];

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

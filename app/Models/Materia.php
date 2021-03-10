<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materia';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'nombre',
        'sigla',
        'alta'
    ];

   
}

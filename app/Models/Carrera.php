<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carrera';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'nombre',
        'alta'
    ];
}

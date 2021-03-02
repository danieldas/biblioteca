<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libro';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'editorial',
        'edicion',
        'procedencia',
        'material_id',
        'costo'
    ];
}

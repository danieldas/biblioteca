<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'material';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'nombre',
        'editorial',
        'edicion'
    ];
}

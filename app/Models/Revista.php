<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
    protected $table = 'revista';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'edicion',
        'editorial',
        'material_id',
        'procedencia'
    ];
}

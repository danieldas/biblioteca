<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AutorMaterial extends Model
{
    protected $table = 'autor_material';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'autor_id',
        'material_id'
    ];
}

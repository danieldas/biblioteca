<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MateriaMaterial extends Model
{
    protected $table = 'materia_material';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'materia_id',
        'material_id'
    ];
}

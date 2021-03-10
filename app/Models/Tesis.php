<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tesis extends Model
{
    protected $table = 'tesis';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'categoria',
        'tutor',
        'revisor',
        'material_id',
        'carrera_id'
    ];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}

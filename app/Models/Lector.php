<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Lector extends Model
{
    protected $table = 'lector';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'direccion',
        'celular',
        'alta',
        'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

}

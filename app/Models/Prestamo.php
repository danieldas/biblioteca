<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = 'Prestamo';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'modalidad',
        'garantia',
        'fecha_prestamo',
        'fecha_limite',
        'fecha_devolucion',
        'observacion',
        'alta'
        
    ];
}

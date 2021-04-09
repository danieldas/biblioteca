<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'Reserva';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'inicio',
        'fin',
        'Estado'
        
    ];
}

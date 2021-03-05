<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Profocom extends Model
{
    protected $table = 'profocom';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'codigo',
        'material_id'
    ];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

}

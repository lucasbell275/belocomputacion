<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    public function getRouteKeyName()
    {
    return 'slug';
    }   
    protected $table='computadora';
    
    protected $fillable = [
        'nombre',
        'descripcion',
        'marca',
        'imagen',
        'precio',
        'stock',
        'slug',
        'oferta',

    ];
}

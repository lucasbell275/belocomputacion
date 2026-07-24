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
        'marca_id',
        'imagen',
        'precio',
        'descuento',
        'stock',
        'slug',
        'oferta',

    ];

    public function infoCompus(){
        return $this->hasMany(InfoCompu::class);
    }

    public function marca(){
        return $this->belongsTo(Marca::class);
    }
}

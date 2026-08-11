<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IntentoContacto extends Model
{
    protected $table='intento_contacto';

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'razon',
        'mensaje',
    ];

        public function getRouteKeyName()
    {
        return 'id';
    }
}

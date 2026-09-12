<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nosotros extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'imagen', 'introduccion', 'card_1_titulo', 'card_1_texto', 'card_2_texto', 'card_2_titulo', 'card_3_texto', 'card_3_titulo', 'cierre' ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $casts = [
        'cards_data' => 'array',
    ];

    protected $fillable = [
        'titulo',
        'descripcion',
        'fondo',
        'banner_header',
        'cards_data',
    ];

    protected $table = 'home';
}

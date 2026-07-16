<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['nombre', 'imagen'];

    public function computadoras()
    {
        return $this->hasMany(Computadora::class);
    }
}

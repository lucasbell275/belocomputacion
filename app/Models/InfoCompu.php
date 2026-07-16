<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class InfoCompu extends Model
{
    protected $table = 'info_compu';
    protected $fillable = ['computadora_id', 'nombre', 'valor'];
    
    public function computadora(){
        return $this->belongsTo(Computadora::class);
    }

}

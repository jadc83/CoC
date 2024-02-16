<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    public function personaje(){
        return $this->belongsTo(Personaje::class);
    }

    public function objetos(){
        return $this->belongsToMany(Objeto::class, 'inventario_objetos')->withPivot('cantidad');;
    }
}

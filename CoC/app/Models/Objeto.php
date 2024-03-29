<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    use HasFactory;

    public function inventarios(){
        return $this->belongsToMany(Inventario::class, 'mochilas')->withPivot('cantidad');
    }

    public function mochila()
    {
        return $this->belongsTo(Mochila::class);
    }
}

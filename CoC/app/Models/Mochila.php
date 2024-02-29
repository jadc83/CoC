<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mochila extends Model
{
    use HasFactory;
    public function inventario()
    {
        return $this->belongsTo(Inventario::class);
    }
    public function objeto()
    {
        return $this->belongsTo(Objeto::class);
    }
}

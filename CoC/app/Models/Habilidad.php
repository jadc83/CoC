<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;
    protected $table = 'habilidades';
    protected $fillable = [
        'habilidad',
        'prob',
        'Descripcion' // Agrega el nombre de la columna aquí
        // Otros campos permitidos para asignación masiva...
    ];

}

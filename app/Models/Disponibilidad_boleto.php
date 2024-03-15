<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilidad_boleto extends Model
{
    use HasFactory;

    protected $fillable = [
        "cantidad_disponible",
        "fecha_disponibilidad",
    ];
}

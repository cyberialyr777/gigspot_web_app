<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banda extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'id_bandas_fk'
    ];

    protected $primaryKey = 'id_bandas';
}

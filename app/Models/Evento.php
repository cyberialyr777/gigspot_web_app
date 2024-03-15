<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_events';

    protected $fillable = [
        'fecha',
        'hora',
        'id_zonas',
        'id_genero',
        'id_banda',
        'id_pais',
        'id_estado',
        'id_municipio',
        'id_lugar'
    ];
}

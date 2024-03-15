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
        'id_zonas_fk',
        'id_genero_fk',
        'id_banda_fk',
        'id_pais_fk',
        'id_estado_fk',
        'id_municipio_fk',
        'id_lugar_fk'
    ];

    public function Pais(){
        return $this->belongsTo(Pais::class);
    }
}

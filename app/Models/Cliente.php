<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'id_clientes_fk'
    ];
    protected $primaryKey = 'id_clientes';
}

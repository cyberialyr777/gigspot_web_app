<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'precio',
        'id_boletos_fk'
    ];

    protected $primaryKey = 'id_boletos';
}

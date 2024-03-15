<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_municipios';
    
    protected $fillable = [
        'municipio'
    ];
}

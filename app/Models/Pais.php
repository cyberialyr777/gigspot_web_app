<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_paises';

    protected $fillable = [
        'pais'
    ];

    public function Evento(){
        return $this->hasOne(Evento::class);
    }  
}

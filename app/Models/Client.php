<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreUsuario',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
    ];

    public function user() :  BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments() :  MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
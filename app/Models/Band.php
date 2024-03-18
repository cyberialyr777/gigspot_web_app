<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Band extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function genre() : BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(user::class);
    }
}

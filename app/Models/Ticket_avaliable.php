<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket_avaliable extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad_disponible',
        'fecha_disponibilidad',
        ];

        public function ticket(): BelongsTo
        {
            return $this->belongsTo(Ticket::class);
        }
}

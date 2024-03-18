<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable= ['precio'];



    public function soldTickets(): HasMany
    {
        return $this->hasMany(Sold_ticket::class);
    }

    public function availableTickets(): HasMany
    {
        return $this->hasMany(Ticket_avaliable::class);
    }

    public function zone(): BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Zone extends Model
{
    use HasFactory;

    protected $fillable = ['zona'];

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function ticketsAvaliable(): HasMany
    {
        return $this->hasMany(Ticket_avaliable::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}

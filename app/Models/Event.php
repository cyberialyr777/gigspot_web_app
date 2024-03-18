<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Event extends Model
{
    use HasFactory;


    public function comments() : MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function zone(): BelongsTo
    {
        return $this->belongsTo(Zone::class);
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function band(): BelongsTo
    {
        return $this->belongsTo(Band::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function state() : BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function municipality() : BelongsTo
    {
        return $this->belongsTo(Municip::class);
    }

    public function place() : BelongsTo
    {
        return $this->belongsTo(Place::class);
    }

}

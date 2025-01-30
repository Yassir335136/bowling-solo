<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Spel extends Model
{
    use HasFactory;

    protected $table = 'Spel';

    protected $fillable = [
        'PersoonId', 'ReserveringId'
    ];

    public function persoon() : BelongsTo
    {
        return $this->belongsTo(User::class, 'PersoonId');
    }

    public function reservering() : BelongsTo
    {
        return $this->belongsTo(Reservering::class, 'ReserveringId');
    }

    public function uitslag() : HasMany
    {
        return $this->hasMany(Uitslag::class, 'SpelId');
    }
}

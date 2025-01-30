<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Uitslag extends Model
{
    use HasFactory;

    protected $table = 'Uitslag';

    protected $fillable = [
        'SpelId', 'AantalPunten'
    ];

    public function spel() : BelongsTo
    {
        return $this->belongsTo(Spel::class, 'SpelId');
    }
}

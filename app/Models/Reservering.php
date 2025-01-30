<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reservering extends Model
{
    use HasFactory;

    protected $table = 'Reservering';

    protected $fillable = [
        'PersoonId', 'OpeningstijdId', 'TariefId', 'BaanId', 'PakketOptieId', 'ReserveringStatusId',
        'Reserveringsnummer', 'Datum', 'AantalUren', 'BeginTijd', 'EindTijd', 'AantalVolwassen', 'AantalKinderen'
    ];

    public function persoon() : BelongsTo
    {
        return $this->belongsTo(User::class, 'PersoonId');
    }

    public function spellen() : HasMany
    {
        return $this->hasMany(Spel::class, 'ReserveringId');
    }
}

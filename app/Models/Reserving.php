<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserving extends Model
{
    /** @use HasFactory<\Database\Factories\ReservingFactory> */
    use HasFactory;

    public function GetpersonNameAttribute()
    {
        return $this->person->callingName;
    }

    public function person()
    {   //     join to get the person on the reservation
        return $this->hasOne(Person::class, 'id', 'personId');
    }

    public function alley()
    {
        return $this->hasOne(Alley::class, 'id', 'alleyId');
    }

    protected $fillable = [
        'alleyId'
    ];
}

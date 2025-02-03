<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\DateTimeFormat;


class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    protected $casts = [
        'startDateTime' => DateTimeFormat::class,
        'endDateTime' => DateTimeFormat::class,
    ];


    public function GetfullNameAttribute()
    {
        $user = $this->user;

        return $user->first_name . " " . $user->last_name;
    }


    // this will call for a join between the user and
    // reservation in a hasone > belongtomany relationship.
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'userId');
    }
}

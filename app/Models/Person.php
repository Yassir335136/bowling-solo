<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory;


    public function typePersoon()
    {
        // inner join basically
        return $this->hasOne(TypePersoon::class, "id", "TypePersoonId");
    }
}

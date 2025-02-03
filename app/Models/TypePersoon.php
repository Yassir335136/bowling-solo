<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypePersoon extends Model
{
    protected $table = 'type_persoons';

    protected $fillable = [
        'Name',
        'IsActive',
        'created_at',
        'updated_at'
    ];
}

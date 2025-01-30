<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['reservations_id', 'name', 'score', 'isactive', 'comment'];
    protected $table = 'scores';
   
}

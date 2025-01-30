<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Row extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'HasFences',
        'IsVip',
        'IsActive',
        'comment'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class DateTimeFormat implements CastsAttributes
{
    public function get($model, string $key, $value, array $attributes)
    {
        return $value ? Carbon::parse($value)->format('d-m-Y H:i') : null;
    }

    public function set($model, string $key, $value, array $attributes)
    {
        return $value ? Carbon::parse($value)->format('Y-m-d H:i:s') : null;
    }
}

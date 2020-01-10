<?php

namespace Larabookir\Gateway\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    public function gateway()
    {
        return $this->belongsTo(Gateway::class);
    }

    public function merchantable()
    {
        return $this->morphTo();
    }
}

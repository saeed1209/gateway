<?php

namespace Larabookir\Gateway\Models;

use Illuminate\Database\Eloquent\Model;

class Mellat extends Model
{
    public function merchants()
    {
        return $this->morphMany(Merchant::class,'merchantable');
    }
}

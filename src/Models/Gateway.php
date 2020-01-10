<?php

namespace Larabookir\Gateway\Models;

use Illuminate\Database\Eloquent\Model;

class Gateway extends Model
{
    public function merchants()
    {
        return $this->hasMany(Merchant::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

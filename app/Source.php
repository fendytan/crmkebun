<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

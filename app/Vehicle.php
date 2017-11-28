<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function departure_logs()
    {
        return $this->hasMany(DepartureLog::class);
    }
}

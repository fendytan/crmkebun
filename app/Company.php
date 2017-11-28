<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }

    public function sources()
    {
        return $this->hasMany(Sources::class);
    }

    public function users()
    {
        return $this->hasMany(Models\Auth\User::class);
    }
}

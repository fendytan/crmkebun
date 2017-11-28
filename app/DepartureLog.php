<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartureLog extends Model
{
    protected $fillable = [
        'document_id', 'date', 'vehicle_id', 'weight', 'source_id', 'destination_id', 'user_id'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}

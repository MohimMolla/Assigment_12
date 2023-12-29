<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'trip_from',
        'trip_to',
        'trip_location_name',
        
    ];

    public function fromTrip()
{
    return $this->belongsTo(Trip::class, 'trip_from', 'id');
}

public function toTrip()
{
    return $this->belongsTo(Trip::class, 'trip_to', 'id');
}
}

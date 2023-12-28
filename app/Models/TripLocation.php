<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'trip_from',
        'trip_to',
        
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

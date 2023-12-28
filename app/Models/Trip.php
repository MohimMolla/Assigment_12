<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];

    public function tripLocationsFrom()
    {
        return $this->hasMany(TripLocation::class, 'trip_from', 'id');
    }

    public function tripLocationsTo()
    {
        return $this->hasMany(TripLocation::class, 'trip_to', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverTrafficConviction extends Model
{
    use HasFactory;
    protected $fillable = [
        'driver_id',
        'no_traffic_conviction',
        'location',
        'date',
        'charges',
        'penalty',
    ];
}

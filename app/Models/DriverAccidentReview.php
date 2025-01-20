<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverAccidentReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'no_accident_to_report',
        'date',
        'description',
        'fatalities',
        'injuries',
        'vehicle_type',
        // Add other fields as needed
    ];
}

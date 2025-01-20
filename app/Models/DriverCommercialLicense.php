<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverCommercialLicense extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'driver_id',
        'name',
        'other_name',
        'cdl_type',
        'endorsement',
        'license_expiration_date',
        'air_brake_restriction',
        'transmission_restriction',
        'years_of_cdl_exp',
        'current_driver',
        'state',
        'current_dot_medical_card',
        'dot_medical_card_exp_date',
        'dry_van',
        'doubles',
        'flatbed',
        'tanker',
        'reefer',
        'switching',
        'dump',
        'cdl_B',
        // Add other fields as needed
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverAdditionalLicense extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'state',
        'licenses_no',
        'class',
        'endorsement',
        'exp_date',
        'any_licenses',
        'date_suspended_1',
        'details_1',
        'date_suspended_2',
        'details_2',
        'date_suspended_3',
        'details_3',
        'convicted_for_driving',
        'date_of_charge_1',
        'convicted_details_1',
        'date_of_charge_2',
        'convicted_details_2',
        'date_of_charge_3',
        'convicted_details_3',
        'alcohol_testing_rules',
        'completed_duty_requirement',
        'convicted_of_felony',
        'des_of_offence_1',
        'des_of_offence_2',
        'date_of_convicted_1',
        'date_of_convicted_2',
        'country_city_state_of_convicted_1',
        'country_city_state_of_convicted_2',
        // Add other fields as needed
    ];
}

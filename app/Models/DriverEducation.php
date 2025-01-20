<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverEducation extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'driver_id',
        'school_name_and_location_of_school',
        'school_years_attended',
        'school_diploma_certificate',
        'college_name_and_location_of_school',
        'college_years_attended',
        'college_diploma_certificate',
        'business_name_and_location_of_school',
        'business_years_attended',
        'business_diploma_certificate',
        'special_courses',
        'driving_awards	',
        // Add other fields as needed
    ];
}

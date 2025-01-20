<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverApplications extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'job_applied_for',
        'firstname',
        'lastname',
        'social_security_no',
        'date_of_birth',
        'mobile_no',
        'other_mobile_no',
        'email_address',
        'present_address',
        'phone_no',
        'city',
        'state',
        'zip',
        'country',
        'yrs_of_this_address',
        'date_applied',
        // Add other fields as needed
    ];
}

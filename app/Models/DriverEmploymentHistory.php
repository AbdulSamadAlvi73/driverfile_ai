<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverEmploymentHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'driver_id',
        'currently_working',
        'recent_job',
        'company',
        'supervisor',
        'supervisor_phone',
        'salary',
        'street_address',
        'city',
        'state',
        'zip_code',
        'position_held',
        'from_date',
        'to_date',
        'reason_for_leaving',
        'hauling_what',
        'number_of_month',
        'equipment',
        'FMCSRs',
        'CFR',
        'des_of_gap',
        'from_date_gap',
        'to_date_gap',
        'contact_current_emp',
        // Add other fields as needed
    ];
}

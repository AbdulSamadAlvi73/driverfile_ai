<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverAuthorisation extends Model
{
    use HasFactory;
    protected $fillable = [
        'driver_id',
        'application_investigation',
        'additional_info',
        'print_name',
        'employee_signature',
    ];
}

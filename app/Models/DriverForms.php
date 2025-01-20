<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverForms extends Model
{
    use HasFactory;
    protected $fillable = [
        'form_name',
        'driver_id'
    ];
}

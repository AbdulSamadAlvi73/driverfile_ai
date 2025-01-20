<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'legal_name',
        'display_name',
        'company_url',
        'state',
        'address',
        'company_contact_number',
        'company_logo',
        // Add other fields as needed
    ];
}

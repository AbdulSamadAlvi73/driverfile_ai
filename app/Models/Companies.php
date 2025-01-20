<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Companies extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = [
        'username', // Add 'username' to the $fillable array
        'email',
        'password',
        'phone_no',
        'zip_code',
        'company_code'
    ];
    
    use HasFactory;
}

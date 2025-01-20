<?php

namespace App\Http\Controllers;

use App\Models\DriverForms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DriverFromsController extends Controller
{
public function storeDriverForm(Request $request)
{
    // Validate the request data if necessary
    
    // Store the form data in the driver_forms table
    DriverForms::create([
        'form_name' => $request->form_name,
        'driver_id' => $request->application_id
    ]);
    
    return response()->json(['message' => 'The form has been sent to the driver'], 200);
}
}

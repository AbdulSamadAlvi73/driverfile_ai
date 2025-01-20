<?php

namespace App\Http\Controllers;
use App\Models\CompanyForms;
use App\Models\DriverForms;
use Illuminate\Http\Request;
use App\Models\DriverApplications;
use App\Http\Controllers\Controller;

class DriverProfileController extends Controller
{

    public function driverProfile($id)
    {
        // Fetch the driver's details based on the ID
        $driver = DriverApplications::findOrFail($id);
        
        $companyId = auth()->id();
        $companyForms = CompanyForms::where('company_id', $companyId)->get();
        $driverForms = DriverForms::where('driver_id', $id)->get(); 
    
        // Check if $driverForms is null, if so, set it to an empty array
        if ($driverForms === null) {
            $driverForms = [];
        }
    
        // Pass the driver's details to the view
        return view('pages.driverProfile', compact('driver', 'companyForms', 'driverForms'));
    }
    


}

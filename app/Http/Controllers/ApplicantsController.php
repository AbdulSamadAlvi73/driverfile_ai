<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\CompanyForms;
use App\Models\DriverForms;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Models\DriverApplications;
use App\Http\Controllers\Controller;

class ApplicantsController extends Controller
{
 public function applicants()
{
    $companyId = auth()->id();

    // Fetch the user from the database
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    $driverApplications = DriverApplications::where('company_id', $companyId)->get();

    // Fetch all the form names associated with the company
    $companyForms = CompanyForms::where('company_id', $companyId)->get();

    // Add this code here
    $driverApplications->each(function ($application) use ($companyForms) {
        $application->isNew = $application->created_at >= now()->subDay(); // Change the time condition as needed
        // $application->companyForms = $companyForms;
    });

    if ($company) {
        $display_name = $companyDetails->display_name ?? null;
        $company_logo = $companyDetails->company_logo ?? null;

       // Populate the $driverSentForms array
        $driverSentForms = [];

        foreach ($driverApplications as $application) {
            $sentForms = DriverForms::where('driver_id', $application->id)
                                    ->pluck('form_name')
                                    ->all();
            $driverSentForms[$application->id] = $sentForms;
        }

        // Pass both the list of all company forms and the list of forms sent to each driver to the view
        return view('pages.applicants', [
            'display_name' => $display_name,
            'company_logo' => $company_logo,
            'driverApplications' => $driverApplications,
            'companyForms' => $companyForms,
            'driverSentForms' => $driverSentForms
        ]);

    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}

    
    
    
public function updateStatus(Request $request, $id)
{
    // Validate the incoming request
    $request->validate([
        'status' => 'required|string|in:Processing,Phone Screen,Interview,Orientation,Hired,Rejected,Holed,Other,Saved. Incompleted'
    ]);

    try {
        // Find the driver application
        $application = DriverApplications::findOrFail($id);
        
        // Update the status
        $application->status = $request->status;
        $application->save();
        
        // Return a success response
        return response()->json(['message' => 'Status updated successfully']);
    } catch (\Exception $e) {
        // Handle any errors, such as invalid ID or database issues
        return response()->json(['message' => 'Failed to update status.'], 500);
    }
}

    
}

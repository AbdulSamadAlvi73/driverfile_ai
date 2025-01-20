<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\CompanyDetails;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index(Request $request)
    {
        // Assuming you have authenticated users and you can access the authenticated user's ID
        $companyId = auth()->id();

        // Fetch the user from the database
        $company = Companies::find($companyId);
        $companyDetails = CompanyDetails::find($companyId);

        // Check if the user exists
        if ($company) {
            // Get the username from the user object
            $username = $company->username;
            $company_code = $company->company_code;
           // Get the user's legal name from the company details, providing a default value of null if it's not set
           $company_legal_name = $companyDetails->legal_name ?? null;
           $display_name = $companyDetails->display_name ?? null;
           $company_url = $companyDetails->company_url ?? null;
           $address = $companyDetails->address ?? null;
           $state = $companyDetails->state ?? null;
           $company_contact_number = $companyDetails->company_contact_number ?? null;
           $company_logo = $companyDetails->company_logo ?? null;



            // Pass the username to the view
            return view('pages.companyProfile', [
                'username' => $username,
                'company_code' => $company_code,
                'company_legal_name'=>$company_legal_name,
                'display_name'=>$display_name,
                'company_url'=>$company_url,
                'address'=>$address,
                'state'=>$state,
                'company_contact_number'=>$company_contact_number,
                'company_logo'=>$company_logo
            ]);
        } else {
            // Handle the case where the user does not exist
            return redirect()->back()->with('error', 'User not found');
        }
    }
    
}

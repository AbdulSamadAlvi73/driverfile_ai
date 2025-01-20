<?php

namespace App\Http\Controllers;
use App\Models\CompanyDetails;
use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompanyDetailsController extends Controller
{
    public function storeOrUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string',
            'legal_name' => 'required|string|max:50',
            'display_name' => 'required|string|max:50',
            'company_code' => 'required|integer',
            'company_url' => 'required|string',
            'state' => 'required|string',
            'address' => 'required|string',
            'phone_no' => 'required|string',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


  
        
    
        // Assuming you have authenticated users and you can access the authenticated user's ID
        $companyId = auth()->id();
            // Check if company details exist
        $companyDetails = CompanyDetails::where('company_id', $companyId)->first();

        // Initialize $logoUrl
        $logoUrl = null;

        if ($request->hasFile('logo')) {
            // Store the new logo in the storage/app/public/logos directory
            $logoPath = $request->file('logo')->storeAs('public/logos', $request->file('logo')->getClientOriginalName());
            
            // Get the URL of the stored logo
            $logoUrl = asset('storage/' . str_replace('public/', '', $logoPath));
        } else {
            // If no new logo has been uploaded, and company details exist, use the existing logo URL from the database
            if ($companyDetails) {
                $logoUrl = $companyDetails->company_logo;
            } else {
                // If no company details exist, display an error message for the logo
                $logoErrorMessage = 'Company details not found. Please upload a logo.';
            }
        }
        
    
        if ($companyDetails) {
       // Update existing company details
        $companyDetails->update([
            'legal_name' => $validatedData['legal_name'],
            'display_name' => $validatedData['display_name'],
            // 'company_url' => $validatedData['company_url'],
            'state' => $validatedData['state'],
            'address' => $validatedData['address'],
            'company_contact_number' => $validatedData['phone_no'],
            'company_logo' => $logoUrl, // Use $logoUrl instead of $logoPath
            // You can handle logo update here as well if needed
        ]);
        } else {
            // Create new company details
            CompanyDetails::create([
                'company_id' => $companyId,
                'legal_name' => $validatedData['legal_name'],
                'display_name' => $validatedData['display_name'],
                'company_url' => $validatedData['company_url'],
                'state' => $validatedData['state'],
                'address' => $validatedData['address'],
                'company_contact_number' => $validatedData['phone_no'],
                'company_logo' => $logoUrl, // Use $logoUrl instead of $logoPath
                // You can handle logo creation here if needed
            ]);
        }
    
        return redirect()->route('companyprofile')->with('success', 'Company details saved successfully');
    }
    
    
    
}


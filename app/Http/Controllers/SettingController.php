<?php

namespace App\Http\Controllers;
use App\Models\Companies;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SettingController extends Controller
{
//     public function index()
//    {
//     return view('pages.Settings');
//    }
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
           $email = $company->email;
           $phone_no = $company->phone_no;
           $display_name = $companyDetails->display_name ?? null;
           $company_logo = $companyDetails->company_logo ?? null;


           // Pass the username to the view
           return view('pages.Settings', [
            'email' => $email,
            'phone_no'=>$phone_no,
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
       } else {
           // Handle the case where the user does not exist
           return redirect()->back()->with('error', 'User not found');
       }
   }

   public function updateSettings(Request $request)
   {
       // Validate the form data
       $request->validate([
           'newemail' => 'email|unique:companies,email,' . auth()->id(),
           'newpassword' => 'min:8|required_with:confirmPassword|same:confirmPassword',
           'confirmPassword' => 'min:8'
       ], [
           'newemail.email' => 'Please enter a valid email address.',
           'newemail.unique' => 'The email has already been taken.',
           'newpassword.min' => 'Password must be at least 8 characters long.',
           'newpassword.required_with' => 'The new password field is required when the confirm password field is present.',
           'newpassword.same' => 'The new password and confirm password must match.',
           'confirmPassword.min' => 'Confirm password must be at least 8 characters long.'
       ]);
   
       // Retrieve the authenticated user's company
       $company = Companies::find(auth()->id());
   
       if ($company) {
           // Update email if provided
           if ($request->filled('newemail')) {
               $company->email = $request->input('newemail');
           }
   
           // Update password if provided
           if ($request->filled('newpassword')) {
               $company->password = Hash::make($request->input('newpassword'));
           }
   
           // Save the updated company details
           $company->save();
   
           // Redirect back with success message
           return redirect()->back()->with('success', 'Security updated successfully!');
       }
   
       // Redirect back with error message if company not found
       return redirect()->back()->with('error', 'Details not found.');
   }
   

   public function generalUpdate(Request $request)
   {
    $validatedData = $request->validate([
        'contact_name' => 'required|string',
        'email' => 'required|unique:companies|email',
        'phone_no' => 'required|unique:companies',
        'timezone' => 'required|string',
    ]);
    
    $companyId = auth()->id();
    $company = Companies::find($companyId);
    $companyDetails = CompanyDetails::where('company_id', $companyId)->first();
    
    if ($company && $companyDetails) {
        $company->update([
            'email' => $validatedData['email'],
            'phone_no' => $validatedData['phone_no'],
        ]);
    
        $companyDetails->update([
            'display_name' => $validatedData['contact_name'],
            'time_zone' => $validatedData['timezone'],
        ]);
    
        return redirect()->route('settings')->with('success', 'General Settings Updated');
    }
    
    return redirect()->back()->with('error', 'Details not found.');
    
   }
}
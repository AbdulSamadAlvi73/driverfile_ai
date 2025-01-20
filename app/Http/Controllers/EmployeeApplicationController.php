<?php

namespace App\Http\Controllers;
use App\Models\DriverAccidentReview;
use App\Models\DriverAdditionalLicense;
use App\Models\DriverAuthorisation;
use App\Models\DriverCommercialLicense;
use App\Models\DriverEducation;
use App\Models\DriverEmploymentHistory;
use App\Models\DriverTrafficConviction;
use Validator;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Models\DriverApplications;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Companies; // Make sure to import the Companies model
use Carbon\Carbon;

class EmployeeApplicationController extends Controller
{
    public function applyNow()
    {
        return view('pages.applyNow');
    }

    public function applicationForEmployee(Request $request)
    {
       $companyCode = $request->input('company_code');
    
       $company = Companies::where('company_code', $companyCode)->first();
    
       if ($company) {
           $companyID = $company->id;
           $companyDetails = CompanyDetails::where('id', $companyID)->first();

           $company_id = $company->id ?? null;
           $company_logo = $companyDetails->company_logo ?? null;
           $display_name = $companyDetails->display_name ?? null;
           $address = $companyDetails->address ?? null;
           $state = $companyDetails->state ?? null;
           $company_contact_number = $companyDetails->company_contact_number ?? null;

    
           return view('pages.applicationForEmployee', [
                'company_id' => $company_id,
               'company_logo' => $company_logo,
               'display_name' => $display_name,
               'address' => $address,
               'state' => $state,
               'company_contact_number' => $company_contact_number,
           ]);
       } else {
           return redirect()->route('applyNow')->with('error', 'Invalid company code. Please enter a valid company code.');
       }
    }

    public function checkEmail(Request $request)
    {
        $email = $request->input('email');
        $exists = DriverApplications::where('email', $email)->exists();
        return response()->json(['exists' => $exists]);
    }
    
public function applicationsubmition(Request $request)
{

    // $validatedData = Validator::make($request->all(), [
    //     'email_address' => 'required|unique:driver_applications|email',
    // ]);
    
    // if ($validatedData->fails()) {
    //     return redirect()->back()->withErrors($validatedData);
    // }
    
    // $validatedData = $request->validate([
    //     'email_address' => 'required|unique:driver_applications|email',
    // ]);
    
     // Check if the email already exists
    $existingDriver = DriverApplications::where('email_address', $request->input('email_address'))->first();

    if ($existingDriver) {
        // Return an error response indicating that the email is already taken
        return response()->json(['error' => 'The email is already taken.'], 422);
    }
    
    // Validate the incoming request data here...
    $date_applied = Carbon::now()->toDateString();
    $endorsements = $request->input('endorsement', []);
    $endorsementString = implode(',', $endorsements);
    
    
    // Insert data into driver_applications table
    $driverApplication = DriverApplications::create([
        'company_id' => $request->input('company_id'),
        'job_applied_for' => $request->input('job_applied_for'),
        'firstname' => $request->input('firstname'),
        'lastname' => $request->input('lastname'),
        'social_security_no' => $request->input('social_security_no'),
        'date_of_birth' => $request->input('date_of_birth'),
        'mobile_no' => $request->input('mobile_no'),
        'other_mobile_no' => $request->input('other_mobile_no'),
        'email_address' => $request->input('email_address'),
        'present_address' => $request->input('present_address'),
        'phone_no' => $request->input('phone_no'),
        'city' => $request->input('city'),
        'state' => $request->input('state'),
        'zip' => $request->input('zip'),
        'country' => $request->input('country'),
        'yrs_of_this_address' => $request->input('yrs_of_this_address'),
        // 'status' => $status,
        'date_applied' => $date_applied,
    ]);

 

    // Get the ID of the newly created driver_applications record
    $driverId = $driverApplication->id;

    // Insert data into driver_commercial_licenses table
    $driverCommercialLicense = DriverCommercialLicense::create([
        'driver_id' => $driverId, // Set the driver_id explicitly
        'name' => $request->input('name'),
        'other_name' => $request->input('other_name'),
        'cdl_type' => $request->input('cdl_type'),
        'endorsement' => $endorsementString,
        'license_expiration_date' => $request->input('license_expiration_date'),
        'air_brake_restriction' => $request->input('Air Brake') === 'Yes',
        'transmission_restriction' => $request->input('Automatic Transmission') === 'Yes',
        'years_of_cdl_exp' => $request->input('years_of_cdl_exp'),
        'current_driver' => $request->input('current_driver'),
        'state' => $request->input('state'),
        'current_dot_medical_card' => $request->input('medicaldot') === 'Yes',
        'dot_medical_card_exp_date' => $request->input('cardexpdate'),
        'dry_van' => $request->input('dryvan'),
        'doubles' => $request->input('doubles'),
        'flatbed' => $request->input('flatbed'),
        'tanker' => $request->input('tanker'),
        'reefer' => $request->input('reefer'),
        'switching' => $request->input('switching'),
        'dump' => $request->input('dump'),
        'cdl_B' => $request->input('cdl_B'),
    ]);

        // Insert data into Driver Education table
        $DriverEducation = DriverEducation::create([
            'driver_id' => $driverId, // Set the driver_id explicitly
            'school_name_and_location_of_school' => $request->input('school_name_and_location_of_school'),
            'school_years_attended' => $request->input('school_years_attended'),
            'school_diploma_certificate' => $request->input('school_diploma_certificate'),
            'college_name_and_location_of_school' => $request->input('college_name_and_location_of_school'),
            'college_years_attended' => $request->input('college_years_attended'),
            'college_diploma_certificate' => $request->input('college_diploma_certificate'),
            'business_name_and_location_of_school' => $request->input('business_name_and_location_of_school'),
            'business_years_attended' => $request->input('business_years_attended'),
            'business_diploma_certificate' => $request->input('business_diploma_certificate'),
            'special_courses' => $request->input('special_courses'),
            'driving_awards' => $request->input('driving_awards'),
        ]);

         // Insert data into DriverAdditionalLicense table
         $DriverAdditionalLicense = DriverAdditionalLicense::create([
            'driver_id' => $driverId, // Set the driver_id explicitly
            'state' => $request->input('state'),
            'licenses_no' => $request->input('licenses_no'),
            'class' => $request->input('class'),
            'endorsement' => $request->input('endorsement_license'),
            'exp_date' => $request->input('exp_date'),
            'any_licenses' => $request->input('any_licenses'), // Radio button value
            'date_suspended_1' => $request->input('date_suspended_1'),
            'details_1' => $request->input('details_1'),
            'date_suspended_2' => $request->input('date_suspended_2'),
            'details_2' => $request->input('details_2'),
            'date_suspended_3' => $request->input('date_suspended_3'),
            'details_3' => $request->input('details_3'),
            'convicted_for_driving' => $request->input('convicted_for_driving') ?? null, 
            'date_of_charge_1' => $request->input('date_of_charge_1'),
            'convicted_details_1' => $request->input('convicted_details_1'),
            'date_of_charge_2' => $request->input('date_of_charge_2'),
            'convicted_details_2' => $request->input('convicted_details_2'),
            'date_of_charge_3' => $request->input('date_of_charge_3'),
            'convicted_details_3' => $request->input('convicted_details_3'),
            'alcohol_testing_rules' => $request->input('alcohol_testing_rules')?? null,
            'completed_duty_requirement' => $request->input('completed_duty_requirement'),
            'convicted_of_felony' => $request->input('convicted_of_felony')?? null,
            'des_of_offence_1' => $request->input('des_of_offence_1'),
            'des_of_offence_2' => $request->input('des_of_offence_2'),
            'date_of_convicted_1' => $request->input('date_of_convicted_1'),
            'date_of_convicted_2' => $request->input('date_of_convicted_2'),
            'country_city_state_of_convicted_1' => $request->input('country_city_state_of_convicted_1'),
            'country_city_state_of_convicted_2' => $request->input('country_city_state_of_convicted_2'),
        ]);

        // Insert data into DriverAccidentReview table
        $DriverAccidentReview = DriverAccidentReview::create([
            'driver_id' => $driverId, // Set the driver_id explicitly
            'no_accident_to_report' => $request->has('noAccidentsCheckbox') ? 1 : 0,
            'date' => $request->input('date'),
            'description' => $request->input('description'),
            'fatalities' => $request->input('fatalities'),
            'injuries' => $request->input('injuries'),
            'vehicle_type' => $request->input('vehicle_type'), 
        ]);

        // Insert data into DriverTrafficConviction table
        $DriverTrafficConviction = DriverTrafficConviction::create([
            'driver_id' => $driverId, // Set the driver_id explicitly
            'no_traffic_conviction' => $request->has('no_traffic_conviction') ? 1 : 0,
            'location' => $request->input('location'),
            'date' => $request->input('date'),
            'charges' => $request->input('charges'),
            'penalty' => $request->input('penalty'),
        ]);

        // Insert data into DriverEmploymentHistory table
        $DriverEmploymentHistory = DriverEmploymentHistory::create([
            'driver_id' => $driverId, // Set the driver_id explicitly
            'currently_working' => $request->input('currently_working'),
            'recent_job' => $request->input('recent_job'),
            'company' => $request->input('company'),
            'supervisor' => $request->input('supervisor'),
            'supervisor_phone' => $request->input('supervisor_phone'),
            'salary' => $request->input('salary'),
            'street_address' => $request->input('street_address'),
            'city' => $request->input('employer_city'),
            'state' => $request->input('state'),
            'zip_code' => $request->input('zip_code'),
            'position_held' => $request->input('position_held'),
            'from_date' => $request->input('from_date'),
            'to_date' => $request->input('to_date'),
            'reason_for_leaving' => $request->input('reason_for_leaving'),
            'hauling_what' => $request->input('hauling_what'),
            'number_of_month' => $request->input('number_of_month'),
            'equipment' => $request->input('equipment'),
            'FMCSRs' => $request->input('FMCSRs'),
            'CFR' => $request->input('CFR'),
            'des_of_gap' => $request->input('des_of_gap'),
            'from_date_gap' => $request->input('from_date_gap'),
            'to_date_gap' => $request->input('to_date_gap'),
            'contact_current_emp' => $request->input('contact_current_emp'),
        ]);


        // Insert data into DriverAuthorisation table
        $DriverAuthorisation = DriverAuthorisation::create([
            'driver_id' => $driverId,
            'application_investigation' => $request->has('application_investigation') ? 1 : 0,
            'additional_info' => $request->has('additional_info') ? 1 : 0,
            'print_name' => $request->input('print_name'),
            'employee_signature' => $request->input('employee_signature'),
        ]);
        
    // Redirect after successful submission
    return redirect()->route('applyNow')->with('success', 'Application saved successfully');
}


}


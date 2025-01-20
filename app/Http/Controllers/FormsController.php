<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\CompanyForms;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FormsController extends Controller
{ 
    public function index()
    {
        $companyId = auth()->id();
    
        // Fetch active forms for the company
        $activeForms = CompanyForms::where('company_id', $companyId)->get();
        $activeFormNames = $activeForms->pluck('form_name')->toArray();
    
        $companyDetails = CompanyDetails::find($companyId);
        $company = Companies::find($companyId);
    
        if ($company) {
            $display_name = $companyDetails->display_name ?? null;
            $company_logo = $companyDetails->company_logo ?? null;
    
            return view('pages.forms', [
                'display_name' => $display_name,
                'company_logo' => $company_logo,
                'activeForms' => $activeForms,
                'activeFormNames' => $activeFormNames, // Pass active form names to the view
            ]);
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }
    
    
   

   public function saveForm(Request $request)
   {
       // Get the authenticated user's company ID
       $companyId = auth()->id();

       // Validate the incoming request
       $request->validate([
           'form_name' => 'required|string|max:50',
       ]);
   
       // Create a new company form record
       CompanyForms::create([
           'form_name' => $request->form_name,
           'company_id' => $companyId
       ]);
   
       // Return a success response
       return response()->json(['message' => 'Form saved successfully']);
   }
   


   
   public function alabamaState()
   {
    $companyId = auth()->id();

    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.alabamaState', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
   }
   public function ADPForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.ADPform', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
   }
   
   public function alcoholAndDrugEmployee()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.alcoholAndDrugEmployee', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function arizonaEmployeeWithholdingElection()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.arizonaEmployeeWithholdingElection', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function arizonaEmployeeWithholdingElection2023()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.arizonaEmployeeWithholdingElection2023', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function ArkansasDrugTestReleaseForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.ArkansasDrugTestReleaseForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function ArkansasStateWithholdingForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.ArkansasStateWithholdingForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function BackgroundCheckReleseForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.BackgroundCheckReleseForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function EmployeesWithholdingAllowanceCertificate()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.EmployeesWithholdingAllowanceCertificate', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}

   public function EmployerPullNoticeProgram()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.EmployerPullNoticeProgram', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function CertificationOfComplianceWithDriverLicenseRequIirements()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.CertificationOfComplianceWithDriverLicenseRequIirements', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function DCWithholding()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.DCWithholding', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function DelawareFormW_4()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.DelawareFormW_4', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function DriversRightsPertainingtoRelease()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.DriversRightsPertainingtoRelease', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function EEOCandidateVoluntarySelf_Identification()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.EEOCandidateVoluntarySelf_Identification', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function ExitInterview()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.ExitInterview', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FedexOP_102AWorkHistoryVerificationRelease()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FedexOP_102AWorkHistoryVerificationRelease', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FedexOP_103CertificateofViolations()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FedexOP_103CertificateofViolations', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FMCSRClearinghouseLimitedQueryConsent()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FMCSRClearinghouseLimitedQueryConsent', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FormI_9()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FormI_9', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FormI_9_2020()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FormI_9_2020', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FormI_9_2023()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FormI_9_2023', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FormW_4_2018()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FormW_4_2018', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FormW_4_2019()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FormW_4_2019', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FormW_4_2020()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FormW_4_2020', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FormW_4_2021()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FormW_4_2021', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FormW_4_2022()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FormW_4_2022', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FormW_4_2023()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FormW_4_2023', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function FormW_4_2024()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.FormW_4_2024', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function Form_W_9()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.Form_W_9', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function Form_W_9_v2()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.Form_W_9_v2', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function Form_W9_2019()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.Form_W9_2019', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function GeorgiaStateWithholdingForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.GeorgiaStateWithholdingForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function HireRightCaliforniaDisclosure()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.HireRightCaliforniaDisclosure', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}

   public function HireRightDisclosureandAuthorization()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.HireRightDisclosureandAuthorization', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function HireRightDotD_ADisclosureandAuthorization()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.HireRightDotD_ADisclosureandAuthorization', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function HireRightNewYorkDisclosure()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.HireRightNewYorkDisclosure', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function HireRightOtherDisclosures()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.HireRightOtherDisclosures', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function HireRightSanFranciscoDisclosure()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.HireRightSanFranciscoDisclosure', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function IllinoisDepartmentofRevenueFormIL_W_4()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.IllinoisDepartmentofRevenueFormIL_W_4', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function IndianaFormWH_4_2019()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.IndianaFormWH_4_2019', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function IRSForm8850_WOTC()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.IRSForm8850_WOTC', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function KansasStateWithholdingForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.KansasStateWithholdingForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function LouisianaStateWithholdingForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.LouisianaStateWithholdingForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function MarylandFormMW507()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.MarylandFormMW507', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function MedicalExaminersNationalRegistryVerification()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.MedicalExaminersNationalRegistryVerification', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function MississippiEmployeeWithholdingExemptionCertificate()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.MississippiEmployeeWithholdingExemptionCertificate', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function MissouriFormW4()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.MissouriFormW4', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function NewJerseyNonResidentForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.NewJerseyNonResidentForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function NewJerseyW4()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.NewJerseyW4', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function NewYorkStateWithholdingForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.NewYorkStateWithholdingForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function NewYorkStateWithholdingForm2021()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.NewYorkStateWithholdingForm2021', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function NorthCarolinaEmployeeWithholdingAllowanceCertificate()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.NorthCarolinaEmployeeWithholdingAllowanceCertificate', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function OfficeoftheSheriffofWashingtonCounty()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.OfficeoftheSheriffofWashingtonCounty', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function OhioEmployeeWithholdingExemptionCertificate2020()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.OhioEmployeeWithholdingExemptionCertificate2020', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function OhioEmployeesWithholdingExemptionCertificate()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.OhioEmployeesWithholdingExemptionCertificate', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function OKW4()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.OKW4', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function OwnerOperatorEquipmentForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.OwnerOperatorEquipmentForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PARequestForDriverInformation()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PARequestForDriverInformation', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PAResidencyCertificationForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PAResidencyCertificationForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PAYCHEXDirectDepositEnrollmentChangeForm2016()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PAYCHEXDirectDepositEnrollmentChangeForm2016', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PaychexDirectDepositEnrollmentChangeForm2020()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PaychexDirectDepositEnrollmentChangeForm2020', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PaychexDirectDepositEnrollmentChangeForm2023()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PaychexDirectDepositEnrollmentChangeForm2023', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PAYCOMDirectDepositEnrollmentChangeForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PAYCOMDirectDepositEnrollmentChangeForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PreEmploymentAlcholDrugStatementFillable()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PreEmploymentAlcholDrugStatementFillable', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PREEMPLOYMENTURINALYSISNOTIFICATIONFillable()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PREEMPLOYMENTURINALYSISNOTIFICATIONFillable', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PreviousDrugTestingVerification()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PreviousDrugTestingVerification', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PreviousDrugTestingVerificationV2()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PreviousDrugTestingVerificationV2', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PreviousPreEmploymentEmployeeAlcoholandDrugTestStatementV2()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PreviousPreEmploymentEmployeeAlcoholandDrugTestStatementV2', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function PreviousPreEmploymentEmployeeAlcoholandDrugTestStatementV3()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.PreviousPreEmploymentEmployeeAlcoholandDrugTestStatementV3', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function SevenDayPriorLogForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.SevenDayPriorLogForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function SouthCarolinaStateWithholdingForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.SouthCarolinaStateWithholdingForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function TexasReleaseofCDLHolder()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.TexasReleaseofCDLHolder', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function VermontStateWithholdingForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.VermontStateWithholdingForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function ViolationAndReviewRecord()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.ViolationAndReviewRecord', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function ViolationandReviewRecord2020()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.ViolationandReviewRecord2020', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function VirginiaStateWithholdingForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.VirginiaStateWithholdingForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function WADrivingRecordRelease()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.WADrivingRecordRelease', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function WisconsinWithholdingForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.WisconsinWithholdingForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function Agreement_1099()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.Agreement_1099', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function CompanyPolicyAgreement()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.CompanyPolicyAgreement', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function DirectDepositForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.DirectDepositForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
   public function WorkersCompensationForm()
   {
    $companyId = auth()->id();
    $companyDetails = CompanyDetails::find($companyId);
    $company = Companies::find($companyId);
    if ($company) {
       $display_name = $companyDetails->display_name ?? null;
       $company_logo = $companyDetails->company_logo ?? null;
        return view('pages.forms.WorkersCompensationForm', [
            'display_name'=>$display_name,
            'company_logo'=>$company_logo
        ]);
    } else {
        return redirect()->back()->with('error', 'User not found');
    }
}
}

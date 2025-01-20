@extends('layout.app')
@section('mainsection')

<section class="dashboard">
    <div class="top d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <h5><i class="uil uil-bars sidebar-toggle"></i></h5>
            <div class="logo-name border-bottom-0 p-0 d-md-none d-flex align-items-center">
                <div class="logo-image m-0">
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <div class="ms-auto me-4 d-flex align-items-center gap-2">
            @if($company_logo)
                <img src="{{ asset($company_logo)}}" height="40rem" alt="Logo">
            @else
                <span></span>
            @endif
            <h5 class="m-0">{{ $display_name }}</h5>
        </div>
        <div class="btn-box">
            <a name="logout" id="logout" class="logout-btn" href="{{route('logout')}}" role="button">Logout</a>
        </div>
    </div>

    <div class="dash-content px-md-4 py-3 p-2">
        <div class="main-content-box">
            <div class="row align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <ul class="nav nav-tabs gap-md-1 gap-1 border-0" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">Forms</button>
                            </li>

                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab"
                                    aria-controls="profile-tab-pane" aria-selected="false">Settings</button>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content border-0" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="form-app-box px-lg-5 py-lg-4 p-3">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search..." id="searchInput">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-responsive table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Form Name</th>
                                        <th scope="col">Action/Inactive</th>
                                        <th scope="col">Preview</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                    @foreach($activeForms as $form)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $form->form_name }}</td>
                                        <td colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input form-checkbox" type="checkbox" value="{{ $form->form_name }}" data-form-id="{{ $form->id }}" {{ in_array($form->form_name, $activeFormNames) ? 'checked' : '' }} />
                                                <label class="form-check-label" for=""> Active </label>
                                            </div>
                                        </td>
                                        {{-- <td><a href="{{ url($form->preview_url) }}" target="_blank" class="preview-link" data-form-id="{{ $form->id }}">Preview</a></td> --}}
                                    </tr>
                                    @endforeach
                                    
                                    <tr class="">
                                        <td scope="row">1</td>
                                        <td>ADP Employee Direct Deposit Form</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input form-checkbox" type="checkbox" value="ADP Employee Direct Deposit Form" data-form-id="1" />
                                                <label class="form-check-label" for=""> Active </label>
                                            </div>
                                        </td>
                                        <td><a href="{{ url('adpform') }}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">2</td>
                                        <td>Alabama State Withholding Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('alabamastate')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">3</td>
                                        <td>Alcohol and Drug Employee's Certified Receipt</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('alcoholanddrugemployee')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">4</td>
                                        <td>Arizona Employee's Withholding Election</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('arizonaEmployeeWithholdingElection')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">5</td>
                                        <td>Arizona Employee's Withholding Election 2023</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('arizonaEmployeeWithholdingElection2023')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">6</td>
                                        <td>Arkansas Drug Test Release Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('ArkansasDrugTestReleaseForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">7</td>
                                        <td>Arkansas State Withholding Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('ArkansasStateWithholdingForm')}}" target="_blank" class="preview-link" data-form-id="2">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">8</td>
                                        <td>Background Bureau - Background Check Release Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('BackgroundCheckReleseForm')}}" target="_blank" class="preview-link" data-form-id="3">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">9</td>
                                        <td>CA Employee's Withholding Allowance Certificate</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('EmployeesWithholdingAllowanceCertificate')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">10</td>
                                        <td>CA Pull Notice</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('EmployerPullNoticeProgram')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">11</td>
                                        <td>CERTIFICATION OF COMPLIANCE WITH DRIVER LICENSE REQUIREMENTS</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('CertificationOfComplianceWithDriverLicenseRequIirements')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">12</td>
                                        <td>DC Withholding</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('DCWithholding')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr> 
                                    <tr class="">
                                        <td scope="row">13</td>
                                        <td>Delaware Form W-4</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('DelawareFormW_4')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>  
                                    <tr class="">
                                        <td scope="row">14</td>
                                        <td>Drivers Rights Pertaining to Release of Information under Regulation 391.23</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('DriversRightsPertainingtoRelease')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>  
                                    <tr class="">
                                        <td scope="row">15</td>
                                        <td>EEO Candidate Voluntary Self-Identification</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('EEOCandidateVoluntarySelf_Identification')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>  
                                    <tr class="">
                                        <td scope="row">16</td>
                                        <td>EXIT INTERVIEW</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('ExitInterview')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>  
                                    <tr class="">
                                        <td scope="row">17</td>
                                        <td>Fedex OP-102A Work History Verification Release</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FedexOP_102AWorkHistoryVerificationRelease')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">18</td>
                                        <td>Fedex OP-103 Certificate of Violations</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FedexOP_103CertificateofViolations')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">19</td>
                                        <td>FMCSR Clearinghouse Limited Query Consent</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FMCSRClearinghouseLimitedQueryConsent')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">20</td>
                                        <td>Form I-9</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FormI_9')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">21</td>
                                        <td>Form I-9 2020</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FormI_9_2020')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">22</td>
                                        <td>Form I-9 2023</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FormI_9_2023')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">23</td>
                                        <td>FORM W-4 (2018)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FormW_4_2018')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">24</td>
                                        <td>FORM W-4 (2019)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FormW_4_2019')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">25</td>
                                        <td>FORM W-4 (2020)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FormW_4_2020')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">26</td>
                                        <td>FORM W-4 (2021)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FormW_4_2021')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">27</td>
                                        <td>FORM W-4 (2022)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FormW_4_2022')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">28</td>
                                        <td>FORM W-4 (2023)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FormW_4_2023')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    
                                    <tr class="">
                                        <td scope="row">29</td>
                                        <td>FORM W-4 (2024)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('FormW_4_2024')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">30</td>
                                        <td>Form W-9</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('Form_W_9')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">31</td>
                                        <td>Form W-9</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('Form_W_9_v2')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">32</td>
                                        <td>Form W9 - 2019</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('Form_W9_2019')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr> 
                                    <tr class="">
                                        <td scope="row">33</td>
                                        <td>Georgia State Withholding Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('GeorgiaStateWithholdingForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr> 
                                    <tr class="">
                                        <td scope="row">34</td>
                                        <td>HireRight California Disclosure</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('HireRightCaliforniaDisclosure')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr> 
                                    <tr class="">
                                        <td scope="row">35</td>
                                        <td>HireRight Disclosure and Authorization</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('HireRightDisclosureandAuthorization')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr> 
                                    <tr class="">
                                        <td scope="row">36</td>
                                        <td>HIRERIGHT DOT D/A DISCLOSURE AND AUTHORIZATION</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('HireRightDotD_ADisclosureandAuthorization')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    
                                    <tr class="">
                                        <td scope="row">37</td>
                                        <td>HireRight New York Disclosure</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('HireRightNewYorkDisclosure')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">38</td>
                                        <td>HireRight Other Disclosures</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('HireRightOtherDisclosures')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">39</td>
                                        <td>HireRight San Francisco Disclosure</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('HireRightSanFranciscoDisclosure')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">40</td>
                                        <td>Illinois Department of Revenue Form IL-W-4</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('IllinoisDepartmentofRevenueFormIL_W_4')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">41</td>
                                        <td>Indiana Form WH-4 2019</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('IndianaFormWH_4_2019')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">42</td>
                                        <td>IRS Form 8850 - WOTC</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('IRSForm8850_WOTC')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">43</td>
                                        <td>Kansas State Withholding Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('KansasStateWithholdingForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">43</td>
                                        <td>Louisiana State Withholding Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('LouisianaStateWithholdingForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">44</td>
                                        <td>Maryland Form MW507</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('MarylandFormMW507')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">45</td>
                                        <td>Medical Examiners National Registry Verification</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('MedicalExaminersNationalRegistryVerification')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">46</td>
                                        <td>Mississippi Employee Withholding Exemption Certificate</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('MississippiEmployeeWithholdingExemptionCertificate')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">47</td>
                                        <td>Missouri Form W4</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('MissouriFormW4')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    
                                    <tr class="">
                                        <td scope="row">48</td>
                                        <td>New Jersey Non-Resident Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('NewJerseyNonResidentForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">49</td>
                                        <td>New Jersey W4</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('NewJerseyW4')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">50</td>
                                        <td>New Mexico FORM W-4</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('NewYorkStateWithholdingForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">51</td>
                                        <td>New York State Withholding Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('NewYorkStateWithholdingForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">52</td>
                                        <td>
                                           New York State Withholding Form (2021)</td>
                                           <td><div class="form-check">
                                               <input class="form-check-input" type="checkbox" value="" id="" />
                                               <label class="form-check-label" for=""> Active </label>
                                           </div>
                                           </td>
                                        <td><a href="{{url('NewYorkStateWithholdingForm2021')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">53</td>
                                        <td>North Carolina Employee Withholding Allowance Certificate</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('NorthCarolinaEmployeeWithholdingAllowanceCertificate')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">54</td>
                                        <td>Office of the Sheriff of Washington County</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('OfficeoftheSheriffofWashingtonCounty')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">55</td>
                                        <td>Ohio Employee Withholding Exemption Certificate 2020</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('OhioEmployeeWithholdingExemptionCertificate2020')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">56</td>
                                        <td>Ohio Employee's Withholding Exemption Certificate</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="
                                            form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('OhioEmployeesWithholdingExemptionCertificate')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">57</td>
                                        <td>OK-W4</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('OKW4')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">58</td>
                                        <td>Owner Operator Equipment Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('OwnerOperatorEquipmentForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">59</td>
                                        <td>PA Request For Driver Information</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PARequestForDriverInformation')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">60</td>
                                        <td>PA Residency Certification Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PAResidencyCertificationForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">61</td>
                                        <td>PAYCHEX - Direct Deposit Enrollment/Change Form 2016</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PAYCHEXDirectDepositEnrollmentChangeForm2016')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    
                                    <tr class="">
                                        <td scope="row">62</td>
                                        <td>Paychex Direct Deposit Enrollment/Change Form (2020)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PaychexDirectDepositEnrollmentChangeForm2020')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">63</td>
                                        <td>Paychex Direct Deposit Enrollment/Change Form (2023)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PaychexDirectDepositEnrollmentChangeForm2023')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">64</td>
                                        <td>PAYCOM Direct Deposit Enrollment/Change Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PAYCOMDirectDepositEnrollmentChangeForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">65</td>
                                        <td>Pre-Employment Alchol & Drug Statement - Fillable</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PreEmploymentAlcholDrugStatementFillable')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">66</td>
                                        <td>PRE-EMPLOYMENT URINALYSIS NOTIFICATION - Fillable</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PREEMPLOYMENTURINALYSISNOTIFICATIONFillable')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">67</td>
                                        <td>PREVIOUS DRUG TESTING VERIFICATION</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PreviousDrugTestingVerification')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">68</td>
                                        <td>PREVIOUS DRUG TESTING VERIFICATION (V2)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PreviousDrugTestingVerificationV2')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">69</td>
                                        <td>Previous Pre-Employment Employee Alcohol and Drug Test Statement (V2)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PreviousPreEmploymentEmployeeAlcoholandDrugTestStatementV2')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">70</td>
                                        <td>Previous Pre-Employment Employee Alcohol and Drug Test Statement (V3)</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('PreviousPreEmploymentEmployeeAlcoholandDrugTestStatementV3')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">71</td>
                                        <td>SEVEN-DAY PRIOR LOG FORM</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('SevenDayPriorLogForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">72</td>
                                        <td>South Carolina State Withholding Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('SouthCarolinaStateWithholdingForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">73</td>
                                        <td>Texas Release of CDL Holder</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('TexasReleaseofCDLHolder')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">74</td>
                                        <td>Vermont State Withholding Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('VermontStateWithholdingForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">75</td>
                                        <td>VIOLATION AND REVIEW RECORD</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('ViolationAndReviewRecord')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">76</td>
                                        <td>Violation and Review Record 2020</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('ViolationandReviewRecord2020')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">77</td>
                                        <td>Virginia State Withholding Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('VirginiaStateWithholdingForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">78</td>
                                        <td>WA Driving Record Release</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('WADrivingRecordRelease')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">79</td>
                                        <td>Wisconsin Withholding Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('WisconsinWithholdingForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">80</td>
                                        <td>1099 Agreement</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('Agreement_1099')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">81</td>
                                        <td>COMPANY POLICY AGREEMENT</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('CompanyPolicyAgreement')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">82</td>
                                        <td>Direct Deposit Form</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('DirectDepositForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row">83</td>
                                        <td>WORKER'S COMPENSATION FORM</td>
                                        <td><div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> Active </label>
                                        </div>
                                        </td>
                                        <td><a href="{{url('WorkersCompensationForm')}}" target="_blank" class="preview-link" data-form-id="1">Preview</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                {{-- <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">..weqw.</div> --}}

            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function() {
    $('.form-check-input').on('change', function() {
        var isChecked = $(this).is(':checked');
        var formName = $(this).closest('tr').find('td:eq(1)').text().trim();
        console.log('isChecked:', isChecked);
        console.log('formName:', formName);
        
        // Make AJAX request
        $.ajax({
            url: '/save-form',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                form_name: formName
            },
            success: function(response) {
                console.log('Form saved successfully:', response); // Log the response for debugging
            },
            error: function(xhr, status, error) {
                console.error('Error saving form:', error);
                console.error('status:', status);
                console.error('xhr.responseText:', xhr.responseText);
            }
        });
    });
});


 document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById('searchInput');
        const tableBody = document.getElementById('tableBody');

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.toLowerCase();
            const rows = tableBody.getElementsByTagName('tr');

            for (let row of rows) {
                const cells = row.getElementsByTagName('td');
                let found = false;

                for (let cell of cells) {
                    if (cell.textContent.toLowerCase().includes(searchTerm)) {
                        found = true;
                        break;
                    }
                }

                if (found) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    });
    // const previewLinks = document.querySelectorAll('.preview-link');

    // previewLinks.forEach(link => {
    //     link.addEventListener('click', function (event) {
    //         event.preventDefault();

    //         const formId = this.getAttribute('data-form-id');

    //         const url = 'formdetails';
    //         window.open(url, '_blank');
    //     });
    // });
</script>
@endsection
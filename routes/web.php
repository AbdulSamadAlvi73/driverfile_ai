<?php

// use CompanyDetailsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\DriverFromsController;
use App\Http\Controllers\DriverProfileController;
use App\Http\Controllers\CompanyDetailsController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\EmployeeApplicationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('pages.login');
});


Route::group(['middleware'=>'guest'],function(){
// Routes For login
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});


Route::group(['middleware'=>'guest'],function(){
// Routes For pages
Route::get('/companyprofile', [CompanyProfileController::class, 'index'])->name('companyprofile');
Route::post('/companyprofilestore', [CompanyDetailsController::class, 'storeOrUpdate'])->name('companyprofilestore');
Route::get('/settings', [SettingController::class, 'index'])->name('settings');
Route::post('/updateSettings', [SettingController::class, 'updateSettings'])->name('updateSettings');
Route::post('/generalUpdate', [SettingController::class, 'generalUpdate'])->name('generalUpdate');
Route::get('/forms', [FormsController::class, 'index'])->name('forms');
Route::get('/applicants',[ApplicantsController::class, 'applicants'])->name('applicants');
Route::post('/update-status/{id}', [ApplicantsController::class, 'updateStatus'])->name('updateStatus');
Route::get('/driverProfile/{id}', [DriverProfileController::class, 'driverProfile'])->name('driverProfile');
}); 
Route::post('/check-email', [EmployeeApplicationController::class, 'checkEmail']);


Route::post('/save-form', [FormsController::class, 'saveForm'])->name('saveForm');

Route::post('/store-driver-form', [DriverFromsController::class, 'storeDriverForm']);

// Route For Apply Now Page
Route::get('/applyNow', [EmployeeApplicationController::class, 'applyNow'])->name('applyNow');

// Route For Employee Application
Route::post('/applicationForEmployee', [EmployeeApplicationController::class, 'applicationForEmployee'])->name('applicationForEmployee');
// In your route file
Route::post('/applicationsubmition', [EmployeeApplicationController::class, 'applicationsubmition'])->name('applicationsubmition');


// //Route For Employee Application
// Route::get('/applicationForEmployee',[EmployeeApplicationController::class,'applicationForEmployee'])->name('applicationForEmployee');



// Routes For Forms
Route::get('/alabamastate', [FormsController::class, 'alabamaState']);
Route::get('/adpform', [FormsController::class, 'ADPForm']);
Route::get('/alcoholanddrugemployee', [FormsController::class, 'alcoholAndDrugEmployee']);
Route::get('/arizonaEmployeeWithholdingElection', [FormsController::class, 'arizonaEmployeeWithholdingElection']);
Route::get('/arizonaEmployeeWithholdingElection2023', [FormsController::class, 'arizonaEmployeeWithholdingElection2023']);
Route::get('/ArkansasDrugTestReleaseForm', [FormsController::class, 'ArkansasDrugTestReleaseForm']);
Route::get('/ArkansasStateWithholdingForm', [FormsController::class, 'ArkansasStateWithholdingForm']);
Route::get('/BackgroundCheckReleseForm', [FormsController::class, 'BackgroundCheckReleseForm']);
Route::get('/EmployeesWithholdingAllowanceCertificate', [FormsController::class, 'EmployeesWithholdingAllowanceCertificate']);
Route::get('/EmployerPullNoticeProgram', [FormsController::class, 'EmployerPullNoticeProgram']);
Route::get('/CertificationOfComplianceWithDriverLicenseRequIirements', [FormsController::class, 'CertificationOfComplianceWithDriverLicenseRequIirements']);
Route::get('/DCWithholding', [FormsController::class, 'DCWithholding']);
Route::get('/DelawareFormW_4', [FormsController::class, 'DelawareFormW_4']);
Route::get('/DriversRightsPertainingtoRelease', [FormsController::class, 'DriversRightsPertainingtoRelease']);
Route::get('/EEOCandidateVoluntarySelf_Identification', [FormsController::class, 'EEOCandidateVoluntarySelf_Identification']);
Route::get('/ExitInterview', [FormsController::class, 'ExitInterview']);
Route::get('/FedexOP_102AWorkHistoryVerificationRelease', [FormsController::class, 'FedexOP_102AWorkHistoryVerificationRelease']);
Route::get('/FedexOP_103CertificateofViolations', [FormsController::class, 'FedexOP_103CertificateofViolations']);
Route::get('/FMCSRClearinghouseLimitedQueryConsent', [FormsController::class, 'FMCSRClearinghouseLimitedQueryConsent']);
Route::get('/FormI_9', [FormsController::class, 'FormI_9']);
Route::get('/FormI_9_2020', [FormsController::class, 'FormI_9_2020']);
Route::get('/FormI_9_2023', [FormsController::class, 'FormI_9_2023']);
Route::get('/FormW_4_2018', [FormsController::class, 'FormW_4_2018']);
Route::get('/FormW_4_2019', [FormsController::class, 'FormW_4_2019']);
Route::get('/FormW_4_2020', [FormsController::class, 'FormW_4_2020']);
Route::get('/FormW_4_2021', [FormsController::class, 'FormW_4_2021']);
Route::get('/FormW_4_2022', [FormsController::class, 'FormW_4_2022']);
Route::get('/FormW_4_2023', [FormsController::class, 'FormW_4_2023']);
Route::get('/FormW_4_2024', [FormsController::class, 'FormW_4_2024']);
Route::get('/Form_W_9', [FormsController::class, 'Form_W_9']);
Route::get('/Form_W_9_v2', [FormsController::class, 'Form_W_9_v2']);
Route::get('/Form_W9_2019', [FormsController::class, 'Form_W9_2019']);
Route::get('/GeorgiaStateWithholdingForm', [FormsController::class, 'GeorgiaStateWithholdingForm']);
Route::get('/HireRightCaliforniaDisclosure', [FormsController::class, 'HireRightCaliforniaDisclosure']);
Route::get('/HireRightDisclosureandAuthorization', [FormsController::class, 'HireRightDisclosureandAuthorization']);
Route::get('/HireRightDotD_ADisclosureandAuthorization', [FormsController::class, 'HireRightDotD_ADisclosureandAuthorization']);
Route::get('/HireRightNewYorkDisclosure', [FormsController::class, 'HireRightNewYorkDisclosure']);
Route::get('/HireRightOtherDisclosures', [FormsController::class, 'HireRightOtherDisclosures']);
Route::get('/HireRightSanFranciscoDisclosure', [FormsController::class, 'HireRightSanFranciscoDisclosure']);
Route::get('/IllinoisDepartmentofRevenueFormIL_W_4', [FormsController::class, 'IllinoisDepartmentofRevenueFormIL_W_4']);
Route::get('/IndianaFormWH_4_2019', [FormsController::class, 'IndianaFormWH_4_2019']);
Route::get('/IRSForm8850_WOTC', [FormsController::class, 'IRSForm8850_WOTC']);
Route::get('/KansasStateWithholdingForm', [FormsController::class, 'KansasStateWithholdingForm']);
Route::get('/LouisianaStateWithholdingForm', [FormsController::class, 'LouisianaStateWithholdingForm']);
Route::get('/MarylandFormMW507', [FormsController::class, 'MarylandFormMW507']);
Route::get('/MedicalExaminersNationalRegistryVerification', [FormsController::class, 'MedicalExaminersNationalRegistryVerification']);
Route::get('/MississippiEmployeeWithholdingExemptionCertificate', [FormsController::class, 'MississippiEmployeeWithholdingExemptionCertificate']);
Route::get('/MissouriFormW4', [FormsController::class, 'MissouriFormW4']);
Route::get('/NewJerseyNonResidentForm', [FormsController::class, 'NewJerseyNonResidentForm']);
Route::get('/NewJerseyW4', [FormsController::class, 'NewJerseyW4']);
Route::get('/NewYorkStateWithholdingForm', [FormsController::class, 'NewYorkStateWithholdingForm']);
Route::get('/NewYorkStateWithholdingForm2021', [FormsController::class, 'NewYorkStateWithholdingForm2021']);
Route::get('/NorthCarolinaEmployeeWithholdingAllowanceCertificate', [FormsController::class, 'NorthCarolinaEmployeeWithholdingAllowanceCertificate']);
Route::get('/OfficeoftheSheriffofWashingtonCounty', [FormsController::class, 'OfficeoftheSheriffofWashingtonCounty']);
Route::get('/OhioEmployeeWithholdingExemptionCertificate2020', [FormsController::class, 'OhioEmployeeWithholdingExemptionCertificate2020']);
Route::get('/OhioEmployeesWithholdingExemptionCertificate', [FormsController::class, 'OhioEmployeesWithholdingExemptionCertificate']);
Route::get('/OKW4', [FormsController::class, 'OKW4']);
Route::get('/OwnerOperatorEquipmentForm', [FormsController::class, 'OwnerOperatorEquipmentForm']);
Route::get('/PARequestForDriverInformation', [FormsController::class, 'PARequestForDriverInformation']);
Route::get('/PAResidencyCertificationForm', [FormsController::class, 'PAResidencyCertificationForm']);
Route::get('/PAYCHEXDirectDepositEnrollmentChangeForm2016', [FormsController::class, 'PAYCHEXDirectDepositEnrollmentChangeForm2016']);
Route::get('/PaychexDirectDepositEnrollmentChangeForm2020', [FormsController::class, 'PaychexDirectDepositEnrollmentChangeForm2020']);
Route::get('/PaychexDirectDepositEnrollmentChangeForm2023', [FormsController::class, 'PaychexDirectDepositEnrollmentChangeForm2023']);
Route::get('/PAYCOMDirectDepositEnrollmentChangeForm', [FormsController::class, 'PAYCOMDirectDepositEnrollmentChangeForm']);
Route::get('/PreEmploymentAlcholDrugStatementFillable', [FormsController::class, 'PreEmploymentAlcholDrugStatementFillable']);
Route::get('/PREEMPLOYMENTURINALYSISNOTIFICATIONFillable', [FormsController::class, 'PREEMPLOYMENTURINALYSISNOTIFICATIONFillable']);
Route::get('/PreviousDrugTestingVerification', [FormsController::class, 'PreviousDrugTestingVerification']);
Route::get('/PreviousDrugTestingVerificationV2', [FormsController::class, 'PreviousDrugTestingVerificationV2']);
Route::get('/PreviousPreEmploymentEmployeeAlcoholandDrugTestStatementV2', [FormsController::class, 'PreviousPreEmploymentEmployeeAlcoholandDrugTestStatementV2']);
Route::get('/PreviousPreEmploymentEmployeeAlcoholandDrugTestStatementV3', [FormsController::class, 'PreviousPreEmploymentEmployeeAlcoholandDrugTestStatementV3']);
Route::get('/SevenDayPriorLogForm', [FormsController::class, 'SevenDayPriorLogForm']);
Route::get('/SouthCarolinaStateWithholdingForm', [FormsController::class, 'SouthCarolinaStateWithholdingForm']);
Route::get('/TexasReleaseofCDLHolder', [FormsController::class, 'TexasReleaseofCDLHolder']);
Route::get('/VermontStateWithholdingForm', [FormsController::class, 'VermontStateWithholdingForm']);
Route::get('/ViolationAndReviewRecord', [FormsController::class, 'ViolationAndReviewRecord']);
Route::get('/ViolationandReviewRecord2020', [FormsController::class, 'ViolationandReviewRecord2020']);
Route::get('/VirginiaStateWithholdingForm', [FormsController::class, 'VirginiaStateWithholdingForm']);
Route::get('/WADrivingRecordRelease', [FormsController::class, 'WADrivingRecordRelease']);
Route::get('/WisconsinWithholdingForm', [FormsController::class, 'WisconsinWithholdingForm']);
Route::get('/Agreement_1099', [FormsController::class, 'Agreement_1099']);
Route::get('/CompanyPolicyAgreement', [FormsController::class, 'CompanyPolicyAgreement']);
Route::get('/DirectDepositForm', [FormsController::class, 'DirectDepositForm']);
Route::get('/WorkersCompensationForm', [FormsController::class, 'WorkersCompensationForm']);




// TEMP ROUTE
Route::get('/linkstorage', function () {
    $targetFolder = base_path() . '/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});

Route::get('/linkstorage2', function () {
    $targetFolder = base_path() . '/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/public/storage';
    symlink($targetFolder, $linkFolder);
});




//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
<!doctype html>
<html lang="en">
<head>
    <title>PA Request For Driver Information</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
    @include('pages.forms.partials.header')
        
    </header>
   <main class="container-fluid" style="width: 80%;">
        <div class="card mx-sm-2 mx-md-5 my-sm-2 my-md-5 p-3" style="background-color: #FCFCFC"> 
            <div class="text-center p-3" style="background-color: #6DB4F5;">
                <h4 class="text-light">Pennsylvania Department of Transportation</h4>
                <h5 class="text-light">Request For Driver Information</h5>
            </div>
            <div class="row mt-3">
                <div class="mb-3 col-12 col-lg-12">
                    <label for="zip" class="form-label fw-bold">Check one only:*
                    </label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="" />
                        <label class="form-check-label" for=""> Basic Information: $11.00 Fee (Driver history is NOT included)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="" />
                        <label class="form-check-label" for="">  3 Year Driver Record: $11.00 Fee</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="" />
                        <label class="form-check-label" for=""> 10 Year Driver Record: $11.00 Fee (Employment Purposes Only)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="" />
                        <label class="form-check-label" for="">Full History: $11.00 Fee</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="" />
                        <label class="form-check-label" for="">Certified Driver Record: $36.00 Fee</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="" />
                        <label class="form-check-label" for="">Copy of Document From File (Microfilm): $11.00 Fee</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="" />
                        <label class="form-check-label" for="">Certified Copy of Document from File: $36.00 Fee</label>
                    </div>
                </div>
            </div>
            <p class="text-center">You may obtain a copy of your own 3 year of 10 year Driving Record on PennDOT's  website at www.dmv.pa.gov</p>
            <b>A. REQUESTER INFORMATION</b>
            <p>Name/Company: <br> 
                Address: <br>
                City: <br>
                State: <br>
                Zip Code: <br>
                Daytime Telephone Number (Required): <br>
                Relationship to Driver (Required): </p>
                <p class="fw-bold">Signature</p>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-6">
                        <div class="card" style="height: 150px; widht:150px;">

                        </div>
                        <p class="fw-bold text-primary">Help's</p>
                    </div>
                </div>
            <p>B. END USER OF INFORMATION BEING REQUESTED</p>
            <p>Name/Company:   <br>
                Address: <br>
                City: <br>
                State: <br>
                Zip Code: <br>
                Daytime Telephone Number (Required): <br>
                Relationship to Driver (Required):</p>
                <b>C. DRIVER INFORMATION</b>
            <form class="d-flex">
                <div class="row col-12">
                    <div class="mb-3 col-lg-6 col-12">
                        <label for="firstname" class="form-label fw-bold">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-lg-6 col-12">
                        <label for="lastname" class="form-label fw-bold">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Present  Address</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">City</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">State</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Zip</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Phone Number</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Date of Birth</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">License Number</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <b>D. AFFIDAVIT OF INTENDED USE</b>
                    <div class="row mt-3">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="zip" class="form-label fw-bold">Intended Use of the Information Requested: CHECK ONLY ONE* </label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">  B = Driver Release (Driver must complete Section E.)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">C = Credit Business (Legitimate Business need in connection with a business transaction initiated by the driver.)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">C = Credit Potential Investor, Server or Current Insurer (In connection with an assessment of the credit/payment risks associated with an existing credit obligation.)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> E = Employment (To support the hiring or the continuation of employment. Driver must complete section E.)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">R = Insurance Company requesting record of person it intends to insure, now insures, or has rejected for insurance.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> K = Court Order must be attached. (A subpoena issued in compliance with PA. R.C.P. 4009.21 will be accepted in lieu of a court order).</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> L = Attorney representing driver identified in Section C (Driver must complete Section E.)</label>
                            </div>
                        </div>
                    </div>
                    <b>E. DRIVER RELEASE</b>
                    <p>I <input type="text">(Name of Driver) hereby request the Department of Transportation to furnish a copy of my PA Driver's Record to <input type="text"> (Name of Company).</p>
               
                    <p class="fw-bold">Signature</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">
    
                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>
                                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Date</label>
                            <input type="date" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <b>F. MICROFILM</b>
                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Type of Document</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Date of Violation</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>(see list of available documents below)</p>
                    <hr>
                    <p>Documents Available:</p>
                    <ul class="mx-4">
                        <li>Citations</li>
                        <li>Court Certifications</li>
                        <li>Applications</li>
                        <li>License Renewals</li>
                        <li>Judgments</li>
                        <li>Suspension Credit Affidavits</li>
                        <li>Ignition Interlock Removal Letter</li>
                        <li>Suspension/Revocation Letters</li>
                        <li>Restoration Letters</li>
                        <li>Rescind Letters</li>
                        <li>Department Hearing or Exam Notice</li>
                    </ul>

                    <p>I hereby certify that <input type="text" name="" id="">
                        (Name of Requester) will use the driver record abstract(s) required pursuant to Section 6114 of the Pennsylvania Vehicle Code, for the purpose checked above only and no other reason. This affidavit is filed in compliance with Section 607 of the Fair Credit Reporting Act. I/We have read and signed this form after its completion, and I/We swear or affirm that the statements made herein are true and correct, and that any statement made on or pursuant to this form is subject to the penalties of 18 Pa C.S. Section 4903(a)(2) (relating to false swearing), which shall include punishment of a fine not exceeding $5,000, or to a term of imprisonment of not more than two years, or both. </p>
                        <p class="fw-bold">Signature of Requestor*</p>
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <div class="card" style="height: 150px; widht:150px;">
        
                                </div>
                                <p class="fw-bold text-primary">Help's</p>
                            </div>
                        </div>
                    <p>Title: Records Supervisor</p>
                    <b class="text-center">INSTRUCTIONS</b>
                    <ol class="mx-4">
                        <li>To request your own record, complete Sections A &C only. Notarization is NOT required. </li>
                        <li>To request a record other than your own, complete Sections A, C, and D. Section E must contain the driver's signature if block B, E, or L is checked in Section D. If the Requester is obtaining the information on behalf of someone else, Section B must also be completed.</li>
                        <li>TYPE all requested information on the front of the form. Submitting ONLY a name and address does not provide enough information for a proper search of the driver files.</li>
                        <li>A non-refundable fee is required for each request. If the Bureau has no record for the information requested or the data supplied is insufficient, the fee will be applied to the cost of the search. </li>
                        <li>If requesting a microfilm copy of a document, also complete Section F. You must be specific in providing the type and date of the document. If there are several citations on the record, the cost is $10.00 per citation. You need to provide the date of the violation/action to clearly identify the citation(s) requested</li>
                        <li>Check the type of record requested at the top of the form and make check of money order payable to "PennDOT." DO NOT SEND CASH. Atach your check or money order and sent to: </li>
                    </ol>
                    <p>BUREAU OF DRIVER LICENSING <br>
                        DRIVER RECORD SERVICES <br>
                        P.O. BOX 68695 <br>
                        HARRISBURG, PA 17106-8695</p>
                    <p><span class="text-decoration-underline">For overnight and other special mail:</span> <br>
                        BUREAU OF DRIVER LICENSING <br>
                        DRIVER RECORD SERVICES <br>
                        1101 SOUTH FRONT STREET 3RD FLOOR <br>
                        HARRISBURG, PA 17104-2516</p> 
                    <h5 class="text-center">DESCRIPTION OF INFORMATION AVAILABLE</h5>
                    <ul class="mx-4">
                        BASIC INFORMATION ($11.00 fee)
                        <li>Includes name, address, driver number, date of birth and class of license.</li>
                        3 YEAR RECORD* ($11.00 fee)
                        <li>Includes name, address, driver number, date of birth, class, license status, Departmental actions and violations for the past 3 years from the date request is processed.</li>
                        10 YEAR RECORD* ($10.00 fee)
                        <li>Includes name, address, driver number, date of birth, class, license status, Departmental actions and violations for the past 10 years from the date requested is processed. A 10-year record is for employment purposes only. </li>
                        FULL HISTORY ($11.00 fee)
                        <li>includes name, address, driver number, date of birth, class, license status, Departmental actions and violations for the COMPLETE history of the driver on file in Pennsylvania. </li>
                        CERTIFIED RECORD ($36.00 fee)
                        <li>Includes name, address, driver number, date of birth, class, license status, Departmental actions and violations for COMPLETE history of the driver on file in Pennsylvania certified by the Department.</li>
                        MICROFILM DOCUMENT ($11.00 fee)
                        <li>Copies of documents retained by the Department are available for purchase from the microfilm file. You must be as to the type of document and the date of the violation/action.</li>
                        CERTIFIED COPY OF DOCUMENT ($36.00 fee)
                        <li>Copies of documents from the microfilm file that have been certified by the Department. </li>
                    </ul>
                    <b class="text-center">IMPORTANT INFORMATION CONCERNING THE USE OF DRIVER INFORMATION</b>
                    <ul class="mx-4">
                        <li>Driver record information is confidential and restricted information and the Requester/End User is responsible for establishing procedures to protect the confidentiality of these records</li>
                        <li>Driver record information can only be used for the purpose stated in Section D.</li>
                        <li>Driver record information cannot be sold, assigned, or otherwise transferred to any party, other than the End User.</li>
                        <li>PennDOT retains exclusive ownership of all driver record information and the Requester/End User shall not combine and/or link in with any other data on any database except as may be required by law. </li>
                        <li>The driver record information cannot be used for direct mail advertising or any other type or types of mail or mailings. </li>
                        <li>The driver record information cannot be disseminated or published on the Internet without the express written permission of PennDOT.</li>
                        <li>PennDOT reserves the right to audit each request for driver record information. If the Requester/End User is found to have requested driver record information for an unauthorized purpose, access to the Pennsylvania driver record information will be terminated. </li>
                    </ul>
                    <b class="text-center">Visit us at www.dmv.pa.gov or call us at 717-412-5300 // TDD: 711</b>
                    
                    <p>*Businesses who obtain driver records for the purpose of employment or insurance are now able to obtain and print these records, in real time, through our enhanced Online Services. </p>
                    <p>If you are an employer or insurance company/agent and are interested in becoming an authorized Online business user, please visit our website at www.dmv.pa.gove and click on "Online Business Services" for more information. </p>
                    
                    
                </div>
            </form>




        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
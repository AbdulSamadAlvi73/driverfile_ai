<!doctype html>
<html lang="en">

<head>
    <title>Form I-9</title>
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
            <div class="mt-4">
            <p>Employment Eligibility Verification <br>
                Department of Homeland Security <br>
                U.S. Citizenship and Immigration Services</p>
                <p>USCIS <br>
                    Form I-9 <br>
                    OMB No. 1615-0047 <br>
                    Expires 08/31/2019</p>
                    <p>Form I-9 07/17/17 N</p>
            <p><b>START HERE:</b>Read instructions carefully before completing this form. The instructions must be available, either in paper or electronically, during completion of this form.Employers are liable for errors in the completion of this form.</p>
            <p><b>ANTI-DISCRIMINATION NOTICE:</b> It is illegal to discriminate against work-authorized individuals. Employers CANNOT specify which document(s) an employee may present to establish employment authorization and identity. The refusal to hire or continue to employ
                an individual because the documentation presented has a future expiration date may also constitute illegal discrimination.</p>
                <h5>Section 1. Employee Information and Attestation</h5>
            <p>(Employees must complete and sign Section 1 of Form I-9 no later than the first day of employment, but not before accepting a job offer.)</p>
        </div>
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
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="snn" class="form-label fw-bold">Other Last Names Used (if any)</label>
                        <input type="text" name="snn" id="snn" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Present  Address</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Apt. Number</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">City</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">State</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
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
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Date of Birth</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">SSN</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Email Address</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Phone Number</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>I am aware that federal law provides for imprisonment and/or fines for false statements or use of false documents in connection with the completion of this form.</p>
                    <p>I attest, under penalty of perjury,that I am (check one of the following boxes):</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Under penalty of perjury</label>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for="">  1. A citizen of the United States</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for=""> 2. A noncitizen national of the United States (See instructions) </label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for="">  3. A lawful permanent resident(Alien Registration Number/USCIS Number): </label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for="">   4. An alien authorized to work until (expiration date, if applicable, mm/dd/yyyy) </label>
                           </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">3. Alien Registration Number/USCIS Number</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">4. expiration date, if applicable, mm/dd/yyyy</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>Some aliens may write "N/A" in the expiration date field. (See instructions)</p>
                    <p>Aliens authorized to work must provide only one of the following document numbers to complete Form I-9:
                        An Alien Registration Number/USCIS Number OR Form I-94 Admission Number OR Foreign Passport Number.</p>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">1. Alien Registration Number/USCIS Number:</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="text-center">
                        OR
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">2. Form I-94 Admission Number:</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>  

                    <div class="text-center">
                        OR
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">3. Foreign Passport Number:</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">Country of Issuance:</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>QR Code - Section 1 <br>
                        Do Not Write In This Space</p>
        
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

                    <h5>Preparer and/or Translator Certification (check one):</h5>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">Preparer and/or Translator Certification</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="" />
                                <label class="form-check-label" for="">  I did not use a preparer or translator. </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="" />
                                <label class="form-check-label" for=""> Fem A preparer(s) and/or translator(s) assisted the employee in completing Section 1. </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <b>I attest, under penalty of perjury, that I have assisted in the completion of Section 1 of this form and that to the best of my knowledge the information is true and correct.</b>

                    <p class="fw-bold">Signature of Preparer or Translator</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">
    
                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Today's Date</label>
                            <input type="date" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Last Name (Family Name)</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">First Name (Given Name)</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Address (Street Number and Name)</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">City or Town</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">State</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Zip Code</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <p>Employer completes next page</p>
                    <p>Form I-0 07/17/17 N</p>
                    <p>(Fields below must be completed and signed when preparers and/or translators assist an employee in completing Section 1.)</p>
                    <h5 class="text-center">Employment Eligibility Verification</h5>
                    <h5 class="text-center">Department of Homeland Security</h5>
                    <p>U.S. Citizenship and Immigration Services</p>
                    <p>USCIS <br>
                        Form I-9 <br>
                        OMB No. 1615-0047 <br>
                        Expires 08/31/2019</p>
                        <h5>Section 2. Employer or Authorized Representative Review and Verification</h5>
                        <p>(Employers or their authorized representative must complete and sign Section 2 within 3 business days of the employee's first day of employment. You must physically examine one document from List A OR a combination of one document from List B and one document from List C as listed on the "Lists of Acceptable Documents.")</p>


                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Last Name (Family Name)</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">First Name (Given Name)</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">M.I.</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Citizenship/Immigration Status</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        <h5 class="text-center">List A</h5>
                        <h5 class="text-center">Identity and Employment Authorization </h5>
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Document Title</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Issuing Authority</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Document Number </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Expiration Date (if any)(mm/dd/yyyy) </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="mt-5">
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Document Title</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Issuing Authority</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Document Number </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Expiration Date (if any)(mm/dd/yyyy) </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                    </div>
                    <div class="mt-5">
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Document Title</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Issuing Authority</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Document Number </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Expiration Date (if any)(mm/dd/yyyy) </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                    </div>

                    <h5 class="text-center">List B</h5>
                    <h5 class="text-center">Identity</h5>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Document Title</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Issuing Authority</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Document Number </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Expiration Date (if any)(mm/dd/yyyy) </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
               

                        <h5 class="text-center">List C</h5>
                        <h5 class="text-center">Employment Authorization</h5>
    
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Document Title</label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Issuing Authority</label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Document Number </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Expiration Date (if any)(mm/dd/yyyy) </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                   
                            <p>Additional Information</p>
                            <Do>QR Code - Sections 2 & 3 <br>
                            Do Not Write In This Space</p>
                            <p>Certification: I attest, under penalty of perjury, that (1) I have examined the document(s) presented by the above-named employee, (2) the above-listed document(s) appear to be genuine and to relate to the employee named, and (3) to the best of my knowledge the employee is authorized to work in the United States.</p>


                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">The employee's first day of employment (mm/dd/yyyy) </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                        <small>
                                            (See instructions for exemptions)</small>
                                </div>
                            </div>

                            <p class="fw-bold">Signature of Employer or Authorized Representative</p>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <div class="card" style="height: 150px; widht:150px;">
            
                                    </div>
                                    <p class="fw-bold text-primary">Help's</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Today's Date</label>
                                    <input type="date" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Title of Employer or Authorized Representative </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Last Name of Employer or Authorized Representative </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">First Name of Employer or Authorized Representative</label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Employer's Business or Organization Name  </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Employer's Business or Organization Address (Street Number and Name) </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">City or Town  </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">State </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">ZIP Code </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <h5>Section 3.Reverification and Rehires (To be completed and signed by employer or authorized representative.)</h5>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">A. New Name (if applicable) </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">B. Date of Rehire (if applicable) </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Last Name (Family Name) </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">First Name (Given Name) </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Middle Initial  </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Date(mm/dd/yyyy) </label>
                                    <input type="date" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <p>C. If the employee's previous grant of employment authorization has expired, provide the information for the document or receipt that establishes continuing employment authorization in the space provided below.</p>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Document Title </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Document Number  </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Expiration Date(if any)(mm/dd/yyyy) </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <p>I attest, under penalty of perjury, that to the best of my knowledge, this employee is authorized to work in the United States,and if the employee presented document(s), the document(s) I have examined appear to be genuine and to relate to the individual.</p>
                            <p>Form I-9 07/17/17 N</p>

                            <p class="fw-bold">Signature of Employer or Authorized Representative</p>
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


                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Name of Employer or Authorized Representative</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>


                        <h5>LISTS OF ACCEPTABLE DOCUMENTS</h5>
                        <b>All documents must be UNEXPIRED</b>

                        <p>Employees may present one selection from List A or a combination of one selection from List B and one selection from List C.</p>

                        <b>LIST A <br>

                            Documents that Establish <br>
                            
                            Both Identity and <br>
                            
                            Employment Authorization</b>

                            <ol class="mt-3">
                                <li>U.S. Passport or U.S. Passport Card</li>
                                <li>Permanent Resident Card or Alien</li>
                                <p>Registration Receipt Card (Form I-551)</p>
                                <li>Foreign passport that contains a temporary I-551 stamp or temporary I-551 printed notation on a machine-readable immigrant visa</li>
                                <li> Employment Authorization Document that contains a photograph (Form I-766)</li>
                                <li> For a nonimmigrant alien authorized to work for a specific employer because of his or her status:</li>
                                <p>a.Foreign passport; and</p>
                                <p>b.Form I-94 or Form I-94A that has the following:</p>
                                <p>(1) The same name as the passport; and</p>
                                <p>(2) An endorsement of the alien's nonimmigrant status as long as that period of endorsement has not yet expired and the proposed employment is not in conflict with any restrictions orlimitations identified on the form.</p>
                                <li> Passport from the Federated States of Micronesia (FSM) or the Republic of

                                    the Marshall Islands (RMI) with Form I-94 or Form I-94A indicating nonimmigrant admission under the Compact of Free Association Between the United States and the FSM or RMI</li>
                            </ol>

                                <h5 class="text-center">OR</h5>
                                <b>LIST B <br>
                                    Documents that Establish Identity</b>

                                    <ol class="mt-3">
                                        <li>Driver's license or ID card issued by a State or outlying possession of the United States provided it contains a photograph or information such as name, date of birth, gender, height, eye color, and address</li>
                                        <li>.ID card issued by federal, state or local government agencies or entities, provided it contains a photograph or information such as name, date of birth,gender, height, eye color, and address</li>
                                        <li>School ID card with a photograph</li>
                                        <li>Voter's registration card</li>
                                        <li>U.S. Military card or draft record</li>
                                        <li>Military dependent's ID card</li>
                                        <li>U.S. Coast Guard Merchant MarinerCard</li>
                                        <li>.Native American tribal documen</li>
                                        <li>Driver's license issued by a Canadian government authority</li>
                                        <p>For persons under age 18 who are unable to present a document listed above:</p>
                                        <li> School record or report card</li>
                                        <li>Clinic, doctor, or hospital record</li>
                                        <li> Day-care or nursery school record</li>
                                    </ol>
                                    <b>AND</b> <br>
                                    <b>LIST C <br>
                                        Documents that Establish Employment Authorization</b>   

                                        <ol class="mt-3">
                                            <li> A Social Security Account Number card, unless the card includes one of the following restrictions:</li>
                                            <p>(1) NOT VALID FOR EMPLOYMENT <br>
                                                (2) VALID FOR WORK ONLY WITH INS AUTHORIZATION <br>
                                                (3) VALID FOR WORK ONLY WITH DHS AUTHORIZATION</p>
                                                <li>Certification of report of birth issued by the Department of State (Forms DS-1350, FS-545, FS-240)</li>
                                                <li>Original or certified copy of birth certificate issued by a State, county, municipal authority, or territory of the United States bearing an official seal</li>
                                                <li>Native American tribal document</li>
                                                <li>U.S. Citizen ID Card (Form I-197)</li>
                                                <li>Identification Card for Use of Resident Citizen in the United States (Form I-179)</li>
                                                <li>Employment authorization document issued by the Department of Homeland Security</li>
                                        </ol>
                                        <p>Examples of many of these documents appear in Part 13 of the Handbook for Employers (M-274).</p>

                                        <p>Refer to the instructions for more information about acceptable receipts.</p>

                                        <p>Form I-9 07/17/17 N</p>



                    {{-- <a name="" id="" class="btn btn-danger float-end col-2 m-2" href="#" role="button">SUBMIT</a> --}}
                        
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
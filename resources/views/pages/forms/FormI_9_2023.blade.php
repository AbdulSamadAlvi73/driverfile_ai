<!doctype html>
<html lang="en">

<head>
    <title>Form I-9 2023</title>
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
                    Expires 7/31/2026</p>
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
                    <p>I attest, under penalty of perjury, that this information, including my selection of the box attesting to my citizenship or immigration status, is true and correct.</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Check one of the following boxes to attest to your citizenship or immigration status (See page 2 of the instructions) </label>
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
                            <label class="form-check-label" for="">    4. A noncitizen (other than Item Numbers 2 and 3 above) authorized to work until (exp date if any) </label>
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
                    <p>If you check Number 4, enter one of these:</p>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">USCIS A-Number:</label>
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

                    <p>If a preparer and/or translator assisted you in completing Section 1, that person MUST complete the Preparer and/or Translator Certification on Page 3.</p>
                    <p><b>Section 2. Employer Review and Verification:</b> Employers or their authorized representative must complete and sign Section 2 within three business days after the employee's first day of employment, and must physically examine, or examine consistent with an alternative procedure authorized by the Secretary of DHS, documentation from List A OR a combination of documentation from List B and List C. Enter any additional documentation in the Additional Information box; see Instructions. </p>

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
                                <label for="state" class="form-label fw-bold">Document Number (if any) </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Expiration Date (if any) </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

            
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Please enter your question</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Please enter your question</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Please enter your question </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Date </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Please enter your question</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Please enter your question</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Please enter your question </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Date </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
        
                    <h5 class="text-center">List B</h5>
                    <h5 class="text-center">Identity</h5>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Document Title 1</label>
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
                                <label for="state" class="form-label fw-bold">Document Number (if any) </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Expiration Date (if any) </label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
               

                        <h5 class="text-center">AND</h5>
                        <h5 class="text-center">List C</h5>
    
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Document Title 1</label>
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
                                    <label for="state" class="form-label fw-bold">Document Number (if any) </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Expiration Date (if any) </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="completeaddress" class="form-label fw-bold">Additional Information</label>
                                <textarea name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                                    aria-describedby="helpId"></textarea>
                            </div>

                            <div class="form-check mx-3">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Check here if you used an alternative procedure authorized by DHS to examine documents. </label>
                            </div>
                            
                   
                            <p>Certification: I attest, under penalty of perjury, that (1) I have examined the document(s) presented by the above-named employee, (2) the above-listed document(s) appear to be genuine and to relate to the employee named, and (3) to the best of my knowledge the employee is authorized to work in the United States.</p>


                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">The employee's first day of employment (mm/dd/yyyy)</label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-12 col-lg-6">
                                    <label for="state" class="form-label fw-bold">Last Name, First Name and Title of Employer or Authorized Representative</label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
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
                                    <label for="state" class="form-label fw-bold">Employer's business or Organization Name </label>
                                    <input type="text" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="completeaddress" class="form-label fw-bold">Employer's business or Organization Address, City or Town, State, Zip Code</label>
                                <textarea name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                                    aria-describedby="helpId"></textarea>
                            </div>

                            <h5 class="text-center">LISTS OF ACCEPTABLE DOCUMENTS</h5>
                            <p class="text-center">All documents containing an expiration date must be unexpired. <br>
                                * Documents extended by the issuing authority are considered unexpired. <br>
                                Employees may present one selection from List A or a <br>
                                combination of one selection from List B and one selection from List C.</p>
                                <b class="text-center">Examples of many of these documents appear in the Handbook for Employers (M-274).</b>
                                <p>Employees may present one selection from List A or a combination of one selection from List B and one selection from List C.</p>
                                <h5>LIST A</h5>
                                <b>Documents that Establish Both Identity and Employment Authorization</b>


                            <ol class="mt-3 mx-3">
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

                                    <ol class="mt-3 mx-3">
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

                                        <ol class="mt-3 mx-3">
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
                                        <p>For examples, see Section 7 and Section 13 of the M-274 on uscis.gov/i-9-central.</p>
                                        <p>The Form I-766, Employment Authorization Document, is a List A, Item Number 4, document, not a List C document. </p>

                                        <b class="text-center">Acceptable Receipts</b>
                                        <p class="text-center">May be presented in lieu of a document listed above for a temporary period. <br>
                                            For receipt validity dates, see the M-274.</p>

                                            <ul class="mx-3">
                                                <li>Receipt for a replacement of a lost, stolen, or damaged List A document.</li>
                                                <li>Form I-94 issued to a lawful permanent resident that contains an I-551 stamp and a photograph of the individual.</li>
                                                <li>Form I-94 with “RE” notation or refugee stamp issued to a refugee </li>
                                            </ul>

                                                <h5 class="text-center">OR</h5>

                                                <p>Receipt for a replacement of a lost, stolen, or damaged List B document. </p>
                                                <p>Receipt for a replacement of a lost, stolen, or damaged List C document. </p>


                                                <b class="text-center">Supplement A, <br>
                                                    Preparer and/or Translator Certification for Section 1 <br>
                                                    Department of Homeland Security</b>
                                                    <p class="text-center">U.S. Citizenship and Immigration Services</p>

                                                    <div class="row">
                                                        <div class="mb-3 col-12 col-lg-6">
                                                            <label for="state" class="form-label fw-bold">Last Name (Family Name ) from Section 1</label>
                                                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-12 col-lg-6">
                                                            <label for="state" class="form-label fw-bold">First Name (Given Name) from Section 1</label>
                                                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-12 col-lg-6">
                                                            <label for="state" class="form-label fw-bold">Middle Name (if any) from Section 1</label>
                                                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>
                                                    </div>
                                                    <p><b>Instructions:</b> This supplement must be completed by any preparer and/or translator who assists an employee in completing Section 1 of Form I-9. The preparer and/or translator must enter the employee's name in the spaces provided above. Each preparer or translator must complete, sign, and date a separate certification area. Employers must retain completed supplement sheets with the employee's completed Form I-9.</p>
                                                    <b>I attest, under penalty of perjury, that I have assisted in the completion of Section 1 of this form and that to the best of my knowledge the information is true and correct.</b>


                                                    <p class="fw-bold mt-3">Signature of Preparer or Translator</p>
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
                                                            <label for="state" class="form-label fw-bold">Middle Initial (if any)</label>
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
                                                            <label for="state" class="form-label fw-bold"> Zip Code</label>
                                                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>
                                                    </div>
                                                    <b>I attest, under penalty of perjury, that I have assisted in the completion of Section 1 of this form and that to the best of my knowledge the information is true and correct.</b>


                                                    <p class="fw-bold mt-3">Signature of Preparer or Translator</p>
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
                                                            <label for="state" class="form-label fw-bold">Middle Initial (if any)</label>
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
                                                            <label for="state" class="form-label fw-bold"> Zip Code</label>
                                                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>
                                                    </div>
                                                    <b>I attest, under penalty of perjury, that I have assisted in the completion of Section 1 of this form and that to the best of my knowledge the information is true and correct.</b>


                                                    <p class="fw-bold mt-3">Signature of Preparer or Translator</p>
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
                                                            <label for="state" class="form-label fw-bold">Middle Initial (if any)</label>
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
                                                            <label for="state" class="form-label fw-bold"> Zip Code</label>
                                                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                aria-describedby="helpId" />
                                                        </div>
                                                    </div>

                                                    <b class="text-center">Supplement B, <br>
                                                        Reverification and Rehire (formerly Section 3) <br>
                                                        Department of Homeland Security</b>
                                                        <p class="text-center">U.S. Citizenship and Immigration Services </p>
                                                        <div class="row">
                                                            <div class="mb-3 col-12 col-lg-6">
                                                                <label for="state" class="form-label fw-bold">Last Name (Family Name ) from Section 1</label>
                                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                    aria-describedby="helpId" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-3 col-12 col-lg-6">
                                                                <label for="state" class="form-label fw-bold"> First Name (Given Name) from Section 1</label>
                                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                    aria-describedby="helpId" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-3 col-12 col-lg-6">
                                                                <label for="state" class="form-label fw-bold">Middle Name (if any) from Section 1</label>
                                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                    aria-describedby="helpId" />
                                                            </div>
                                                        </div>
                                                        <b>Instructions: This supplement replaces Section 3 on the previous version of Form I-9. Only use this page if your employee requires reverification, is rehired within three years of the date the original Form I-9 was completed, or provides proof of a legal name change. Enter the employee's name in the fields above. Use a new section for each reverification or rehire. Review the Form I-9 instructions before completing this page. Keep this page as part of the employee's Form I-9 record. Additional guidance can be found in the Handbook for Employers: Guidance for Completing Form I-9 (M-274) </b>
                                                        <div class="row">
                                                            <div class="mb-3 col-12 col-lg-6">
                                                                <label for="state" class="form-label fw-bold">Date (mm/dd/yyyy)</label>
                                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
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
                                                                <label for="state" class="form-label fw-bold">Middle Initial (if any)</label>
                                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                    aria-describedby="helpId" />
                                                            </div>
                                                        </div>
                                                        <p>Reverification: If the employee requires reverification, your employee can choose to present any acceptable List A or List C documentation to show continued employment authorization. Enter the document information in the spaces below. </p>
                                                        <div class="row">
                                                            <div class="mb-3 col-12 col-lg-6">
                                                                <label for="state" class="form-label fw-bold">Document Title</label>
                                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                    aria-describedby="helpId" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-3 col-12 col-lg-6">
                                                                <label for="state" class="form-label fw-bold">Document Number (if any)</label>
                                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                    aria-describedby="helpId" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-3 col-12 col-lg-6">
                                                                <label for="state" class="form-label fw-bold">Expiration Date (mm/dd/yyyy)</label>
                                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                    aria-describedby="helpId" />
                                                            </div>
                                                        </div>
                                                        <p>I attest, under penalty of perjury, that to the best of my knowledge, this employee is authorized to work in the United States, and if the employee presented documentation, the documentation I examined appears to be genuine and to relate to the individual who presented it.</p>
                                                        <div class="row">
                                                            <div class="mb-3 col-12 col-lg-6">
                                                                <label for="state" class="form-label fw-bold">Name of Employer or Authorized Representative</label>
                                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                    aria-describedby="helpId" />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="mb-3 col-12 col-lg-6">
                                                                <label for="state" class="form-label fw-bold">Middle Initial (if any)</label>
                                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                                    aria-describedby="helpId" />
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
                                                <label for="state" class="form-label fw-bold">Date</label>
                                                <input type="date" name="state" id="state" class="form-control" placeholder=""
                                                    aria-describedby="helpId" />
                                            </div>
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label for="completeaddress" class="form-label fw-bold">Additional Information (Initial and date each notation)</label>
                                            <textarea name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                                                aria-describedby="helpId"></textarea>
                                        </div>
                                        <div class="form-check mx-3">
                                            <input class="form-check-input" type="checkbox" value="" id="" />
                                            <label class="form-check-label" for=""> check here if you used an alternative procedure authorized by DHS to examine documents </label>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-lg-6">
                                                <label for="state" class="form-label fw-bold">Date (mm/dd/yyyy)</label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
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
                                                <label for="state" class="form-label fw-bold">Middle Initial (if any)</label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                    aria-describedby="helpId" />
                                            </div>
                                        </div>
                                        <p>Reverification: If the employee requires reverification, your employee can choose to present any acceptable List A or List C documentation to show continued employment authorization. Enter the document information in the spaces below. </p>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-lg-6">
                                                <label for="state" class="form-label fw-bold">Document Title</label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                    aria-describedby="helpId" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-lg-6">
                                                <label for="state" class="form-label fw-bold">Document Number (if any)</label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                    aria-describedby="helpId" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-lg-6">
                                                <label for="state" class="form-label fw-bold">Expiration Date (mm/dd/yyyy)</label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                    aria-describedby="helpId" />
                                            </div>
                                        </div>
                                        <p>I attest, under penalty of perjury, that to the best of my knowledge, this employee is authorized to work in the United States, and if the employee presented documentation, the documentation I examined appears to be genuine and to relate to the individual who presented it.</p>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-lg-6">
                                                <label for="state" class="form-label fw-bold">Name of Employer or Authorized Representative</label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                                    aria-describedby="helpId" />
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
                                <label for="state" class="form-label fw-bold">Date</label>
                                <input type="date" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="completeaddress" class="form-label fw-bold">Additional Information (Initial and date each notation)</label>
                            <textarea name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                                aria-describedby="helpId"></textarea>
                        </div>
                        <div class="form-check mx-3">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> check here if you used an alternative procedure authorized by DHS to examine documents </label>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Date (mm/dd/yyyy)</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
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
                                <label for="state" class="form-label fw-bold">Middle Initial (if any)</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        <p>Reverification: If the employee requires reverification, your employee can choose to present any acceptable List A or List C documentation to show continued employment authorization. Enter the document information in the spaces below. </p>
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Document Title</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Document Number (if any)</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Expiration Date (mm/dd/yyyy)</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        <b>I attest, under penalty of perjury, that I have assisted in the completion of Section 1 of this form and that to the best of my knowledge the information is true and correct.</b>

                        <div class="row mt-3">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="state" class="form-label fw-bold">Name of Employer or Authorized Representative</label>
                                <input type="text" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
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
                                    <label for="state" class="form-label fw-bold">Date</label>
                                    <input type="date" name="state" id="state" class="form-control" placeholder=""
                                        aria-describedby="helpId" />
                                </div>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="completeaddress" class="form-label fw-bold">Additional Information (Initial and date each notation)</label>
                                <textarea name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                                    aria-describedby="helpId"></textarea>
                            </div>
                            <div class="form-check mx-3">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> check here if you used an alternative procedure authorized by DHS to examine documents </label>
                            </div>
                            <p><a hQref="https://secure.i9.talx.com/Popups/Documents/I-9InstructionsNew.pdf" target="_blank">Instructions for Form I-9</a></p>




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
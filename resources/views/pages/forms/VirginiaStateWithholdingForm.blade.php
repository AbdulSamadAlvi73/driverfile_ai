<!doctype html>
<html lang="en">

<head>
    <title>Virginia State Withholding Form</title>
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
            <div class="text-center p-2" style="background-color: #6DB4F5;">
                <h4 class="text-light p-3">FORM VA-4</h4>
            </div>
            <b class="text-center mt-3">COMMONWEALTH OF VIRGINIA <br>
                DEPARTMENT OF TAXATION <br>
                PERSONAL EXEMPTION WORKSHEET </b>
             <form class="d-flex">
                <div class="row col-12 mt-2">
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">1. If you wish to claim yourself, write "1"</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">2. If you are married and your spouse is not claimed on his or her own certificate, write "1"</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">3. Write the number of dependents you will be allowed to claim on your income tax return (do not include your spouse)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">4. Subtotal Personal Exemptions (add lines 1 through 3)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">5(a). Exemptions for age - If you will be 65 or older on January 1, write "1"</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">5(b). Exemptions for age - If you claimed an exemption on line 2 and your spouse will be 65 or older on January 1, write "1"</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">6(a). Exemptions for blindness - If you are legally blind, write "1"</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">6(b). If you claimed an exemption on line 2 and your spouse is legally blind, write "1"</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">7. Subtotal exemptions for age and blindness (add lines 5 through 6)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">8. Total of Exemptions - add line 4 and line 7</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <hr>
                    <h5 class="">FORM VA-4  EMPLOYEE’S VIRGINIA INCOME TAX WITHHOLDING EXEMPTION CERTIFICATE</h5>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">SSN</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label fw-bold">First Name</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label fw-bold">Last Name</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Present Address</label>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">City</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">State</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Zip</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>COMPLETE THE APPLICABLE LINES BELOW</p>
                    <b>1. If subject to withholding, enter the number of exemptions claimed on: </b>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">(a) Subtotal of Personal Exemptions - line 4 of the Personal Exemption Worksheet</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">(b) Subtotal of Exemptions for Age and Blindness line 7 of the Personal Exemption Worksheet</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">(c) Total Exemptions - line 8 of the Personal Exemption Worksheet</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">2. Enter the amount of additional withholding requested (see instructions)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">3. I certify that I am not subject to Virginia withholding. l meet the conditions set forth in the instructions ..............(check here</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">4. I certify that I am not subject to Virginia withholding. l meet the conditions set forth Under the Service member Civil Relief Act, as amended by the Military Spouses Residency Relief Act..............(check here)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p class="">Signature *</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">

                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>
                    
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label">Date</label>
                        <input type="date" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p>EMPLOYER: Keep exemption certificates with your records. If you believe the employee has claimed too many exemptions, notify	 the Department of Taxation, P.O. Box 1115, Richmond, Virginia 23218-1115, Telephone (804) 367-8037.  Note: Employers may establish a system to electronically receive Forms VA-4 from employees, provided the system meets Internal Revenue Service requirements as specified in §31.3402(f)(5)-1(c) of the Treasury Regulations (26 CFR).</p>
                    <h5 class="text-center">FORM VA-4 INSTRUCTIONS </h5>
                    <p>Use this form to notify your employer whether you are subject to Virginia income tax withholding and how many exemptions you are allowed to claim. You must file this form with your employer when your employment begins. If you do not file this form, your employer must withhold Virginia income tax as if you had no exemptions.</p>
                    <h5 class="text-center">PERSONAL EXEMPTION WORKSHEET </h5>
                    <p class="fw-bold">You may not claim more personal exemptions on form VA-4 than you are allowed to claim on your income tax return unless you have received written permission to do so from the Department of Taxation. Line 1. You may claim an exemption for yourself.</p>
                    <p>Line 2. You may claim an exemption for your spouse if he or she is not already claimed on his or her own certificate. <br>
                        Line 3. Enter the number of dependents you are allowed to claim on your income tax return. <br>
                        <b>NOTE:</b> A spouse is not a dependent. <br>
                        Line 5. If you will be age 65 or over by January 1, you may claim one exemption on Line 5(a). If you claim an   exemption for your spouse on Line 2, and your spouse will also be age 65 or over by January 1, you may   claim an additional exemption on Line 5(b). <br>
                        Line 6. If you are legally blind, you may claim an exemption on Line 6(a). If you claimed an exemption for your spouse on Line 2, and your spouse is legally blind, you may claim an exemption on Line 6(b).</p>
                    <p>FORM VA-4 <br>
                        Be sure to enter your social security number, name and address in the spaces provided. <br>
                        Line 1. If you are subject to withholding, enter the number of exemptions from: <br>
                        (a) Subtotal of Personal Exemptions - line 4 of the Personal Exemption Worksheet <br>
                        (b) Subtotal of Exemptions for Age and Blindness - line 7 of the Personal Exemption Worksheet <br>
                        )c) Total Exemptions - line 8 of the Personal Exemption Worksheet <br>
                        Line 2. If you wish to have additional tax withheld, and your employer has agreed to do so, enter the amount of additional tax on this line. <br>
                        Line 3. If you are not subject to Virginia withholding, check the box on this line. You are not subject to withholding if you meet any one of the conditions listed below. Form VA-4 must be filed with your employer for each calendar year for which you claim exemption from Virginia withholding. <br>
                        (a) You had no liability for Virginia income tax last year and you do not expect to have any liability for this year.  <br>
                        (b) You expect your Virginia adjusted gross income to be less than the amount shown below for your filing status.</p>
                    
                    
                    
                    
                    
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-bordered align-middle"
                        >
                            <thead class="">
                                <tr>
                                    <th style="background-color: blue; color:white;"></th>
                                    <th style="background-color: blue; color:white;">Taxable Years 2005, 2006 and 2007</th>
                                    <th style="background-color: blue; color:white;">Taxable Years 2008 and 2009</th>
                                    <th style="background-color: blue; color:white;">Taxable Years 2010 and 2011</th>
                                    <th style="background-color: blue; color:white;">Taxable Years 2012 and Beyond</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td><input type="text" value="Single"></td>
                                    <td><input type="text" value="$7,000"></td>
                                    <td><input type="text" value="$11,250"></td>
                                    <td><input type="text" value="$11,650"></td>
                                    <td><input type="text" value="$11,950"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" value="Married"></td>
                                    <td><input type="text" value="$14,000"></td>
                                    <td><input type="text" value="$22,500"></td>
                                    <td><input type="text" value="$23,300"></td>
                                    <td><input type="text" value="$23,900"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" value="Married, filing a separate return"></td>
                                    <td><input type="text" value="$7,000"></td>
                                    <td><input type="text" value="$11,250"></td>
                                    <td><input type="text" value="$11,650"></td>
                                    <td><input type="text" value="$11,950"></td>
                                </tr>

                                
                            </tbody>
                        </table>
                    </div>
                    <p>(c) You live in Kentucky or the District of Columbia and commute on a daily basis to your place of employment in Virginia. <br>
                        (d) You are a domiciliary or legal resident of Maryland, Pennsylvania or West Virginia whose only Virginia source income is from salaries and wages and such salaries and wages are subject to income taxation by your state of domicile. <br> 
                        Line 4. Under the Service member Civil Relief Act, as amended by the Military Spouses Residency Relief Act, you may be exempt from Virginia income tax on your wages if (i) your spouse is a member of the armed forces present in Virginia in compliance with military orders; (ii) you are present in Virginia solely to be with your spouse; and (iii) you maintain your domicile in another state. If you claim exemption under the SCRA check the box on Line 4 and attach a copy of your spousal military identification card to Form VA-4.</p>
                   
                    
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
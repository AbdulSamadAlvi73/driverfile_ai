<!doctype html>
<html lang="en">

<head>
    <title>EMPLOYEE’S WITHHOLDING ALLOWANCE CERTIFICATE</title>
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
                <h4 class="text-light p-2">EMPLOYEE’S WITHHOLDING ALLOWANCE CERTIFICATE</h4>
            </div>
            <hr>
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
                        <label for="snn" class="form-label fw-bold">SNN</label>
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
                            <label for="city" class="form-label fw-bold">City</label>
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
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Filing Status Withholding Allowances</label>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for="">  SINGLE or MARRIED (with two or more incomes)</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for="">MARRIED (one income) </label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for=""> HEAD OF HOUSEHOULD </label>
                           </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">1. Number of allowances for Regular Withholding Allowances, Worksheet A</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">Number of allowances from the Estimated Deductions, Worksheet B</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">Total Number of Allowances (A B) when using the California Withholding Schedules for 2019</label>
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
                            <label for="city" class="form-label fw-bold">2. Additional amount of state income tax to be withheld each pay period (if employer agrees), Worksheet C</label>
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
                            <label for="city" class="form-label fw-bold">3. I certify under penalty of perjury that I am not subject to California withholding. I meet the conditions set forth under the Service Member Civil Relief Act, as amended by the Military Spouses Residency Relief Act.</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p class="fw-bold">Under the penalties of perjury, I certify that the number of withholding allowances claimed on this certiﬁcate does not exceed the number to which I am entitled or, if claiming exemption from withholding, that I am entitled to claim the exempt status.</p>

        
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


                    <div class="mb-3 col-12 col-lg-6">
                        <label for="snn" class="form-label fw-bold">Company name</label>
                        <input type="text" name="snn" id="snn" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Address</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
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
                            <label for="city" class="form-label fw-bold">Zip</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">California Employer Payroll Tax Account Number</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                        <hr>
                        <p>Give the top portion of this page to your employer and keep the remainder for your records.</p>
                        <hr>

                        <p>YOUR CALIFORNIA PERSONAL INCOME TAX MAY BE UNDERWITHHELD IF YOU DO NOT FILE THIS DE 4 FORM.</p>
                        <p>IF YOU RELY ON THE FEDERAL FORM W-4 FOR YOUR CALIFORNIA WITHHOLDING ALLOWANCES, YOUR CALIFORNIA STATE PERSONAL INCOME TAX MAY BE UNDERWITHHELD AND YOU MAY OWE MONEY AT THE END OF THE YEAR.</p>
                        <hr>

                            <p><b>PURPOSE:</b> This certiﬁcate, DE 4, is for <b>California Personal Income Tax (PIT) withholding</b> purposes only. The DE 4 is used to compute the amount of taxes to be withheld from your wages, by your employer, to accurately reﬂect your state tax withholding obligation. </p>
                            <p>You should complete this form if either:</p>
                            <p>(1) You claim a different marital status, number of regular allowances, or different additional dollar amount to be withheld for California PIT withholding than you claim for federal income tax withholding or, <br> <br>

                                (2) You claim additional allowances for estimated deductions.</p>

                                <p>THIS FORM WILL NOT CHANGE YOUR FEDERAL WITHHOLDING ALLOWANCES.</p>
                                <p>The federal Form W-4 is applicable for California withholding purposes if you wish to claim the same marital status, number of regular allowances, and/or the same additional dollar amount to be withheld for state and federal purposes. However, federal tax brackets and withholding methods do not reﬂect state PIT withholding tables. <b>If you rely on the number of withholding allowances you claim on your Form W-4 withholding allowance certiﬁcate for your state income tax withholding you may be signiﬁcantly underwithheld.</b> This is particularly true if your household income is derived from more than one source. </p>
                                <p><b>CHECK YOUR WITHHOLDING:</b> After your Form W-4  and/or DE 4 takes effect, compare the state income tax withheld with your estimated total annual tax. For state withholding, use the worksheets on this form. </p>
                                <p><b>EXEMPTION FROM WITHHOLDING:</b> If you wish to claim exempt, complete the federal Form W-4. You may claim exempt from withholding California income tax if you did not owe any federal income tax last year and you do not expect to owe any federal income tax this year. The exemption is good for one year. If you continue to qualify for the exempt ﬁling status, a new Form W-4 designating EXEMPT must be submitted by February 15 each year to continue your exemption. If you are not having federal income tax withheld this year but expect to have a tax liability next year, you are required to give your employer a new Form W-4 by December </p>
                                <p><b>EXEMPTION FROM WITHHOLDING (continued):</b> Under the Service Member Civil Relief Act, as amended by the Military Spouses Residency Relief Act, you may be exempt from California income tax on your wages if (i) your spouse is a member of the armed forces present in California in compliance with military orders; (ii) you are present in California solely to be with your spouse; and (iii) you maintain your domicile in another state. If you claim exemption under this act, check the box on Line 3. You may be required to provide proof of exemption upon request.</p>
                                <hr>
                                <p class="fw-bold">IF YOU NEED MORE DETAILED INFORMATION, SEE THE INSTRUCTIONS THAT CAME WITH YOUR LAST CALIFORNIA RESIDENT INCOME TAX RETURN OR CALL THE FRANCHISE TAX BOARD (FTB).</p>
                                <p>IF YOU ARE CALLING FROM WITHIN THE UNITED STATES    <br>
                                     1-800-852-5711 (voice) <br>
                                    1-800-822-6268 (TTY) <br>
                                    IF YOU ARE CALLING FROM OUTSIDE THE UNITED STATES  (Not Toll Free) 1-916-845-6500</p>
                                <p>The California Employer’s Guide, DE 44, provides the income tax withholding tables. This publication may be found on the Employment Development Department (EDD) website at www.edd.ca.gov/Payroll_Taxes/Forms_and_Publications.htm. To assist you in calculating your tax liability, please visit the FTB website at www.ftb.ca.gov/individuals/index.shtml</p>
                                
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
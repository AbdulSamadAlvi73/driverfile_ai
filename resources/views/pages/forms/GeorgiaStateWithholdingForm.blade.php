<!doctype html>
<html lang="en">

<head>
    <title>STATE OF GEORGIA EMPLOYEE’S WITHHOLDING ALLOWANCE CERTIFICATE</title>
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
            <div class="text-center mb-3 p-3" style="background-color: #6DB4F5;">
                <h4 class="text-light p-2">STATE OF GEORGIA EMPLOYEE’S WITHHOLDING ALLOWANCE CERTIFICATE</h4>
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
                        <label for="snn" class="form-label fw-bold">SSN</label>
                        <input type="text" name="snn" id="snn" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Present Address</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control"
                            placeholder="" aria-describedby="helpId" />
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

                    <b class="text-center">PLEASE READ INSTRUCTIONS ON REVERSE SIDE BEFORE COMPLETING LINES 3 – 8</b>


                    <p>3. MARITAL STATUS</p>
                    <p>(If you do not wish to claim an allowance, enter "0" in the brackets beside your marital status.)
                    </p>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">A. Single: Enter 0 or 1</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">B. Married Filing Joint, both spouses working:
                                Enter 0 or 1</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">C. Married Filing Joint, one spouse working:
                                Enter 0 or 1 or 2</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">D. Married Filing Separate: Enter 0 or 1</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">E. Head of Household: Enter 0 or 1</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">4. DEPENDENT ALLOWANCES</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">5. ADDITIONAL ALLOWANCES (worksheet below must
                                be completed)</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">6. ADDITIONAL WITHHOLDING</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <b class="text-center">WORKSHEET FOR CALCULATING ADDITIONAL ALLOWANCES </b>
                    <b class="text-center">(Must be completed in order to enter an amount on step 5) </b>
                    <p>1. COMPLETE THIS LINE ONLY IF USING STANDARD DEDUCTION: </p>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Yourself</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Age 65 or older </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Blind </label>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Spouse</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Age 65 or older </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Blind </label>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Number of boxes checked</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                            <small>x 1300</small>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>2. ADDITIONAL ALLOWANCES FOR DEDUCTIONS: </p>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                A. Federal Estimated Itemized Deductions</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">

                                B. Georgia Standard Deduction (enter one): Single/Head of Household $4,600 Each Spouse
                                $3,000</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                C. Subtract Line B from Line A (If zero or less, enter zero)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">

                                D. Allowable Deductions to Federal Adjusted Gross Income</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                E. Add the Amounts on Lines 1, 2C, and 2D</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                F. Estimate of Taxable Income not Subject to Withholding</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                G. Subtract Line F from Line E (if zero or less, stop here)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                H. Divide the Amount on Line G by $3,000. Enter total here and on Line 5 above</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>
                        (This is the maximum number of additional allowances you can claim. If the remainder is over
                        $1,500 round up) </p>

                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                TOTAL ALLOWANCES (Total of Lines 3 - 5)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                7. LETTER USED (Marital Status A, B, C, D, or E)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <p>(Employer: The letter indicates the tax tables in Employer’s Tax Guide)
                    </p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold"></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> 8. EXEMPT: (Do not complete Lines 3 - 7 if
                                    claiming exempt) Read the Line 8 instructions on page 2 before completing this
                                    section. a) I claim exemption from withholding because I incurred no Georgia income
                                    tax liability last year and I do not expect to have a Georgia income tax liability
                                    this year. Check here </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">b) I certify that I am not subject to Georgia
                                withholding because I meet the conditions set forth under the Servicemembers Civil
                                Relief Act as provided on page 2. Check here</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> </label>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                My state of residence is</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                My spouse’s (servicemember) state of residence is</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">The states of residence must be the same to be
                                exempt.</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> </label>
                            </div>
                        </div>
                    </div>

                    <p>I certify under penalty of perjury that I am entitled to the number of withholding allowances or
                        the exemption from withholding status claimed on this Form G-4. Also, I authorize my employer to
                        deduct per pay period the additional amount listed above. </p>

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
                    <p>Employer: Complete Line 9 and mail entire form only if the employee claims over 14 allowances or
                        exempt from withholding. If necessary, mail form to: Georgia Department of Revenue, Taxpayer
                        Service Division, P.O. Box 105499, Atlanta, GA 30359</p>


                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Company name</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="zip" class="form-label fw-bold">Complete Address</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">EMPLOYER’S FEIN</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">EMPLOYER’S WH#</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>Do not accept forms claiming additional allowances unless the worksheet has been completed. Do
                        not accept forms claiming exempt if numbers are written on Lines 3 - 7. </p>
                    <b>INSTRUCTIONS FOR COMPLETING FORM G-4 </b>
                    <p>Enter your full name, address and social security number in boxes 1a through 2b. Line 3: Write
                        the number of allowances you are claiming in the brackets beside your marital status. <br>
                        A. Single – enter 1 if your are claiming yourself <br>
                        B. Married Filing Joint, both spouses working – enter 1 if you claim yourself <br>
                        C. Married Filing Joint, one spouse working – enter 1 if your claim yourself or 2 if you claim
                        yourself and your spouse <br>
                        D. Married Filing Separate – enter1 if you claim yourself <br>
                        E. Head of Household – enter 1 if you claim yourself <br>
                        Line 4: Enter the number of dependent allowances you are entitled to claim. <br>
                        Line 5: Complete the worksheet on Form G-4 if you claim additional allowances. Enter the number
                        on Line H here. </p>
                    <b>Failure to complete and submit the worksheet will result in automatic denial on your claim.</b>
                    <p>Line 6: Enter a specific dollar amount that you authorize your employer to withhold in addition
                        to the tax withheld based on your marital status and number of allowances.
                        Line 7: Enter the letter of your marital status from Line 3. Enter total of the numbers on Lines
                        3-5.</p>

                    <p>Line 8: <br>
                        a) Check the first box if you qualify to claim exempt from withholding. You can claim exempt if
                        you filed a Georgia income tax return last year and the amount of Line 4 of Form 500EZ or Line
                        16 of Form 500 was zero, and you expect to file a Georgia tax return this year and will not have
                        a tax liability. You can not claim exempt if you did not file a Georgia income tax return for
                        the previous tax year. Receiving a refund in the previous tax year does not qualify you to claim
                        exempt.</p>
                    <p><b>EXAMPLES: </b> Your employer withheld $500 of Georgia income tax from your wages. The amount
                        on Line 4 of Form 500EZ (or Line 16 of Form 500) was $100. Your tax liability is the amount on
                        Line 4 (or Line 16); therefore, you <b>do not qualify</b> to claim exempt.</p>
                    <p>Your employer withheld $500 of Georgia income tax from your wages. The amount on Line 4 of Form
                        500EZ (or Line 16 of Form 500) was $0 (zero). Your tax liability is the amount on Line 4 (or
                        Line 16) and you filed a prior year income tax return; therefore you qualify to claim exempt</p>
                    <p>b) Check the second box if you are not subject to Georgia withholding and meet the conditions set
                        forth under the Servicemembers Civil Relief Act. Under the Act, a spouse of a servicemember may
                        be exempt from Georgia income tax on income from services performed in Georgia if: </p>
                    <p>1. The servicemember is present in Georgia in compliance with military orders; <br>
                        2. The spouse is in Georgia solely to be with the servicemember; <br>
                        3. The spouse maintains domicile in another state; and <br>
                        4. The domicile of the spouse is the same as the domicile of the servicemember or the spouse of
                        the servicemember has elected to use the same residence for purposes of taxation as the
                        servicemember.</p>
                    <p>Additional information for employers regarding the Military Spouses Residency Relief Act: </p>
                    <p>1. On the W-2 the employer should not report any of the wages as Georgia wages. <br>
                        2. If the spouse of a servicemember is entitled to the protection of the Military Spouses
                        Residency Relief Act in another state and files a withholding exemption form in such other
                        state, the spouse is required to submit a Georgia Form G-4 so that withholding will occur as is
                        required by Georgia Law when a Georgia domiciliary works in another state and withholding is not
                        required by such other state. If the spouse does not fill out the form, the employer shall
                        withhold Georgia income tax as if the spouse is single with zero allowances.</p>
                    <p> <b>Worksheet for calculating additional allowances.</b> Enter the information as requested by
                        each line. For Line 2D, enter items such as Retirement Income Exclusion, U.S. Obligations, and
                        other allowable deductions per Georgia Law, see the IT-511 booklet for more information.</p>
                    <b>Do not complete Lines 3-7 if claiming exempt.</b>
                    <p>O.C.G.A. § 48-7-102 requires you to complete and submit Form G-4 to your employer in order to
                        have tax withheld from your wages. By correctly completing this form, you can adjust the amount
                        of tax withheld to meet your tax liability. Failure to submit a properly completed Form G-4 will
                        result in your employer withholding tax as though you are single with zero allowances.</p>
                    <p>Employers are required to mail any Form G-4 claiming more than 14 allowances or exempt from
                        withholding to the Georgia Department of Revenue for approval. Employers will honor the properly
                        completed form as submitted pending notification from the Withholding Tax Unit. Upon approval,
                        such forms remain in effect until changed or until February 15 of the following year. Employers
                        who know that a G-4 is erroneous should not honor the form and should withhold as if the
                        employee is single claiming zero allowances until a corrected form has been received.</p>


                    {{-- <a name="" id="" class="btn btn-danger float-end col-2 m-2" href="#" role="button">SUBMIT</a>
                    --}}

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
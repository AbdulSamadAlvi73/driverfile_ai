<!doctype html>
<html lang="en">

<head>
    <title>FORM W-4 (2021)</title>
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
                <h5 class="text-center">Employee's Withholding Certificate</h5>
                <p class="text-center fw-bold">Form W-4 (2021)</p>
                <p class="text-center">Complete Form W-4 so that your employer can withhold the correct federal income tax from your pay. <br>
                    Give Form W-4 to your employer. <br>
                    Your withholding is subject to review by the IRS.</p>
                <b>Step 1: Enter Personal Information</b>
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
                    
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="snn" class="form-label fw-bold">SSN</label>
                        <input type="text" name="snn" id="snn" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p>Does your name match the name on your social security card? If not, to ensure you get credit for your earnings, contact SSA at 800-772-1213 or go to www.ssa.gov.</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">3. Marital Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Status" id="" />
                                <label class="form-check-label" for="">  Single or Married filing separately</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Status" id="" />
                                <label class="form-check-label" for=""> Married filing jointly (or Qualifying widow/er) </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Status" id="" />
                                <label class="form-check-label" for=""> Head of Household (Check only if you’re unmarried and pay more than half the costs of keeping up a home for yourself and a qualifying individual.)</label>
                            </div>
                        </div>
                    </div>
                    <p><b>Complete Steps 2–4 ONLY if they apply to you; otherwise, skip to Step 5.</b> See page 2 for more information on each step, who can claim exemption from withholding, when to use the online estimator, and privacy.</p>
                    <b>Step 2: Multiple Jobs or Spouse Works</b>
                    <p>Complete this step if you (1) hold more than one job at a time, or (2) are married filing jointly and your spouse also works. The correct amount of withholding depends on income earned from all of these jobs.</p>
                    <p>Do <b>only one</b> of the following.</p>
                    <p>(a) Use the estimator at www.irs.gov/W4App for most accurate withholding for this step (and Steps 3–4); or <br>
                        (b) Use the Multiple Jobs Worksheet on page 3 and enter the result in Step 4(c) below for roughly accurate withholding; or <br>
                        (c) If there are only two jobs total, you may check this box. Do the same on Form W-4 for the other job. This option <br>
                        is accurate for jobs with similar pay; otherwise, more tax than necessary may be withheld </p>
                    <p><b>TIP:</b> To be accurate, submit a 2020 Form W-4 for all other jobs. If you (or your spouse) have self-employment
                            income, including as an independent contractor, use the estimator.</p>
                    <p><b>Complete Steps 3–4(b) on Form W-4 for only ONE of these jobs.</b> Leave those steps blank for the other jobs. (Your withholding will be most accurate if you complete Steps 3–4(b) on the Form W-4 for the highest paying job.)</p>
                    <b>Step 3: Claim Dependents</b>
                    <p>If your income will be $200,000 or less ($400,000 or less if married filing jointly):</p>


                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">Multiply the number of qualifying children under age 17 by $2,000</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">Multiply the number of other dependents by $500</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                Add the amounts above and enter the total here</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <b>Step 4 (optional): Other Adjustments</b>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                (a) Other income (not from jobs). If you want tax withheld for other income you expect this year that won’t have withholding, enter the amount of other income here. This may include interest, dividends, and retirement income</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                               
                            (b) Deductions. If you expect to claim deductions other than the standard deduction and want to reduce your withholding, use the Deductions Worksheet on page 3 and enter the result here</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                (c) Extra withholding. Enter any additional tax you want withheld each pay period</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <b>Step 5: Sign Here</b>
                    <p>Under penalties of perjury, I declare that this certificate, to the best of my knowledge and belief, is true, correct, and complete</p>



                    <p class="fw-bold">Employee's Signature (This form is not valid unless you sign it)*</p>
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
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">Company name</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">Complete Address</label>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">First Date of Employment</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">Employer Identification Number (EIN)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <b>General Instructions</b>
                    <b>Future developments</b>
                    <p>For the latest information about any future developments related to Form W-4, such as legislation enacted after it was published, go to www.irs.gov/FormW4.</p>
                    <b>Purpose of Form</b>
                    <p>Complete Form W-4 so that your employer can withhold the correct federal income tax from your pay. If too little is withheld, you will generally owe tax when you file your tax return and may owe a penalty. If too much is withheld, you will generally be due a refund. Complete a new Form W-4 when changes to your personal or financial situation would change the entries on the form. For more information on withholding and when you must furnish a new Form W-4, see Pub. 505</p>
                    <p><b>Exemption from withholding.</b>  You may claim exemption from withholding for 2021 if you meet both of the following conditions: you had no federal income tax liability in 2020 and you expect to have no federal income tax liability in 2021. You had no federal income tax liability in 2020 if (1) your total tax on line 16 on your 2020 Form 1040 or 1040-SR is zero (or less than the sum of lines 18a, 18b, and 18c), or (2) you were not required to file a return because your income was below the filing threshold for your correct filing status. If you claim exemption, you will have no income tax withheld from your paycheck and may owe taxes and penalties when you file your 2021 tax return. To claim exemption from withholding, certify that you meet both of the conditions above by writing "Exempt" on Form W-4 in the space below Step 4(c). Then, complete Steps 1a, 1b, and 5. Do not complete any other steps. You will need to submit a new Form W-4 by February 16, 2022.   </p>
                    <p><b>Your privacy.</b> If you prefer to limit information provided in Steps 2 through 4, use the online estimator, which will also increase accuracy. </p>
                    <p>As an alternative to the estimator: if you have concerns with Step 2(c), you may choose Step 2(b); if you have concerns with Step 4(a), you may enter an additional amount you want withheld per pay period in Step 4(c). If this is the only job in your household, you may instead check the box in Step 2(c), which will increase your withholding and significantly reduce your paycheck (often by thousands of dollars over the year).</p>
                    <p><b>When to use the estimator.</b> Consider using the estimator at www.irs.gov/W4App if you:</p>
                    <p>1. Expect to work only part of the year;<br>
                        2. Have dividend or capital gain income, or are subject to additional taxes, such as the additional Medicare tax;<br>
                        3. Have self-employment income (see below); or <br>
                        4. Prefer the most accurate withholding for multiple job situations.</p>

                    <p><b>Self-employment.</b> Generally, you will owe both income and self-employment taxes on any self-employment income you receive separate from the wages you receive as an employee. If you want to pay these taxes through withholding from your wages, use the estimator at www.irs.gov/W4App to figure the amount to have withheld. </p>
                    <p><b>Nonresident alien.</b> If you’re a nonresident alien, see Notice 1392, Supplemental Form W-4 Instructions for Nonresident Aliens, before completing this form.</p>
                    <h5>Specific Instructions</h5>
                    <p><b>Step 1(c).</b> Check your anticipated filing status. This will determine the standard deduction and tax rates used to compute your withholding.</p>
                    <p><b>Step 2.</b> Use this step if you (1) have more than one job at the same time, or (2) are married filing jointly and you and your spouse both work.</p>
                    <p>Option (a) most accurately calculates the additional tax you need to have withheld, while option (b) does so with a little less accuracy</p>
                    <p>If you (and your spouse) have a total of only two jobs, you may instead check the box in option (c). The box must also be checked on the Form W-4 for the other job. If the box is checked, the standard deduction and tax brackets will be cut in half for each job to calculate withholding. This option is roughly accurate for jobs with similar pay; otherwise, more tax than necessary may be withheld, and this extra amount will be larger the greater the difference in pay is between the two jobs.</p>
                    <p><b>Multiple jobs.</b> Complete Steps 3 through 4(b) on only one Form W-4. Withholding will be most accurate if you do this on the Form W-4 for the highest paying job. </p>
                    <p><b>Step 3.</b>  of Form W-4 provides instructions for determining the amount of the child tax credit and the credit for other dependents that you may be able to claim when you file your tax return. To qualify for the child tax credit, the child must be under age 17 as of December 31, must be your dependent who generally lives with you for more than half the year, and must have the required social security number. You may be able to claim a credit for other dependents for whom a child tax credit can’t be claimed, such as an older child or a qualifying relative. For additional eligibility requirements for these credits, see Pub. 972, Child Tax Credit and Credit for Other Dependents. You can also include other tax credits in this step, such as education tax credits and the foreign tax credit. To do so, add an estimate of the amount for the year to your credits for dependents and enter the total amount in Step 3. Including these credits will increase your paycheck and reduce the amount of any refund you may receive when you file your tax return. </p>
                    <b>Step 4 (optional)</b>
                    <p><b>Step 4(a).</b> Enter in this step the total of your other estimated income for the year, if any. You shouldn’t include income from any jobs or self-employment. If you complete Step 4(a), you likely won’t have to make estimated tax payments for that income. If you prefer to pay estimated tax rather than having tax on other income withheld from your paycheck, see Form 1040-ES, Estimated Tax for Individuals</p>
                    <p><b>Step 4(b).</b> Enter in this step the amount from the Deductions Worksheet, line 5, if you expect to claim deductions other than the basic standard deduction on your 2021 tax return and want to reduce your withholding to account for these deductions. This includes both itemized deductions and other deductions such as for student loan interest and IRAs</p>
                    <p><b>Step 4(c).</b> Enter in this step any additional tax you want withheld from your pay <b>each pay period,</b> including any amounts from the Multiple Jobs Worksheet, line 4. Entering an amount here will reduce your paycheck and will either increase your refund or reduce any amount of tax that you owe</p>
                    <p>For Form W-4 Worksheets, go to <a href="https://www.irs.gov/pub/irs-pdf/fw4.pdf">https://www.irs.gov/pub/irs-pdf/fw4.pdf</a></p>


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
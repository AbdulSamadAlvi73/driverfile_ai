<!doctype html>
<html lang="en">

<head>
    <title>Form W-4 (2019)</title>
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
                <b>Form W-4 (2019)</b>
                <p><b>Future Developments.</b> For the latest information about any future developments related to Form
                    W-4, such as legislation enacted after it was published, go to www.irs.gov/FormW4.</p>
                <p><b>Purpose.</b> Complete Form W-4 so that you employer can withhold the correct federal income tax
                    from your pay. Consider completing a new Form W-4 each year and when your personal or financial
                    situation changes.</p>
                <p><b>Exemptions from withholding.</b> You may claim exemption from withholding for 2018 if both of the
                    following apply.</p>
                <ul>
                    <li>For 2018 you had a right to a refund of all federal income tax withheld because you had no tax liability, and</li>
                    <li>For 2019 you expect a refund of all federal income tax withheld because you expect to have no tax liability.</li>
                </ul>
                <p>If you're exempt, complete only lines 1, 2, 3, 4, and 7 and sign the form to validate it. Your exemption for 2019 expires February 17, 2020. See Pub. 505, Tax Withholding and Estimated Tax, to learn more about whether you qualify for exemption from withholding.</p>
                <P><b>General Instructions.</b> If you aren't exempt, follow the rest of these instructions to determine the number of withholding allowances you should claim for withholding for 2019 and any additional amount of tax to have withheld. For regular wages, withholding must be based on allowances you claimed and may not be a flat amount or percentage of wages.</P>
                <p>You can also use the calculator at www.irs.gov/W4App to determine your tax withholding more accurately. Consider using this calculator if you have a more complicated tax situation, such as if you have a working spouse, more than one job, or a large amount of non-wage income not subject to withholding outside of your job. After your Form W-4 takes effect, you can also use this calculator to see how the amount of tax you're having withheld compares to your projected total tax for 2019. If you use the calculator, you don't need to complete any of the worksheets for Form W-4</p>
                <p>Note that if you have too much tax withheld, you will receive a refund when you file your tax return.
                    If you have too little tax withheld , you will owe tax when you file our tax return, and you might
                    owe a penalty.</p>
                <p><b>Filers with multiple jobs or working spouses.</b> If you have more than one job at a time, or if you're
                    married and your spouse is also working, read all of the instructions including the instructions for
                    the Two-Earner/Multiple Jobs Worksheet before beginning.</p>
                <p><b>Nonwage income.</b> If you have a large amount of nonwage income, such as interest or dividends,
                    consider making estimated tax payments using Form 1040-ES, Estimated Tax for individuals. Otherwise,
                    you may owe additional tax. Or, you can use the Deductions, Adjustments, and Other Income Worksheet
                    on page 3 or the calculator at www.irs.gov/W4App to make sure you have enough tax withheld from your
                    paycheck, If you have pension or annuity income, see Pub. 505 or use the calculator at
                    www.irs.gov/W4App to find out if you should adjust your withholding on Form W-4 or W-4P.</p>
                <p><b>Nonresident alien.</b> If you're a nonresident alien, see Notice 1392, Supplemental Form W-4
                    Instructions for Non resident Aliens, before completing this form</p>
                <h5>Specific Instructions</h5>
                <h5>Personal Allowances Worksheet</h5>
                <p>Complete this worksheet on page 3 first to determine the number of withholding allowances to claim.
                </p>
                <p><b>Line C. Head of household please note:</b> Generally, you can claim head of household filing
                    status on your tax return only if you're unmarried and pay more than 50% of the costs of keeping up
                    a home for yourself and a qualifying individual. See Pub. 501 for more information about filing
                    status.</p>
                <p><b>Line E. Child tax credit.</b> When you file your tax return, you may be eligible to claim a child tax credit for each of your eligible children. To qualify, the child must be under age 17 as of December 31, must be your dependent who lives with you for more than half the year, and must have a valid social security number. To learn more about this credit, see Pub. 972, Child Tax Credit. To reduce the tax withheld from your pay by taking this credit into account, follow the instructions on line E of the worksheet. On the worksheet you will be asked about your total income. For this purpose, total income includes all of your wages and other income, including income earned by a spouse if you are filing a joint return.</p>
                <p><b>Line F.</b>  Credit for other dependents. When you file your tax return, you may be eligible to claim a credit for other dependents for whom a child tax credit can't be claimed, such as a qualifying child who doesn't meet the age or social security number requirement for the child tax credit, or a qualifying relative. To learn more about this credit, see Pub. 972. To reduce the tax withheld from your pay by taking this credit into account, follow the instructions on line F of the worksheet. On the worksheet, you will be asked about your total income. For this purpose, total income includes all of your wages and other income, including income earned by a spouse if you are filing a joint return.</p>
                <h5 class="text-center">Employee's With holding Allowance Certificate</h5>
                <p>Whether you are entitled to claim a certain number of allowances or exemptions from withholding is
                    subject to review by the IRS. Your employer may be required to send a copy of this from to the IRS.
                </p>
                <p>OMB No. 1545-0074 2018</p>
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
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">3. Marital Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Status" id="" />
                                <label class="form-check-label" for=""> Single</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Status" id="" />
                                <label class="form-check-label" for="">Married </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Status" id="" />
                                <label class="form-check-label" for=""> Married, but withhold at higher Single
                                    rate.</label>
                            </div>
                            <small>Note: If married, but legally separated, or spouse is a nonresident alien, check the
                                "Single" box.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">4. If your last name differs from that shown
                                on your social security card, check here.</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> You must call 1-800-772-1213 for a replacement
                                    card. </label>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">5. Total number of allowances you're claiming (from the applicable worksheet on the following pages)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">6. Additional amount, if any you want withheld from each paycheck</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <p>7. I claim exemption from withholding for 2018, and I certify that I meet both of the following
                        conditions for exemption.</p>
                    <ul class="mx-3">
                        <li>Last year I had a right to a refund of all federal income tax withheld because I had no tax
                            liability, and</li>
                        <li>This year I expect a refund of all federal income tax withheld because I expect to have no
                            tax liability.</li>
                    </ul>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">If you meet both conditions, write "Exempt"
                                here…</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    
                    <p>Under penalties of perjury, I declare that i have examined this certificate and, to the best of
                        my knowledge and belief, it is true, correct, and complete</p>

                    <p class="fw-bold">Employee's Signature (This form is not valid unless you sign it.)*</p>
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
                            <label for="city" class="form-label fw-bold">8. Employer's name and address (Employer:
                                Complete boxes 8 and 10 if sending to IRS and complete boxes 8, 9, and 10 if sending to
                                State Directory of New Hires.)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">9. First date or employment</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">10. Employer identification number
                                (EIN)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <p>For Privacy Act and Paperwork Reduction Act Notice, see below. <br>
                        Cat. No 10220Q <br>
                        Form W-4 (2018)
                    </p>
                    <p> <b>Line G.</b> Other credits. You may be able to reduce the tax withheld from your paycheck if you expect to claim other tax credits, such as tax credits for education (see Pub. 970). If you do so, your paycheck will be larger, but the amount of any refund that you receive when you file your tax return will be smaller. Follow the instructions for Worksheet 1-6 in Pub. 505 if you want to reduce your withholding to take these credits into account. Enter "-0-" on lines E and F if you use Worksheet 1-6.</p>

                    <b>Deductions, Adjustments, and Additional Income Worksheet</b>
                    <p>Complete this worksheet to determine if you’re able to reduce the tax withheld from your paycheck
                        to account for your itemized deductions and other adjustments to income such as IRA
                        contributions. If you do so, your refund at the end of the year will be smaller, but your
                        paycheck will be larger. You’re not required to complete this worksheet or reduce your
                        withholding if you don’t wish to do so.</p>
                    <p>You can also use this worksheet to figure out how much to increase the tax withheld from your
                        paycheck if you have a large amount of nonwage income, such as interest or dividends.</p>
                    <p>Another option is to take these items into account and make your withholding more accurate by
                        using the calculator at www.irs.gov/W4App. If you use the calculator, you don’t need to complete
                        any of the worksheets for Form W-4.</p>
                    <b>Two-Earners/Multiple Jobs Worksheet</b>
                    <p>Complete this worksheet if you have more than one job at a time or are married filing jointly and
                        have a working spouse. If you don’t complete this worksheet, you might have too little tax
                        withheld. If so, you will owe tax when you file your tax return and might be subject to penalty.
                    </p>
                    <p>Figure the total number of allowances you’re entitled to claim and any additional amount of tax
                        to withhold on all jobs using worksheets from only one form W-4. Claim all allowances on the W-4
                        that you or your spouse file for the highest paying job in your family and claim zero allowances
                        on Forms W-4 for all other jobs. For example, if you earn $60,000 per year and your spouse earns
                        $20,000, you should complete the worksheets to determine what to enter on lines 5 and 6 of your
                        Form W-4, and your spouse should enter zero ("-0-") on lines 5 and 6 of his or her Form W-4. See
                        Pub. 505 for details.</p>
                    <p>Another option is to use the calculator at www.irs.gov/W4App to make your withholding more
                        accurate.</p>
                    <p>Tip: If you have a working spouse and your incomes are similar, you can check the "Married, but
                        withhold at a higher Single rate" box instead of using the worksheet. If you chose this option,
                        then each spouse should fill out the Personal Allowances Worksheet and check the "Married, but
                        withhold at a higher Single rate" box on Form W-4, but only one spouse should claim any
                        allowances for credits or fill out the Deductions, Adjustments, and Additional Income Worksheet.
                    </p>
                    <b>Instructions for Employer</b>
                    <p><b>Employees, do not complete box 8, 9, or 10. Your employer will complete these boxes if necessary.</b>
                    </p>
                    <p><b>New hire reporting.</b> Employers are required by law to report new employees to a designated State
                        Directory of New Hires. Employers may use Form W-4, boxes 8, 9, and 10 to comply with the new
                        hire reporting requirement for a newly hired employee. A newly hired employee is an employee who
                        hasn’t previously been employed by the employer, or who was previously employed by the employer
                        but has separated from such prior employment for at least 60 consecutive days. Employers should
                        contact the appropriate State Directory of New Hires to find out how to submit a copy of the
                        completed form W-4. For information and links to each designated State Directory of New Hires
                        (including for U.S. territories), go to <b>www.acf.hhs.gov/programs/css/employers.</b></p>
                        <p>If an employer is sending a copy of Form W-4 to a designated State Directory of New Hires to comply with the new hire reporting requirement for a newly hired employee, complete boxes 8, 9, and 10 as follows.</p>
                    <p><b>Box 8.</b> Enter the employer’s name and address. If the employer is sending a copy of this
                        form to the State Directory of New Hires, enter the address where child support agencies should
                        send income withholding orders.</p>
                    <p><b>Box 9.</b> If the employer is sending a copy of this form to a State Directory of New Hires,
                        enter the employee’s first date of employment, which is the date services for payment were first
                        performed by the employee. If the employer rehired the employee after the employee had been
                        separated from the employer’s service for at least 60 days, enter the rehire date.</p>
                    <p><b>Box 10.</b> Enter the employer’s employer identification number (EIN).</p>
                    <h5>Personal Allowances Worksheet (Keep for your records)</h5>
                    <hr>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">A. Enter "1" for yourself</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">B. Enter "1" if you will file as married
                                filing jointly</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">C. Enter "1" if you will file as head of
                                household</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>D. Enter "1" if:</p>
                    <ul class="mx-3">
                        <li>You’re single, or married filing separately, and have only one job; or</li>
                        <li>You’re married filing jointly, have only one job, and your spouse doesn’t work; or</li>
                        <li>Your wages from a second hob or your spouse’s wages (or the total of both) are $1,500 or
                            less….</li>
                    </ul>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Please enter your question</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p> E. <b>Child Tax Credit</b> See Pub. 972, Child Tax Credit, for more information.</p>
                    <ul class="mx-3">
                        <li>If your total income will be less than $69, 801 ($101,401 if married), enter "4" for each
                            eligible child.</li>
                        <li> If your total income will be from $69,801 to $175,550 ($101,401 and $339,000 if married
                            filing jointly), enter "4" for each eligible child.</li>
                        <li> If your total income will be from $175,551 to $200,050 ($339,001 and $400,000 if married
                            filing jointly), enter "1" for each eligible child.</li>
                        <li> If your total income will be higher than $200,000 ($400,000 if married filing jointly),
                            enter "-0-"......</li>
                    </ul>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Please enter your question</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <b>F. Credit for other dependents.</b>
                    <ul class="mx-3">
                        <li>If your total income will be less than $69, 801 ($101,401 if married), enter "1" for each
                            eligible dependent.</li>
                        <li>If your total income will be from $69,801 to $175,550 ($101,401 and $339,000 if married
                            filing jointly), enter "1" for every two dependents. (for example, "-0-" for one dependent,
                            "1" if you have two or three dependents, and "2" if you have four dependents).</li>
                        <li>If your total income will be higher than $175,551 ($339,001 if married filing jointly),
                            enter "-0-......</li>
                    </ul>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Please enter your question</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">G. Other Credits. If you have other credits, see Worksheet 1-6 of Pub. 505 and enter the amount from that worksheet here. If you use Worksheet 1-6, enter "-0-" on lines E and F</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">H. Add lines A through G and enter the total
                                here. </label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p> For accuracy, <b>complete all worksheets that apply.</b></p>
                    <ul class="mx-3">
                        <li>If you plan to itemize or claim adjustments to income and want to reduce your withholding,
                            see the Deductions, Adjustments, and Additional Income Worksheets below.</li>
                        <li>If you have more than one job at a time or are married filing jointly and you and your
                            spouse both work, and the combined earning from all jobs exceeds $52,000 ($24,000 if married
                            filing jointly), see the Two-Earners/Multiple Jobs Worksheet below to avoid having too
                            little tax withheld.</li>
                        <li> If neither of the above situations applies, stop here and enter the number from line H on
                            Line 5 of Form W-4 below</li>
                    </ul>
                    <h5>Deductions and Adjustments Worksheet</h5>
                    <p><b>Note:</b> Use this worksheet only if you plan to itemize deductions or claim certain credits
                        or adjustments to income.</p>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">1. Enter an estimate of your 2018 itemized
                                deductions. These include qualifying home mortgage interest, charitable contributions,
                                state and local taxes,(up to $10,000), and medical expenses in excess of 7.5% of your
                                income. See Pub. 505 for details</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <b>2. Enter:</b>
                    <ul class="mx-3">
                        <li>$24,000 if you're married filing jointly or qualifying widow(er)</li>
                        <li>$18,000 if you're head of household</li>
                        <li>$12,000 if you're single or married filing separately</li>
                    </ul>



                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Please enter your question </label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">3. Subtract line 2 from line 1. If zero or
                                less, enter "-0-" </label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">4. Enter an estimate of your 2019 adjustments to income, qualified business income deduction, and any additional standard deduction for age or blindness (see Pub. 505 for information about these items)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">5. Add lines 3 and 4 and enter the
                                total.</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">6. Enter an estimate of your 2018 nonwage
                                income (such as dividends or interest)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">7. Subtract line 6 from line 5. If zero or
                                less, enter "-0-" If less than zero enter the amount in parentheses.</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">8. Divide the amount on line 7 by $4,150 and
                                enter the result here. If less than zero enter the amount in parentheses.Drop any
                                fraction</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">9. Enter the number from the Personal
                                Allowances Worksheet, line H,</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                10. Add lines 8 and 9 and enter the total here. If less than zero enter "-0-".If you
                                plan to use the Two-Earners/Multiple Jobs Worksheet, also enter this total on line 1
                                below. Otherwise, stop here and enter this total on Form W-4, line 5, page 1</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <hr>
                    <b>Two-Earners/Multiple Jobs Worksheet</b>
                    <p>Note: Use this worksheet only if the instructions under line H from the <b>Personal Allowance
                            Worksheet</b> direct you here.</p>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">1. Enter the number from the Personal
                                Allowances Worksheet, line H, (or, if you used the Deductions, Adjustment, and
                                Additional Income Worksheet above, the number from line 10 of that worksheet).</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">2. Find the number in Table 1 below that
                                applies to the LOWEST paying job and enter it here. However, if you're married filing
                                jointly and wages from the highest paying job are $75,000 or less and the combined wages
                                for you and your spouseare $107,000 or less, do not enter more than "3"</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">3. If line 1 is more than or equal to line 2,
                                subtract line 2 from line 1. Enter the result here (if zero, enter "-0-") and on Form
                                W-4, line 5, page 1. Do not use the rest of this worksheet</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>
                        Note" If line 1 is less than line 2, enter "-0-" on Form W-4, line 5, page 1. Complete lines 4
                        through 9 below to figure the additional withholding amount necessary to avoid a year-end tax
                        bill.</p>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">4. Enter the amount from line 2 of this
                                worksheet</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">5. Enter the amount from line 1 of this
                                worksheet</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">6. Subtract line 5 from line 4</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">7. Find the amount in Table 2 below that
                                applies to the HIGHEST paying job and enter it here</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">8. Multiply line 7 by line 6 and enter the
                                result here. This is the additional withholding needed</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">9. Divide line 8 by the number of pay periods
                                remaining in 2018. For example, divide by 18 if you are paid every 2 weeks and you
                                complete this form on a date in April when there are 18 pay periods remaining in 2018.
                                Enter the result here and on Form W-4, line 6, page 1. This is the additional amount to
                                be withheld from each paycheck</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <b>Table</b>
                    <div class="table-responsive">
                        <table class="table table-bordered  align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>If wages from LOWEST paying job are</th>
                                    <th>Enter on line 2 above</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td><input type="text" class="col-12" value="$0 - $5,000"></td>
                                    <td><input type="text" class="col-12" value="0"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="5,001 - 9,500"></td>
                                    <td><input type="text" class="col-12" value="1"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="9,501 - 19,000"></td>
                                    <td><input type="text" class="col-12" value="2"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="19,001 - 26,500"></td>
                                    <td><input type="text" class="col-12" value="3"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="26,501 - 37,000"></td>
                                    <td><input type="text" class="col-12" value="4"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="37,001 - 43,500"></td>
                                    <td><input type="text" class="col-12" value="5"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="43,001 - 55,000"></td>
                                    <td><input type="text" class="col-12" value="6"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="55,001 - 60,000"></td>
                                    <td><input type="text" class="col-12" value="7"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="60,001 - 70,000"></td>
                                    <td><input type="text" class="col-12" value="8"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="70,001 - 75,000"></td>
                                    <td><input type="text" class="col-12" value="9"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="75,001 - 85,000"></td>
                                    <td><input type="text" class="col-12" value="10"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="85,001 - 95,000"></td>
                                    <td><input type="text" class="col-12" value="11"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="95,001 - 130,000"></td>
                                    <td><input type="text" class="col-12" value="12"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="130,001 - 150,000"></td>
                                    <td><input type="text" class="col-12" value="13"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="150,001 - 160,000"></td>
                                    <td><input type="text" class="col-12" value="14"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="160,001 - 170,000"></td>
                                    <td><input type="text" class="col-12" value="15"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="170,001 - 180,000"></td>
                                    <td><input type="text" class="col-12" value="16"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="180,001 - 190,000"></td>
                                    <td><input type="text" class="col-12" value="17"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="191,001 - 200,000"></td>
                                    <td><input type="text" class="col-12" value="18"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="200,001 and over"></td>
                                    <td><input type="text" class="col-12" value="19"></td>
                                </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                    <b>Table</b>
                    <div class="table-responsive">
                        <table class="table table-bordered  align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>If wages from LOWEST paying job are</th>
                                    <th>Enter on line 2 above</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td><input type="text" class="col-12" value="$0 - $7,000"></td>
                                    <td><input type="text" class="col-12" value="0"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="7,001 - 12,500"></td>
                                    <td><input type="text" class="col-12" value="1"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="12,501 - 24,500"></td>
                                    <td><input type="text" class="col-12" value="2"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="24,501 - 31,500"></td>
                                    <td><input type="text" class="col-12" value="3"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="31,501 - 39,000"></td>
                                    <td><input type="text" class="col-12" value="4"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="39,001 - 55,000"></td>
                                    <td><input type="text" class="col-12" value="5"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="55,001 - 70,000"></td>
                                    <td><input type="text" class="col-12" value="6"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="70,001 - 85,000"></td>
                                    <td><input type="text" class="col-12" value="7"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="85,001 - 90,000"></td>
                                    <td><input type="text" class="col-12" value="8"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="90,001 - 100,000"></td>
                                    <td><input type="text" class="col-12" value="9"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="100,001 - 105,000"></td>
                                    <td><input type="text" class="col-12" value="10"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="105,001 - 115,000"></td>
                                    <td><input type="text" class="col-12" value="11"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="115,001 - 120,000"></td>
                                    <td><input type="text" class="col-12" value="12"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="120,001 - 130,000"></td>
                                    <td><input type="text" class="col-12" value="13"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="130,001 - 145,000"></td>
                                    <td><input type="text" class="col-12" value="14"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="145,001 - 160,000"></td>
                                    <td><input type="text" class="col-12" value="15"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="155,001 - 185,000"></td>
                                    <td><input type="text" class="col-12" value="16"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="185,001 and over"></td>
                                    <td><input type="text" class="col-12" value="17"></td>
                                </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                    <b>Table</b>
                    <div class="table-responsive">
                        <table class="table table-bordered  align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>If wages from HIGHEST paying job are</th>
                                    <th>Enter on line 7 above</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td><input type="text" class="col-12" value="$0 - $24,375"></td>
                                    <td><input type="text" class="col-12" value="$420"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="24,376 - 82,725"></td>
                                    <td><input type="text" class="col-12" value="500"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="82,726 - 170,325"></td>
                                    <td><input type="text" class="col-12" value="910"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="170,326 - 320,325"></td>
                                    <td><input type="text" class="col-12" value="1,000"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="405,326 - 605,325"></td>
                                    <td><input type="text" class="col-12" value="1,330"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="$0 - $5,000"></td>
                                    <td><input type="text" class="col-12" value="1,450"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="605,326 and over"></td>
                                    <td><input type="text" class="col-12" value="1,540"></td>
                                </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>



                    <b>Table</b>
                    <div class="table-responsive">
                        <table class="table table-bordered  align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>If wages from HIGHEST paying job are</th>
                                    <th>	
                                        Enter on line 7 above</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td><input type="text" class="col-12" value="$0 - $7,000"></td>
                                    <td><input type="text" class="col-12" value="$420"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="7,001 - 36,175"></td>
                                    <td><input type="text" class="col-12" value="500"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="36,176 - 79,975"></td>
                                    <td><input type="text" class="col-12" value="910"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="79,976 - 154,975"></td>
                                    <td><input type="text" class="col-12" value="1,000"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="154,976 - 197,475"></td>
                                    <td><input type="text" class="col-12" value="1,330"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="197,476 - 497,475"></td>
                                    <td><input type="text" class="col-12" value="1,450"></td>
                                </tr>
                                <tr class="">
                                    <td><input type="text" class="col-12" value="497,476 and over"></td>
                                    <td><input type="text" class="col-12" value="1,540"></td>
                                </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                    <p><b>Privacy Act and Paperwork Reduction Act Notice.</b> We ask for the information on this form to carry out the Internal Revenue laws of the United States. Internal Revenue Code sections 3402(f)(2) and 6109 and their regulations require you to provide this information; your employer uses it to determine your federal income tax withholding. Failure to provide a properly completed form will result in your being treated as a single person who claims no withholding allowances; providing fraudulent information may subject you to penalties. Routine uses of this information include giving it to the Department of Justice for civil and criminal litigation; to cities, states, the District of Columbia, and U.S. commonwealths and possessions for use in administering their tax laws; and the Department of Health and Human Services for use in the National Directory of New Hires. We may also disclose this information to other countries under a tax treaty, to federal and state agencies to enforce federal nontax criminal laws, or to federal law enforcement and intelligence agencies that combat terrorism.</p>
                    <p>You aren’t required to provide the information requested on a form that’s subject to the Paperwork Reduction Act unless the form displays a valid OMB control number. Books or records relating to a form or its instructions must be retained as long as their contents may become material in the administration of any Internal Revenue law. Generally, tax returns and return information are confidential, as required by Code section 6103.</p>
                    <p>The average time and expenses required to complete and file this form will vary depending on individual circumstances. For estimated averages, see the instructions for your income tax return.</p>
                    <p>If you have suggestions for making this form simpler, we would be happy to hear from you. See the instructions for your income tax return.</p>

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
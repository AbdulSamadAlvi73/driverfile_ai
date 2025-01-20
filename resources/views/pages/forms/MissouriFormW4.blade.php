<!doctype html>
<html lang="en">
<head>
    <title>Missouri Form W4</title>
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
                <h4 class="text-light">Missouri Department of Revenue</h4>
                <h4 class="text-light">Employee's Withholding Certificate</h4>
            </div>
            <hr>
            <p>This certificate is for income tax withholding and child support enforcement purposes only.</p>
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
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">SSN</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
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
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">1. Filing Status: Check the appropriate filling status below.</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Single or Married Spouse Works or Married Filing Separate</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">  Married (Spouse does not work)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">Head of Household</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">2. Additional withholding: If you expect to have a balance due (as a result of interest income, dividends, income from a part-time job, etc.) on your tax return, you may request your employer to withhold an additional amount of tax from each pay period. To calculate the amount needed, divide the amount of the expected tax by the number of pay periods in a year. Enter the additional amount to be withheld each pay period here:</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">
                                3. Reduced withholding: If you expect to receive a refund (as a result of itemized deductions, modifications or tax credits) on your tax return, you may direct your employer to only withhold the amount indicated on line 3. Your employer will not use the standard calculations for withholding. If you designate an amount that is too low, it could result in you being under withheld. To calculate the amount needed, divide the amount of your expected tax by the number of pay periods in a year. Enter the amount to be withheld instead of the standard calculation. If no amount is indicated, the standard calculations will be used:</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">4. Exempt Status: Select the appropriate reason you are claiming an exemption from withholding below and write "EXEMPT" here:</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="zip" class="form-label fw-bold"></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> I am exempt because I had a right to a refund of all Missouri income tax withheld last year and expect to have no tax liability this year. A new MO W-4 must be completed annually if you wish to continue the exemption.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">  I am exempt because I meet the conditions set forth under the Servicemember Civil Relief Act, as amended by the Military Spouses Residency Relief Act and have no Missouri tax liability.</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> I am exempt because my income is earned as a member of any active duty component of the Armed Forces of the United States and I am eligible for the military income deduction.</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p><b>Signature:</b> Under penalties of perjury, I certify that the information provided on this form is true and accurate.</p>
                    <p class="fw-bold">Employee's Signature (Form is not valid unless you sign it.**</p>
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
                    <hr>
                    <h5 class="text-center">EMPLOYER:</h5>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Company name</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">  Address</label>
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
                            <label for="city" class="form-label fw-bold">Date Services for Pay First Performed by Employee (MM/DD/YYYY)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Federal Employer ID Number:</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Missouri Tax Identification Number:</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <hr>
                    <b>Notice To Employer:</b>
                    <p>Within 20 days of hiring a new employee, send a copy of Form MO W-4 to the Missouri Department of Revenue, P.O. Box 3340, Jefferson City, MO 65105-3340 or fax to (573) 526-8079.</p>
                    <p>Please visit http://dss.mo.gov/child-support/employers/new-hire-reporting.htm for additional information regarding new hire reporting.</p>
                    <hr>
                    <p class="text-center">Employee Information <br>
                        Visit our online withholding calculator at: <br>
                        https://mytax.mo.gov/rptp/portal/home/withholding-calculator.</p>
                    <b class="text-center">Items to remember:</b>
                    <ul class="mx-3">
                        <li>Employees must complete a new form if their filing status changes or to adjust the amount of withholding.</li>
                        <li>If you are claiming an "Exempt" status due to the Military Spouses Residency Relief Act you must provide one of the following to your employer: Leave  and    Earnings Statement of the non-resident military servicemember, Form W-2 issued to the nonresident military servicemember, a military identification  card, or    specific military orders received by the servicemember. You must  also provide verification of residency such as a copy of your state income tax  return filed in   your state of residence, a property tax receipt from the state of residence, a current drivers license, vehicle registration or voter ID card.</li>
                        <li>Additional information can be found at https://dor.mo.gov/business/.</li>
                    </ul>
                    <hr>

                    <p class="text-center">Taxation Division <br>
                        P.O. Box 3340 Jefferson City, MO 65105-3340 <br>
                        Phone: (573) 751-8750 - Fax: (573) 526-8079</p>
                        
                    
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
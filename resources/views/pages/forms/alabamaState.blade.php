<!doctype html>
<html lang="en">

<head>
    <title>Alabama State</title>
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
            <div class="text-center">
            <div class="p-2"  style="background-color: #6DB4F5;"> 
                <h4 class="mt-3 text-light p-2">ALABAMA DEPARTMENT OF REVENUE</h4>
            </div>
                <p class="p-2">50 North Ripley - Montgomery, AL 36 306104 -infoLine (334)242-1300</p>
                <h5 class="text-decoration-underline">https://p21.arabiansuperstar.org/public/login</h5>
                <h4>Employee's Withholding Tax Exemption Certificate</h4>
            </div>
            <p>Every employee, on or before the date of commencement of employment, shall furnish his or her employer
                with a signed Alabama withholding exemption certificate relating to the number of withholding exemptions
                which he or she claims, which in no event shall exceed the number to which the employee is entitled. In
                the event the employee inflates the number of exemptions allowed by this Chapter on Form A4, the
                employee shall pay a penalty of five hundred dollars ($500) for such action pursuant to Section
                40-29-75. </p>
            <h2 class="bg-primary text-light p-2 fw-bold">Part I - To be completed by the Employee</h2>


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
                        <label for="presentaddress" class="form-label fw-bold">Present Address</label>
                        <input type="text" name="presentaddress" id="presentaddress" class="form-control" placeholder=""
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
                            <label for="state" class="form-label fw-bold">State</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
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


                </div>
            </form>


            <h5 class="mt-3 text-center text-uppercase">how to claim your withholding exemptions</h5>
            <div>
                <p class="">1. If you claim no personal exemption for yourself and wish to withhold at the highest rate,
                    write the figure "0", sign and date Form A4 and file it with your employer</p>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-6">
                        <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                </div>
            </div>
            <div>
                <p class="">2. If you are SINGLE or MARRIED FILING SEPARATELY, a $1,500 personal exemption is allowed.
                    Write the letter "S" if claiming the SINGLE exemption or "MS" if claiming the MARRIED FILING
                    SEPARATELY exemption</p>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-6">
                        <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                </div>
            </div>
            <div>
                <p class="">3. If you are MARRIED or SINGLE CLAIMING HEAD OF FAMILY, a $3,000 personal exemption is
                    allowed. Write the letter "M" if you are claiming an exemption for both yourself and your spouse or
                    "H" if you are single with qualifying dependents and are claiming the HEAD OF FAMILY exemption.</p>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-6">
                        <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                </div>
            </div>

            <div>
                <p class="">4. Number of dependents (other than spouse) that you will provide more than one-half of the
                    support for during the year. See dependent qualification below.</p>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-6">
                        <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                </div>
            </div>
            <div>
                <p class="">5. Additional amount, if any, you want deducted each pay period</p>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-6">
                        <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                </div>
            </div>
            <div>
                <p class="">6. This line to be completed by your employer: Total exemptions (example: employee claims
                    "M" on line 3 and "2" on line 4. Employer should use column M-2 (married with 2 dependents) in the
                    withholding tables)</p>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-6">
                        <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                </div>
            </div>
            <div>
                <p class="">Under penalties of perjury, I certify that I have examined this certificate and to the best
                    of my knowledge and belief, it is true, correct, and complete.</p>
                <p class="fw-bold">Employee's Signature</p>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-6">
                        <div class="card" style="height: 150px; widht:150px;">

                        </div>
                        <p class="fw-bold text-primary">Help's</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12 col-lg-6">
                    <label for="date" class="form-label fw-bold">Date</label>
                    <input type="date" name="date" id="date" class="form-control" placeholder=""
                        aria-describedby="helpId" />
                </div>
            </div>

            <h4 class="bg-primary text-light p-2 fw-bold">Part II - To be completed by the Employer</h4>

            <form class="d-flex">
                <div class="row col-12">
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="companyname" class="form-label fw-bold">Company Name</label>
                            <input type="text" name="companyname" id="companyname" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="snn" class="form-label fw-bold">Employee Identification Number(EIN)</label>
                        <input type="text" name="snn" id="snn" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="address" class="form-label fw-bold">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder=""
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
                            <label for="state" class="form-label fw-bold">State</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
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


                </div>
            </form>

            <p>Employers are required to keep this certificate on file. If the employee is believed to have claimed more
                exemption than legally entitled or claims 8 or more dependent exemptions, the employer should contact
                the Department at the following address or phone number for verification: Alabama Department of Revenue,
                Withholding Tax Section, P.O. Box 327480, Montgomery, AL 36132-7480, by phone at (334)242-1300, or by
                fax at (334) 242-0112. If the employee does not qualify for the exemptions claimed upon verification,
                the employer is required to withhold at the highest rate until the employee submits a corrected Form A4
                reflecting the proper exemption they are entitled to claim. </p>
            <hr>
            <p><b class="text-uppercase">Dependents:</b> To qualify as your dependent (Line 4 above), a person must
                receive more than one-half of his or her support from you for the year and must be related to you as
                follows:<br>
            <div class="mx-3">
                Your son or daughter (including legally adopted children), grandchild, stepson, stepdaughter,
                son-in-law, or daughter-in-law;<br>
                Your father, mother, grandparent, stepfather, stepmother, father-in-law, or mother-in-law;<br>
                Your brother, sister, stepbrother, stepsister, half-brother, half-sister, brother-in-law, or
                sister-in-law;<br>
                Your uncle, aunt, nephew, or niece (but only if related by blood).</div>
            </p>

            <h5 class="mt-3 text-center text-uppercase fw-bold">This form may be reproduced</h5>





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
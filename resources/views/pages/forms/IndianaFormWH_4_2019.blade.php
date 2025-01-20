<!doctype html>
<html lang="en">

<head>
    <title>Indiana Form WH-4 2019</title>
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
                <h4 class="text-light">State of Indiana</h4>
                <h4 class="text-light">Employee’s Withholding Exemption and County Status Certificate</h4>
            </div>
            <p class="text-center mt-3">This form is for the employer’s records. Do not send this form to the Department of Revenue. The completed form should be returned to your employer.</p>
            <form class="d-flex">
                <div class="row col-12">
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Full Name</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
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
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Indiana County of Residence as of January 1 (See instructions):</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Indiana County of Principal Employment as of January 1 (See instructions):</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <hr>
                    <p class="text-center">How to Claim Your Withholding Exemptions</p>
                    <div class="mb-0 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">1. You are entitled to one exemption. If you wish to claim the exemption, enter "1" ......</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    <small><b>Nonresident aliens</b> must skip lines 2 through 6. See instructions</small>
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">2. If you are married and your spouse does not claim his/her exemption, you may claim it, enter "1" ......</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">3. You are allowed one (1) exemption for each dependent. Enter number claimed ......</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    <p>4. Additional exemptions are allowed if: <br>
                        (a) you and/or your spouse are over the age of 65 and/or <br>
                        (b) if you and/or your spouse are legally blind.</p>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Check box(es) for additional exemptions:</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for="">  You are 65 or older </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for="">  You are blind </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for="">  Spouse is 65 or older </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for="">  Spouse is blind </label>
                          </div>
                        </div>
                    </div>
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">Enter the total number of boxes checked ........</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">5. Add lines 1, 2, 3, and 4. Enter the total  here ......</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">6. You are entitled to claim an additional exemption for each qualifying dependent (see instructions) .....</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">7. Enter the amount of additional state withholding (if any) you want withheld each pay period .....</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">8. Enter the amount of additional county withholding (if any) you want withheld each pay period .....</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    <p>I hereby declare that to the best of my knowledge the above statements are true.</p>
                    <p class="fw-bold">Signature*</p>
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
                    <h5 class="text-center">Instructions for Completing Form WH-4</h5>
                    <p>This form should be completed by all resident and nonresident employees having income subject to Indiana state and/or county income tax.</p>
                    <p>Print or type your full name, Social Security number or ITIN and home address. Enter your Indiana county of residence and county of principal employment as of January 1 of the current year. If you neither lived nor worked in Indiana on January 1 of the current year, enter "not applicable" on the line(s). If you move to (or work in) another county after January 1, your county status will not change until the next calendar tax year.</p>
                    <p><b>Nonresident</b> alien limitation. A nonresident alien is allowed to claim only one exemption for withholding tax purposes. If you are a nonresident alien, enter "1" on line 1, then skip to line 7. You are considered to be a nonresident alien if you are not a citizen of the United States and do not meet the green card test and the substantial presence test (get Publication 519 from www.irs.gov for information about these tests).</p>
                    <p>All other employees should complete lines 1 through 7.</p>
                    <p>Lines 1 & 2 - You are allowed to claim one exemption for yourself and one for your spouse (if he/she does not claim the exemption for him/herself). If a parent or legal guardian claims you on their federal tax return, you may still claim an exemption for yourself for Indiana purposes. You cannot claim more than the correct number of exemptions; however, you are permitted to claim a lesser number of exemptions if you wish additional withholding to be deducted.</p>
                    <p>Line 3 - Dependent Exemptions: You are allowed one exemption for each of your dependents based on state and federal guidelines. To qualify as your dependent, a person must receive more than one-half of his/her support from you for the tax year and must have less than $4,150 gross income during the tax year (unless the person is your child and is under age 19 or under age 24 and a full-time student at least during 5 months of the tax year at a qualified educational institution).</p>
                    <p>Line 4 - Additional Exemptions. You are also allowed one exemption each for you and/or your spouse if either is 65 or older and/or blind.</p>
                    <p>Line 5 - Add the total of exemptions claimed on lines 1, 2, 3, and 4. Enter the total in the box provided.</p>
                    <p>Line 6 - Additional Dependent Exemptions. An additional exemption is allowed for certain dependent children that are included on line 3. The dependent child must be a son, stepson, daughter, stepdaughter and/or foster child.</p>
                    <p>Lines 7 & 8 - If you would like an additional amount to be withheld from your wages each pay period, enter the amount on the line provided. NOTE: An entry on this line does not obligate your employer to withhold the amount. You are still liable for any additional taxes due at the end of the tax year. If the employer does withhold the additional amount, it should be submitted along with the regular state and county tax withholding.</p>
                    <p>You may file a new Form WH-4 at any time if the number of exemptions increases. You must file a new Form WH-4 within 10 days if the number of exemptions previously claimed by you decreases for any of the following reasons: <br>
                        (a)  you divorce (or are legally separated from) your spouse for whom you have been claiming an exemption or your spouse claims him/herself on a separate Form WH-4; <br>
                        (b) someone else takes over the support of a dependent you claim or you no longer provide more than one-half of the person’s support for the tax year.</p>
                    <p>Penalties are imposed for willingly supplying false information or information which would reduce the withholding exemption.</p>
                        
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
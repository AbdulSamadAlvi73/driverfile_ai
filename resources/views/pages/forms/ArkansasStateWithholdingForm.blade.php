<!doctype html>
<html lang="en">

<head>
    <title>Arkansas State Withholding Form</title>
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
            <div class="text-center p-1" style="background-color: #6DB4F5;">
                <h4 class="text-light p-2">STATE OF ARKANSAS</h4>
                <h4 class="text-light p-2">Employee's Withholding Exemption Certificate</h4>
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

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Employee:</label>
                            <p>File this form with your employer. Otherwise, your employer must withhold state income tax from your wages without exemptions or dependents.</p>
                            <label for="state" class="form-label fw-bold">Employer:</label>
                            <p>Keep this certificate with your records.</p>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <h5 class="fw-bold">How to Claim Your Withholding</h5>
                        <p class="">See instructions below</p>
                    </div>
                    <p class="fw-bold">1. CHOOSE ONE OF THE FOLLOWING FOR EXEMPTIONS CLAIMED</p>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">a. You claim yourself. (Enter one exemption)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">b. You claim yourself and your spouse. (Enter two exemptions)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">c. Head of Household, and you claim yourself. (Enter two exemptions)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">2. NUMBER OF CHILDREN or DEPENDENTS. (Enter one exemption per dependent)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>  
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">3. TOTAL EXEMPTIONS. (Add Lines 1a, b, c, and 2) If no exemptions or dependents are claimed, enter zero</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div> 
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">4. Additional amount, if any, you want deducted from each paycheck. (Enter dollar amount)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">5. I qualify for the low income tax rates. (See below for details) (Enter dollar amount)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="yes" id="" />
                                <label class="form-check-label" for=""> Yes </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="yes" id="" />
                                <label class="form-check-label" for=""> No </label>
                            </div>
                        </div>
                    </div>

 
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Please check filing status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="yes" id="" />
                                <label class="form-check-label" for="">  Single </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="yes" id="" />
                                <label class="form-check-label" for=""> Married filing Jointly </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="yes" id="" />
                                <label class="form-check-label" for="">  Head of Household </label>
                            </div>
                        </div>
                    </div> 
<p>I certify that the number of exemptions and dependents claimed on this certificate does not exceed the number to which I am entitled.</p>

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

            <div class="text-center">
                <h4 class="mt-3">Instructions</h4>
            </div>
            <div>
                <p class=""><b>TYPES OF INCOME</b> - This form can be used for withholding on all types of income, including pensions and annuities.</p>
                <p class=""><b>NUMBER OF EXEMPTIONS</b> – (Husband and/or Wife) Do not claim more than the correct number of exemptions. However, if you expect to owe more income tax for the year, you may increase your withholding by claiming a smaller number of exemptions and/or dependents, or you may enter into an agreement with your employer to have additional amounts withheld. This is especially important if you have more than one employer, or if both husband and wife are employed.</p>
                <p class=""><b>DEPENDENTS</b> – To qualify as your dependent (line 2 of form), a person must (a) receive more than 1/2 of their support from you for the year, (b) not be claimed as a dependent by such person’s spouse, (c) be a citizen or resident of the United States, and (d) have your home as their principal residence and be a member of your household for the entire year or be related to you as follows: son, daughter, grandchild, stepson, stepdaughter, son-in-law or daughter-in-law; your father, mother, grandparent, stepfather, stepmother, father-in-law or mother-in-law; your brother, sister, stepbrother, stepsister, half brother, half sister, brother-in-law or sister-in-law; your uncle, aunt, nephew or niece (but only if related by blood).</p>
                <p class=""><b>CHANGES IN EXEMPTIONS OR DEPENDENTS</b> – You may file a new certificate at any time if the number of exemptions or dependents INCREASES. You must file a new certificate within 10 days if the number of exemptions or dependents previously claimed by you DECREASES for any of the following reasons</p>
                <p class="">(a) Your spouse for whom you have been claiming an   exemption is divorced or legally separated from you, or claims  his or her own exemption on a separate certificate, or <br>
                    (b) The support you provide to a dependent for whom you claimed an exemption is expected to be less than half of the total support for the year.  OTHER DECREASES in exemptions or dependents, such as the death of a spouse or a dependent, does not affect your withholding until next year, but requires the filing of a new certificate by December 1 of the year in which they occur.</p>
                <p>You may claim additional amounts of withholding tax if desired. This will apply most often when you have income other than wages.</p>
                <p>You qualify for the low income tax rates if your total income from all sources is: <br>
                    (a)  Single                   	 		                                 $11,591    to    $15,200 <br> 
                    (b)  Married Filing Jointly           		                 $19,547    to    $24,400  <br>
                             (1 or less dependents) <br>
                    (c)  Married Filing Jointly            		                 $23,525    to    $30,400 <br>
                             (2 or more dependents) <br>
                    (d)  Head of Household/Qualifying Widow(er) 	 $16,479    to    $21,400 <br>
                             (1 or less dependents)  <br>
                    (e)  Head of Household/Qualifying Widow(er)	 $19,644    to    $24,200 <br>
                             (2 or more dependents) </p>


            </div>

            
            <div class="text-center">
                <h5 class="fw-bold">For additional information consult your employer or write to:</h5>
                <p class="">Arkansas Withholding Tax Section <br>
                    P. O. Box 8055  <br>
                    Little Rock, Arkansas  72203-805</p>
            </div>
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
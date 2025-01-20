<!doctype html>
<html lang="en">

<head>
    <title>Mississippi Employee's Withholding Exemption Certificate</title>
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
                <h4 class="text-light p-3">Mississippi Employee's Withholding Exemption Certificate</h4>
            </div>
            <form class="d-flex">
                <div class="row col-12 mt-3">
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
                    <h5 class="text-center">Claim Your Withholding Personal Exemption</h5>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">1. Single</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Enter $6,000 as exemption
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Amount Claimed</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="zip" class="form-label fw-bold">2. Marital Status (Check One)</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> (a) Spouse NOT employed: Enter $12,000 </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">(b) Spouse IS employed: Enter that part of $12,000 claimed by you in multiples of $500. See instruction 2(b) below.</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Amount Claimed (a)</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Amount Claimed (b)</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="zip" class="form-label fw-bold">3. Head of Family</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Enter $9,500 as exemption. To qualify as head of family, you must be single and have dependent living in the home with you. See instructions 2(c) and 2(d) below</label>
                            </div>
                        </div>
                    </div>
                    
                   
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Amount Claimed</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="zip" class="form-label fw-bold">4. Dependents (Number Claimed)</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> You may claim $1,500 for each dependent*, other than for taxpayer and spuse, who receives chief support from you and who qualifies as a dependent for Federal income tax purposes.</label>
                            </div>
                        </div>
                    </div>
                    <p>* A head of family may claim $1,500 for each dependent excluding the one which qualifies you as head of family. Multiply number of dependents claimed by you by $1,500. Enter amount claimed.</p>
                    
                    
                    
                    
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Amount Claimed</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>5. Age and blindness</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="zip" class="form-label fw-bold">Age 65 or older</label>
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Husband</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Wife</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Single</label>
                           </div>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="zip" class="form-label fw-bold">Blind</label>
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Husband</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Wife</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Single</label>
                           </div>
                           
                        </div>
                    </div>
                    <p>Multiply the number of blocks checked by $1,500. Enter the amount claimed.  <br>
                        *Note: No exemption allowed for age or blindness for dependents.</p>
                        <div class="row">
                            <div class="mb-0 col-lg-12">
                                <label for="city" class="form-label fw-bold">Amount Claimed</label>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>
                        </div>
                        <p>6. TOTAL AMOUNT OF EXEMPTION CLAIMED - Lines 1 through 5.</p>
                        <div class="row">
                            <div class="mb-0 col-lg-12">
                                <label for="city" class="form-label fw-bold">Amount Claimed</label>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>
                        </div>
                        <p>7. Additional dollar amount of withholding per pay period if agreed to by your employer.</p>
                        <div class="row">
                            <div class="mb-0 col-lg-12">
                                <label for="city" class="form-label fw-bold">Amount Claimed</label>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>
                        </div>
                        <p>8. If you meet the conditions set forth under the Service Member Civil Relief, as amended by the Military Spouses Residency Relief Act, and have no Mississippi tax liability, write "Exempt" on Line 8. You must attach a copy of the Federal Form DD-2058 and a copy of your Military Spouse ID Card to this form so your employer can validate the exemption claim.</p>
                        <div class="row">
                            <div class="mb-0 col-lg-12">
                                <label for="city" class="form-label fw-bold">Amount Claimed</label>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>
                        </div>
                        <p>I declare under the penalties imposed for filing false reports that the amount of exemption claimed on this certificate does not exceed the amount to which I am entitled or I am entitled to claim exempt status. </p>
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
<!doctype html>
<html lang="en">

<head>
    <title>DC Withholding</title>
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
                <h4 class="text-light p-2">D-4 DC Withholding Allowance Certificate</h4>
            </div>
            <hr>
            <form class="d-flex">
                <div class="row col-12">
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Enter Year*</label>
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
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Tax filing status: Fill in only one</label>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for=""> Single</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for=""> Married/domestic partners filing jointly </label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for=""> Married filing separately</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for=""> Head of household</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for=""> Married/domestic partners filing separately on same return</label>
                           </div>
                        </div>
                    </div>

                    <p>Total numnber of withholding allowances from worksheet below. </p>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Enter total from Sec. A, Line i</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Enter total from Sec. B, Line n</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>  
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Total number of withholding allowances from Line o</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>  

                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">Additional amount, if any, you want withheld from each paycheck</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="city" class="form-label fw-bold">Before claiming exemption from withholding, read below. If qualified, write “EXEMPT” in this box</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>                    
                    

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">My domicile is a state other than the District of Columbia</label>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for="">  Yes</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for="">  No </label>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">If yes, give name of state of domicile</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>  
                    <p>I am exempt because: last year I did not owe any DC income tax and had a right to a full refund of all DC income tax withheld from me; and this year I do  not expect to owe any DC income tax and expect a full refund of all DC income tax withheld from me; and I qualify for exempt status on federal Form W-4.</p>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">If claiming exemption from withholding, are you a full-time student?</label>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for="">  Yes</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for="">  No </label>
                           </div>
                        </div>
                    </div>
                    
                    <p>Under the penalties of perjury, I certify that the number of withholding allowances claimed on this certiﬁcate does not exceed the number to which I am entitled or, if claiming exemption from withholding, that I am entitled to claim the exempt status.</p>

        
                                    <p class="fw-bold">Employee's Signature*</p>
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


                    <div class="text-center ">
                        <h4 class="">D-4 DC Withholding Allowance Worksheet</h4>
                    </div>


                    <p class="fw-bold text-decoration-underline">Section A Number of withholding allowances</p>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">a  Enter 1 for yourself</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">b  Enter 1 if you are !ling as a head of household</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">c  Enter 1 if you are 65 or over </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">d  Enter 1 if you are blind  </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">e  Enter number of dependents  </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">f  Enter 1 for your spouse/registered domestic partner if !ling jointly </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">g  Enter 1 if married/registered domestic partners !ling jointly and your spouse/registered domestic partner    is 65 or over</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">h  Enter 1 if married/registered domestic partners !ling jointly and your spouse/registered domestic partner is blind</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">i  Number of allowances . Add Lines a through h and enter on Line 2 above. If you want to claim additional withholding allowances, complete section B below</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    

                    <p class="fw-bold text-decoration-underline">Section B Additional withholding allowances</p>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">j   Enter estimate of your itemized deductions</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">k   Enter $2,000 if married/registered domestic partners !ling separately; all others enter $4,000 </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">l   Subtract Line k from Line j </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">m   Multiply $1,675 by the number of allowances on Line i  </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">n   Divide Line l by Line m. Round to the nearest whole number.  Enter number of dependents  </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>


                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">o   Add Lines n and i and enter on Line 2 above.   </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
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
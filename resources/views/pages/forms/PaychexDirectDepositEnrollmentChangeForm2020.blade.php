<!doctype html>
<html lang="en">

<head>
    <title>Paychex Direct Deposit Enrollment/Change Form (2020)</title>
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
                <h4 class="text-light p-2">Paychex Direct Deposit Enrollment/Change Form</h4>
            </div>
            <form class="d-flex">
                <div class="row col-12 mt-2">
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Company name</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Client Number</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Employee/Worker Name*</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Employee/Worker Number</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p><b>Employee/Worker:</b> Retain a copy of this form for your records. Return the original to your employer.</p>
                    <p><b>Employers: </b>Return this form  to your Paychex office. For clients using on-line services, please retain a copy of this form for your records.</p>
                    <hr>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">Type of account?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> 
                                    Checking </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Savings </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Account Holder's Name</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Routing/Transit Number</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Checking/Savings Account Number</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Financial Institution (Bank Name)</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>I wish to deposit: <input type="text">% of Net Pay</p>
                    <p>Specific Dollar Amount - $ <input type="text"></p>
                    <p>Remainder of Net Pay -  <input type="text"> ("X" here)</p>
                    <hr>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">Type of account?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> 
                                    Checking </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Savings </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Account Holder's Name</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Routing/Transit Number</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Checking/Savings Account Number</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Financial Institution (Bank Name)</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    
                    <p>I wish to deposit: <input type="text">% of Net Pay</p>
                    <p>Specific Dollar Amount - $ <input type="text"></p>
                    <p>Remainder of Net Pay -  <input type="text"> ("X" here)</p>
                    <hr>
                    <h4 class="text-center">COMPLETE THIS SECTION IF CHANGING EXISTING DEPOSIT AMOUNTS</h4>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">Type of account?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> 
                                    Checking </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Savings </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Account Holder's Name</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Routing/Transit Number</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Checking/Savings Account Number</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Financial Institution (Bank Name)</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>I wish to deposit: <input type="text">% of Net Pay</p>
                    <p>Specific Dollar Amount - $ <input type="text"></p>
                    <p>Remainder of Net Pay -  <input type="text"> ("X" here)</p>
                    
                        <hr>
                        <h4 class="text-center">EMPLOYEE/WORKER CONFIRMATION STATEMENT</h4>
                    <p>I authorize my employer to deposit my wages/salary into the bank accounts specified above and, if necessary, to electronically debit my account to correct erroneous credits. I certify my account(s) allow these transactions. I agree that direct deposit transactions I authorize comply with all applicable laws. My signature below indicates that I am agreeing that I am either the account holder or have the authority of the account holder to authorize my employer to make direct deposits into the named account.</p>
                    <p class="fw-bold">Signature *</p>
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
                    <p>I confirm that the above named employee/worker has added or changed a bank account for direct deposit transactions processed be Paychex, Inc. I reviewed the information provided and it is accurate to the best of my knowledge. My signature below indicates that I have the authority to execute this document on behalf of the client.</p>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Employer Printed Name</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p class="fw-bold">Employer Signature</p>
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
                
                    {{-- <a name="" id="" class="btn btn-danger float-end col-2 m-2" href="#" role="button">SUBMIT</a> --}}
                        
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
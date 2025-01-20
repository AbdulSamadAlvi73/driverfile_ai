<!doctype html>
<html lang="en">

<head>
    <title>PAYCHEX - Direct Deposit Enrollment/Change Form 2016</title>
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
                <h4 class="text-light p-2">Direct Deposit Enrollment/Change Form</h4>
            </div>
            <p class="mt-3">Company name</p>
            <form class="d-flex">
                <div class="row col-12 mt-2">
    
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Client Number</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label fw-bold">First Name</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label fw-bold">Last Name</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Employee Number</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p><b>Employee/Worker:</b> Retain a copy of this form for your records. Return the original to your employer.</p>
                    <p><b>Employers: </b>Return this form  to your Paychex office. For clients using on-line services, please retain a copy of this form for your records.</p>
                    <hr>
                    <h4>COMPLETE THIS SECTION TO ADD OR CHANGE BANK ACCOUNTS</h4>
                    <p>Account #1</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">Type of account?</label>
                            <div class="card p-2">
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
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Routing/Transit Number?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Checking/Savings Account Number?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Financial Institution ("Bank") Name?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p>I wish to deposit (choose one): <input type="text">% of Net Pay</p>
                    <p>Specific Dollar Amount - $ <input type="text">.00</p>
                    <p>Remainder of Net Pay -  <input type="text"> ("X" here)</p>
                    <b>Account #2</b>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">Type of account?</label>
                            <div class="card p-2">
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
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Routing/Transit Number?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Checking/Savings Account Number?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Financial Institution ("Bank") Name?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    
                    <p>I wish to deposit (choose one): <input type="text">% of Net Pay</p>
                    <p>Specific Dollar Amount - $ <input type="text">.00</p>
                    <p>Remainder of Net Pay -  <input type="text"> ("X" here)</p>
                    <hr>
                    <h4>COMPLETE THIS SECTION IF CHANGING EXISTING DEPOSIT AMOUNTS</h4>
                    <b>Account #1</b>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Routing/Transit Number?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Checking/Savings Account Number?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Financial Institution ("Bank") Name?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p>Change my deposit amount to (choose one):</p>
                    <p>From <input type="text">
                        % of Net Pay to <input type="text">
                        % of Net Pay</p>
                        <p>From $ <input type="text">
                            .00 to $ <input type="text">
                            .00</p>
                    <p>Remainder of Net Pay -  <input type="text">
                        ("X" here)</p>
                    <b>Account #2</b>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Routing/Transit Number?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Checking/Savings Account Number?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Financial Institution ("Bank") Name?</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p>Change my deposit amount to (choose one):</p>
                    <p>From <input type="text">
                        % of Net Pay to <input type="text">
                        % of Net Pay</p>
                        <p>From $ <input type="text">
                            .00 to $ <input type="text">
                            .00</p>
                    <p>Remainder of Net Pay -  <input type="text">
                        ("X" here)</p>
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
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">One of the following is required to process this enrollment ("X" one):</label>
                            <div class="card p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="" />
                                    <label class="form-check-label" for="">  - Voided check with name imprinted (no starter checks)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="" />
                                    <label class="form-check-label" for="">- Deposit slip (only accepted if the verbiage "ACH R/T" appears before the routing number)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="" />
                                    <label class="form-check-label" for=""> - Bank letter of specification sheet (the signature of your local bank representative MUST be included)</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="" />
                                    <label class="form-check-label" for=""> - Other Bank Documentation from your Financial Institutions - If this box is checked the employer must sign this confirmation. </label>
                                </div>
                                
                           
                        </div>
                        </div>
                    </div>
                    <p>Employer confirmation: <br>
                        I confirm that the above named employee/worker has added or changed a bank account for direct deposit transactions processed be Paychex, Inc.</p>
                    <p>Employer Printed Name: <br>
                        ______________________________</p>
                    <p>Employer Signature: <br>
                        ______________________________</p>
                    
                    <p>Date: <br>
                        ___________________</p>
                    
                    <hr>
                    <p>* Certain accounts may have restrictions on deposits and withdrawals. Check with your bank for more information specific to your account. </p>
                    <p>DP0002  7/16</p>
                    <p>Form Expires 7/30/19</p>
                
                    <a name="" id="" class="btn btn-danger float-end col-2 m-2" href="#" role="button">SUBMIT</a>
                        
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
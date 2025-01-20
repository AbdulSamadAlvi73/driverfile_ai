<!doctype html>
<html lang="en">

<head>
    <title>ADP Employee Direct Deposit Form</title>
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
            <div class="text-center p-2"  style="background-color: #6DB4F5;">
                <h4 class="mt-3 text-light p-2">Employee Direct Deposit Enrollment Form</h4>
            </div>
            <hr>
            <p class="fw-bold">Payroll Manager "" Please complete this section and send a copy to ADP for enrollment.
                (Please print.)</p>

            <form class="d-flex">
                <div class="row col-12">
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="CompanyCode" class="form-label fw-bold">Company Code:</label>
                            <input type="text" name="CompanyCode" id="CompanyCode" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="Companyname" class="form-label fw-bold">Company Name:</label>
                            <input type="text" name="CompanyName" id="CompanyName" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="Employee File Number:" class="form-label fw-bold">Employee File Number:</label>
                            <input type="text" name="EmployeeFileNumber" id="EmployeeFileNumber" class="form-control"
                                placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="PayrollManagerName" class="form-label fw-bold">Payroll Manager Name:</label>
                            <input type="text" name="PayrollManagerName" id="PayrollManagerName" class="form-control"
                                placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="PayrollManagerSignature" class="form-label fw-bold">Payroll Manager
                                Signature:</label>
                            <div class="card" style="height: 150px; widht:150px;">

                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>

                </div>
            </form>

            <hr>
            <div>
                <p class="">To enroll in Full Service Direct Deposit, simply fill out this form and give to your payroll
                    manager. Attach a voided check for each checking account - not a deposit slip. If depositing to a
                    savings account, ask your bank to give you the Routing/Transit Number for your account. It isn’t
                    always the same as the number on a savings deposit slip. This will help ensure that you are paid
                    correctly.</p>
                <p class="fw-bold">IMPORTANT! Please read and sign before completing and submitting.</p>
                <p>I hereby authorize ADP to deposit any amounts owed me, as instructed by my employer, by initiating
                    credit entries to my account at the financial institution (hereinafter "Bank") indicated on this
                    form. Further, I authorize Bank to accept and to credit any credit entries indicated by ADP to my
                    account. In the even that ADP deposits funds erroneously into my account, I authorize ADP to debit
                    my account for an amount not to exceed the original amount of the erroneous credit. </p>
                <p>This authorization is to remain in full force and effect until ADP and Bank have received written
                    notice from me of its termination in such time and in such manner as to afford ADP and Bank
                    reasonable opportunity to act on it.</p>
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

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="PayrollManagerSignature" class="form-label fw-bold">Payroll Manager
                                    Signature:</label>
                                <div class="card" style="height: 150px; widht:150px;">

                                </div>
                                <p class="fw-bold text-primary">Help's</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <label for="date" class="form-label fw-bold">Date</label>
                                <input type="date" name="date" id="date" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                        <hr>
                        <p class="fw-bold">Account Information</p>
                        <p>The last item must be for the remaining amount owed to you. To distribute to more accounts,
                            please complete another form.</p>
                        <p class="fw-bold">Make sure to indicate what kind of account, along with amount to be
                            deposited, if less than your total net paycheck.</p>

                    </div>
                </form>

            </div>


            <h2 class="bg-primary text-light p-2 fw-bold">Account 1</h2>

            <form class="d-flex">
                <div class="row col-12">
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="companyname" class="form-label fw-bold">Bank Name/City/State:</label>
                            <input type="text" name="companyname" id="companyname" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="snn" class="form-label fw-bold">Routing Transit Number:</label>
                        <input type="text" name="snn" id="snn" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Account Number:</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Account Type:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Checkinig </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">Savings</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Other</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">I wish to deposit this amount:</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Or; I wish to deposit the entire net
                                amount.</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Entire net amount. </label>
                            </div>
                        </div>
                    </div>


                </div>
            </form>


            <h2 class="bg-primary text-light p-2 fw-bold">Account 2</h2>

            <form class="d-flex">
                <div class="row col-12">
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="companyname" class="form-label fw-bold">Bank Name/City/State:</label>
                            <input type="text" name="companyname" id="companyname" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="snn" class="form-label fw-bold">Routing Transit Number:</label>
                        <input type="text" name="snn" id="snn" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Account Number:</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Account Type:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Checkinig </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">Savings</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Other</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">I wish to deposit this amount:</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Or; I wish to deposit the entire net
                                amount.</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Entire net amount. </label>
                            </div>
                        </div>
                    </div>


                </div>
            </form>


            <h2 class="bg-primary text-light p-2 fw-bold">Account 3</h2>

            <form class="d-flex">
                <div class="row col-12">
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="companyname" class="form-label fw-bold">Bank Name/City/State:</label>
                            <input type="text" name="companyname" id="companyname" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="snn" class="form-label fw-bold">Routing Transit Number:</label>
                        <input type="text" name="snn" id="snn" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Account Number:</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Account Type:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Checkinig </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">Savings</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Other</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">I wish to deposit this amount:</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Or; I wish to deposit the entire net
                                amount.</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Entire net amount. </label>
                            </div>
                        </div>
                    </div>


                </div>
            </form>
            <hr>

            <h5 class="mt-3 text-center fw-bold">ATTENTION PAYROLL MANAGER: Employers must keep each original employee
                enrollment form on file as long as the employee is using FSDD, and for two years thereafter.</h5>





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
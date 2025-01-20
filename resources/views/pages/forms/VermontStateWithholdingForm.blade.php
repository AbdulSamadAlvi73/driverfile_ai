<!doctype html>
<html lang="en">

<head>
    <title>Vermont State Withholding Form</title>
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
                <h4 class="text-light p-2">Employee's Withholding Allowance Certificate - Form W-4VT</h4>
            </div>
            <form class="d-flex">
                <div class="row col-12 mt-2">
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
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">SSN</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">Filing Status (Check ONE)</label>
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Single </label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Married/Civil Union Filing Jointly </label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Married/Civil Union Filing Seperately </label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for="">  Married, but withhold at a higher single rate </label>
                           </div>
                           
                        </div>
                    </div>
                    <hr>
                    <h4 class="text-center">Vermont Allowances Worksheet</h4>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">1. Enter “1” for yourself if no one can claim you as a dependent</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">2. Enter “1” if you are filing jointly and your spouse does not work</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">3. Enter the number of dependents you plan to claim on your tax return. If you file jointly, then only one of you should claim the dependents on your W-4VT</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">4. Enter “1” if you plan to file as “head of household”</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">5. Total number of Vermont allowances. (Add Lines 1 through 4 and enter total here.)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">6. Enter an additional amount, if any, you want withheld from each check</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Exempt: If you had a right to a refund of all your Vermont income tax withheld last year because you had no tax liability and you also expect to have no liability this year, write “Exempt” here</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <hr>
                    <h4 class="text-center">General Information</h4>
                    <p>Form W-4VT is designed so that you can have as much “take-home pay” as possible without an income tax liability due to Vermont when you file your tax return. Each withholding allowance you claim on Line 5 above will reduce the amount of income you are taxed on and therefore the amount of Vermont income tax withheld each paycheck.</p>
                    <p>Here are some things to remember as you complete this form:</p>
                    <ul class="mx-4">
                        <li>Generally, dependents are children under 19 (or up to 24 if they are a full-time student) and any relatives who live with you and you support financially.</li>
                        <li>If you and your spouse both claim your dependents on your respective W-4VTs, not enough income tax will be withheld, and you might end up with taxes due when you file. Only one spouse should claim the dependents.</li>
                        <li>If you entered an additional amount to be withheld on the federal W-4, consider entering 30% of that amount on Line 6.</li>
                        <li>If you have more than one employer, consider claiming zero allowances with the employer(s) where you earn less income.</li>
                    </ul>
                    <hr>
                    <p>I certify that I am entitled to the number of withholding allowances claimed on this certificate. </p>
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
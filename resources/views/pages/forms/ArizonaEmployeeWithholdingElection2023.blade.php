<!doctype html>
<html lang="en">

<head>
    <title>Arizona Employee's Withholding Election 2023</title>
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
                <h4 class="mt-3 text-light p-2">Arizona Employee's Withholding Election 2023</h4>
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
                        <label for="completeaddress" class="form-label fw-bold">Complete Address</label>
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
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Choose either box 1 or box 2:</label>
                            <label for="state" class="form-label fw-bold">1. Choose either box 1 or box 2*</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">  1. Withhold from gross taxable wages at the percentage checked. </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> 2. I elect an Arizona withholding percentage of zero, and I certify that I expect to have no Arizona tax liability for the current taxable year.</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">If box 1 was selected, please check only one percentage</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">  0.5% </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> 0.5%</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> 1.5%</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">  2.0%</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">  2.5%</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="">  3.0%</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> 3.5%</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Check this box and enter an extra amount to be withheld from each paycheck below</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Extra amount to be withheld</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    
                                    <p class="">I certify that I have made the election marked above. </p>
                                    <p class="fw-bold">Employee's Signature</p>
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
                    
            <div class="text-center">
                <h4 class="mt-3">Employee's Instructions</h4>
            </div>
            <div>
                <p class="">Arizona law requires your employer to withhold Arizona income tax form your wages for work done in Arizona. The amount withheld is applied to your Arizona income tax due when you file your tax return. The amount withheld is a percentage of your gross taxable wages from every paycheck. You may also have your employer withhold an extra amount from each paycheck. Complete this form to select a percentage and any extra amount to be withheld form each paycheck.</p>
                <p class="fw-bold">What are my “Gross Taxable Wages”?</p>
                <p>For withholding purposes, your “gross taxable wages” are the wages that will generally be in box 1 of your federal Form W-2. It is your gross wages less any pretax deductions, such as your share of health insurance premiums.</p>
                <p class="fw-bold">New Employees</p>
                <p>Complete this form within the first five days of your employment to select an Arizona withholding percentage. You may also have your employer withhold an extra amount from each paycheck. If you do not give this form to your employer the department requires your employer to withhold 2.0% of your
                    <br>gross taxable wages.</p>
                    <p class="fw-bold">What Should I do With Form A-4?</p>
                    <p>Give your completed Form A-4 to your employer.</p>
                    <p class="fw-bold">Electing a Withholding Percentage of Zero</p>
                    <p>You may elect an Arizona withholding percentage of zero if you expect to have no Arizona income tax liability for the current year. Arizona tax liability is gross tax liability less any tax credits, such as the family tax credit, school tax credits, or credits for taxes paid to other states. If you make this election, your employer will not withhold Arizona income tax from your wages for payroll periods beginning after the date you file the form. To keep this election for the next calendar year, you must give your employer an updated Form A-4. </p>
                    <p>If you do not, your  employer may withhold Arizona income tax from your wages and salary until you submit an updated Form A-4. Zero withholding does not relieve you from paying Arizona income taxes that might be due at the time you file your Arizona income tax return. If you have an Arizona tax liability when you file your return or if at any time during the current year conditions change so that you expect to have a tax liability, you should promptly file a new Form A-4 and choose a withholding percentage that applies to you.</p>

                    <p class="fw-bold">Voluntary Withholding Election by Certain Nonresident Employees</p>
                    <p>Compensation earned by nonresidents while physically working in Arizona for temporary periods is subject to Arizona income tax. However, under Arizona law, compensation paid to certain nonresident employees is not subject to Arizona income tax withholding. These nonresident employees need to review their situations and determine if they should elect to have Arizona income taxes withheld from their Arizona source compensation. Nonresident employees may request that their employer withhold Arizona income taxes by completing this form to elect Arizona income tax withholding.</p>
               
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
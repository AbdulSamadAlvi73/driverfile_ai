<!doctype html>
<html lang="en">

<head>
    <title>Wisconsin Withholding Form</title>
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
                <h4 class="text-light p-3">Employee’s Wisconsin Withholding Exemption Certificate/New Hire Reporting</h4>
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
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">SSN</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Present Address</label>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">City</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">State</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Zip</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Date of Birth</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="date" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Hire Date</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="date" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold"></label>
                        </div>
                        <div class="mb-3 col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Single </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Married </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for="">  Married, but withhold at higher Single rate. Note: If married, but legally separated, check the Single box </label>
                        </div>
                        </div>
                    </div>
                    <h5>FIGURE YOUR TOTAL WITHHOLDING EXEMPTIONS BELOW</h5>
                    <p>Complete Lines 1 through 3</p>
                    <p>1.	(a) Exemption for yourself – enter 1 <input type="text"> <br>
                        (b) Exemption for your spouse – enter 1 <input type="text"> <br>
                        (c) Exemption(s) for dependent(s) – you are entitled to claim an exemption for each dependent <input type="text"> <br> 
                       (d) Total – add lines (a) through (c) <input type="text"> <br>
                   2. Additional amount per pay period you want deducted (if your employer agrees) <input type="text"> <br> 
                   3. I claim complete exemption from withholding (see instructions). Enter “Exempt”  <input type="text"> <br>
                   </p>
                <p class="fw-bold">I CERTIFY that the number of withholding exemptions claimed on this certificate does not exceed the number to which I am entitled. If claiming complete exemption from withholding, I certify that I incurred no liability for Wisconsin income tax for last year and that I anticipate that I will incur no liability for Wisconsin income tax for this year</p>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-6">
                        <div class="card" style="height: 150px; widht:150px;">

                        </div>
                        <p class="fw-bold text-primary">Help's</p>
                    </div>
                </div>
                <div class="mb-3 col-6">
                    <label for="completeaddress" class="form-label">Date</label>
                    <input type="date" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                        aria-describedby="helpId" />
                </div>
                <p><b>• WHO MUST COMPLETE: </b><br>
                    Effective on or after January 1, 2020, every newly-hired employee is required to provide a completed Form WT-4 to each of their employers. Form WT-4 will be used by your employer to determine the amount of Wisconsin income tax to be withheld from your paychecks. If you have more than one employer, you should claim a smaller number or no ex‑emptions on each Form WT-4 provided to employers other than your principal employer so that the total amount withheld will be closer to your actual income tax liability.</p>
                <p>You must complete and provide your employer a new Form WT-4 within 10 days if the number of exemptions previously claimed DECREASES.</p>
                <p>You may complete and provide to your employer a new Form WT-4 at any time if the number of your exemptions INCREASES.</p>
                <p>Your employer may also require you to complete this form to report your hiring to the Department of Workforce Development.</p>
                <p><b>• UNDER WITHHOLDING:</b> <br>
                    If sufficient tax is not withheld from your wages, you may incur additional interest charges under the tax laws. In general, 90% of the net tax shown on your income tax return should be withheld.</p>
                <p><b>• OVER WITHHOLDING:</b> <br>
                    If you are using Form WT-4 to claim the maximum number of exemptions to which you are entitled and your withholding exceeds your expected
                    income tax liability, you may use Form WT-4A to minimize the over withholding.</p>                    
                <p><b>WT-4 Instructions </b>– Provide your information in the employee section.</p>
                <p><b>• LINE 1: </b><br>
                        (a)-(c) Number of exemptions – Do not claim more than the correct number of exemptions. If you expect to owe more income tax for the year than will be withheld if you claim every exemption to which you are entitled, you may increase your withholding by claiming a smaller number of exemptions on lines 1(a)‑(c) or you may enter into an agreement with your employer to have additional amounts withheld (see instruction for line 2).</p>
                <p>(c) Dependents – Those persons who qualify as your dependents for federal income tax purposes may also be claimed as dependents for Wisconsin purposes. The term “dependents” does not include you or your spouse. Indicate the number of dependents that you are claiming in the space provided.</p>    
                <p><b>• LINE 2:</b> <br>
                    Additional withholding – If you have claimed “zero” exemptions on line 1, but still expect to have a balance due on your tax return for the year, you may wish to request your employer to withhold an additional amount of tax for each pay period. If your employer agrees to this additional withholding, enter the additional amount you want deducted from each of your paychecks on line 2.</p>
                <p><b>• LINE 3: </b><br>
                    Exemption from withholding – You may claim exemption from withholding of Wisconsin income tax if you had no liability for income tax for last year, and you expect to incur no liability for income tax for this year. You may not claim exemption if your return shows tax liability before the allowance of any credit for income tax withheld. If you are exempt, your employer will not withhold Wisconsin income tax from your wages.</p>
                <p>You must revoke this exemption (1) within 10 days from the time you expect to incur income tax liability for the year or (2) on or before December 1 if you expect to incur Wisconsin income tax liabilities for the next year. If you want to stop or are required to revoke this exemption, you must complete and providea new Form WT‑4 to your employer showing the number of withholding exemptions you are entitled to claim. This certificate for exemption from withholding will expire on April 30 of next year unless a new Form WT‑4 is completed and provided to your employer before that date.</p>
                <h5>Employer's Section</h5>
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Company name</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Federal Employer ID Number</label>
                    </div>
                    <div class="mb-3 col-lg-12">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Address</label>
                    </div>
                    <div class="mb-3 col-lg-12">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">City</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">State</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Zip</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Completed by</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Title</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Phone no</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Email</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
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
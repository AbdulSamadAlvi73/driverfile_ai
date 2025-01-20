<!doctype html>
<html lang="en">

<head>
    <title>Kansas State Withholding Form</title>
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
            <div class="text-center  p-2" style="background-color: #6DB4F5;">
                <h4 class="text-light">KANSAS</h4>
                <h4 class="text-light">EMPLOYEE’S WITHHOLDING ALLOWANCE CERTIFICATE </h4>
            </div>
            <div class="mt-4">
                <p>Use the following instructions to accurately complete your K-4 form, then detach the lower portion and give it to your employer. For assistance, call the Kansas Department of Revenue at 785-368-8222.</p>
            </div>
            <p><b class="text-decoration-underline">Purpose of the K-4 form:</b> A completed withholding allowance certificate will let your employer know how much Kansas income tax should be withheld from your pay on income you earn from Kansas sources. Because your tax situation may change, you may want to refigure your withholding each year.</p>
            <p><b class="text-decoration-underline">Exemption from Kansas withholding:</b> To qualify for exempt status you must verify with the Kansas Department or Revenue that: 1) last year you had the right to a refund of all STATE income tax withheld because you had no tax liability; and 2) this year you will receive a full refund of all STATE income tax withheld because you will have no tax liability. </p>
            <p><b class="text-decoration-underline">Basic Instructions:</b> If you are not exempt, complete the <b>Personal Allowance Worksheet</b> that follows. The total on line F should not exceed the total exemptions you claim under "Exemptions and Dependents" on your Kansas income tax return. <b>NOTE:</b> Your status of "Single" or "Joint" may differ from your status claimed on your federal Form W-4).</p>
            <p>Using the information from your <b>Personal Allowance Worksheet,</b> complete the K-4 form below, sign it and provide it to your employer. If your employer does not receive a <b>K-4</b> form from you, they must withhold Kansas income tax from your wages without exemption at the "Single" allowance rate. </p>
            <p><b class="text-decoration-underline">Head of household:</b> Generally, you may claim head of household filing status on your tax return only if you are <b>unmarried and pay more than 50% of the cost of keeping up a home for yourself and for your dependent(s). </b></p>
            <p><b>Nonwage income:</b> If you have a large amount of nonwage Kansas source income, such as interest or dividends, consider making estimated tax payments on Form K-40ES. Without these payments, you may owe additional Kansas tax when you file your state income tax return.</p>
            <p class="text-center"><b>Personal Allowance Worksheet</b> (Keep for your records) </p>
            <p>If  you are a single filer mark "Single" <br>
                If you are married and your  spouse  has  income mark "Single" <br>
                If you are married and your spouse does not work mark "Joint" </p>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-12">
                        <label for="city" class="form-label fw-bold">A. Allowance Rate</label>
                        <div class="">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="" id="" />
                            <label class="form-check-label" for="">Single </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="" id="" />
                            <label class="form-check-label" for="">Joint </label>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">B. Enter "0" or "1" if you are married or single and no one else can claim you as a dependent (entering "0" may help you avoid having too little tax withheld</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">C. Enter "0" or "1" if you are married and only have one job, and your spouse does not work (entering "0" may help you avoid having too little tax withheld)</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">D. Enter "2" if you will file head of household on your tax return (see conditions under Head of household above)</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">E. Enter the number of dependents you will claim on your tax return. Do not claim yourself or your spouse or dependents that your spouse has already claimed on their form K-4</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">F. Add lines B through E and enter the total here</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                <hr>    
                <h5 class="text-center">K-4</h5>
                <h5 class="text-center">Kansas Employee’s Withholding Allowance Certificate</h5>
                <p class="text-center">Whether you are entitled to claim a certain number of allowances or exemptions from withholding is subject to review by the Kansas Department of Revenue. Your employer may be required to send a copy of this form to the Kansas Department of Revenue.</p>
                
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
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">SSN</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Present Address</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">City</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">State</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Zip</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">Allowance Rate - Mark the allowance rate selected in line A above.</label>
                            <div class="">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="" />
                                <label class="form-check-label" for="">Single </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="" />
                                <label class="form-check-label" for="">Joint </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Total number of allowances you are claiming (from line F above)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Enter any additional amount you want withheld from each paycheck (this is optional)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">I claim exemption from withholding. You must meet the conditions explained in the "Exemption from withholding" instructions above. If you meet those conditions, write "Exempt" on this line. .............. Note: The Kansas Department of Revenue will receive your federal W-2 forms for all years claimed Exempt</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>Under penalties of perjury, I declare that I have examined this certificate and to the best of my knowledge and belief it is true, correct, and complete</p>
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
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label fw-bold">Company name</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Address</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label fw-bold">EIN (Employer Identification Number)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
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
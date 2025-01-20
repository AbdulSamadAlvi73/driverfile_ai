<!doctype html>
<html lang="en">

<head>
    <title>OK-W4</title>
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
                <h4 class="text-light p-2">OK-W4</h4>
            </div>
            <h5 class="text-center mt-3">Oklahoma Tax Commission <br>
                Employee’s Withholding Allowance Certificate <br>
                This certificate is for income tax withholding purposes only. Type or print. <br>
                NOTE: Do NOT mail to the Oklahoma Tax Commission</h5>
            <form class="d-flex">
                <div class="row col-12">
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Your First Name and Middle Initial*</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Last Name*</label>
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
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Present  Address</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Filing Status</label>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for=""> Single</label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for=""> Married </label>
                           </div>
                           <div class="form-check">
                            <input class="form-check-input" type="radio" name="Status" id="" />
                            <label class="form-check-label" for=""> Married, but withhold at higher single rate</label>
                           </div>
                        </div>
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
                            <label for="city" class="form-label fw-bold">Zip</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>  

                    <hr>
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">1. Allowance For Yourself: Enter 1 for yourself.....1</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">2. Allowance For Your Spouse: Does your spouse work? If "YES", enter 0. If "NO", enter 1 for your spouse.....2</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">3. Allowance For Dependents: Enter the number of dependents you will claim on your tax return. Do not claim yourself or your spouse or dependents that your spouse has already claimed on his or her Form OK-W-4.....3</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">4. Additional Allowances: You may claim additional allowances if you itemize your deductions or have other state tax deductions or credits that lower your tax. Enter the number of additional allowances you would like to claim.....4  </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">5. Total Number of Allowances You Are Claiming: Add Lines 1 through 4 and enter total here.....5  </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">6. Additional Withholding: If you expect to have a balance due (as a result of interest income, dividends, income from a part-time job, etc.) on your tax return, you may request your employer to withhold an additional amount of tax from each pay period. To calculate the amount needed, divide the amount of the expected balance due by the number of pay periods in a year. Enter the additional amount to be withheld each pay period here.....6 $ </span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">7. Exempt Status: If you had a right to a refund of all of your Oklahoma income tax withheld last year because you had no tax liability and this year you expect a refund of all Oklahoma income tax withheld because you expect to have no tax liability, write "Exempt" on Line 7. See information below.....7</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">8. If you meet the conditions set forth under the Service member Civil Relief Act, as amended by the Military Spouses Residency Relief Act and have no Oklahoma tax liability, write "Exempt" on line 8 and complete Form OW-9-MSE. See information.....8</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-5">9. If income earned as a member of any active duty component of the Armed Forces of the United State is eligible for the military income deduction write "exempt" on Line 9.....</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" style="width: 150px;" placeholder="" aria-describedby="helpId">
                    </div>
                    
                    <hr>
                    <p>Under penalties of perjury, I certify that I am entitled to the number of withholding allowances claimed on this certificate, or I am entitled to claim exempt status.</p>
                        
                    <p class="fw-bold">Signature (Form is not valid unless you sign it)</p>
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
                    <p>Form OK-W-4 is completed so you can have as much "take-home pay" as possible without an income tax liability due to the state of Oklahoma when you file your return. Deductions and exemptions reduce the amount of your taxable income. If your income is less than the total of your personal exemption plus your standard deduction, you should mark "Exempt" on Line 7 above. The following amounts of your annual Oklahoma adjusted gross income will not be taxed by the state of Oklahoma when you file your individual income tax return.</p>
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-bordered  align-middle"
                        >
                            <thead class="">
                                <tr>
                                    <th style="background-color: skyblue;color:white;">Single</th>
                                    <th style="background-color: skyblue;color:white;">Married Filing Joint</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr
                                    class=""
                                >
                                    <td scope="row"><input type="text" class="w-100" value="$1,000 - personal exemption"></td>
                                    <td><input type="text" class="w-100" value="$2,000 - personal exemption"></td>
                                </tr>
                                <tr
                                    class=""
                                >
                                    <td scope="row"><input type="text" class="w-100" value="$6,350 - standard deduction"></td>
                                    <td><input type="text" class="w-100" value="$12,700 - standard deduction"></td>
                                </tr>
                                <tr
                                    class=""
                                >
                                    <td scope="row"><input type="text" class="w-100" value="$7,650 - Total"></td>
                                    <td><input type="text" class="w-100" value="$14,700 - Total"></td>
                                </tr>
                                <tr
                                    class=""
                                >
                                    <td scope="row"><input type="text" class="w-100" value="$1,000 for each dependent"></td>
                                    <td><input type="text" class="w-100" value="$1,000 for each dependent"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="text-center text-decoration-underline">Items To Remember</p>
                    <ul class="mx-4">
                        <li>If your filing status is married filing joint and your spouse works, do not claim an exemption on Form OK-W-4 for your spouse.</li>
                        <li>If you and your spouse have dependents, please be sure only one of you claim the dependents on your Form OK-W-4. If both spouses claim the dependents as an allowance on Form OK-W-4, it may cause you to owe additional Oklahoma income tax when you file your return.</li>
                        <li>If you have more than one employer, you should claim a smaller number or no allowances on each Form OK-W-4 filed with employers other than your principal employer so the amount withheld will be closer to your amount of total tax.</li>
                        <li>If you itemize your deductions, instead of using the standard deduction, the amount not taxed by Oklahoma may be a greater or lesser amount.</li>
                        <li>If you are claiming an "Exempt" status due to the Military Spouses Residency Relief Act you must provide Form OW-9-MSE "Annual Withholding Tax Exemption Certification for Military Spouses".</li>
                    </ul>
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
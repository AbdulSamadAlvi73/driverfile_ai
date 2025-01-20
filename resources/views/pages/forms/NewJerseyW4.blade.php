<!doctype html>
<html lang="en">

<head>
    <title>New Jersey W4</title>
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
                <h4 class="text-light p-2">State of New Jersey - Division of Taxation</h4>
            </div>
            <b class="text-center mt-3">Form NJ-W4</b>
            <h5 class="text-center">Employee's Withholding Allowance Certificate</h5>
            <hr>
            <p>1. General</p>
            <form class="d-flex">
                <div class="row col-12">
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
                    <hr>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">2. Filing Status (Choose only one status)*</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="" id="" />
                            <label class="form-check-label" for=""> Single </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="" id="" />
                            <label class="form-check-label" for=""> Married/Civil Union Couple Joint </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="" id="" />
                            <label class="form-check-label" for="">  Married/Civil Union Partner Separate </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="" id="" />
                            <label class="form-check-label" for="">  Head of Household </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="" id="" />
                            <label class="form-check-label" for=""> Qualifying Widow(er).Surviving Civil Union Partner </label>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">3. If you have chosen to use the chart from instruction A, enter the appropriate letter here:</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <select
                                class="form-select form-select-md"
                                name=""
                                id=""
                            >
                                <option selected>Select</option>
                                <option value="">A</option>
                                <option value="">B</option>
                                <option value="">C</option>
                                <option value="">D</option>
                                <option value="">E</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">4. Total number of allowances you are claiming (see instructions):</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">5. Additional amount you want deducted from each pay:</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">6. I claim exemption from withholding of NJ Gross Income Tax and I certify that I have met the conditions in the instructions of the NJ-W4. If you have met the conditions, enter "EXEMPT"; here:</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>7. Under penalties of perjury, I certify that I am entitled to the number of withholding allowances claimed on this certificate or entitled to claim exempt status.</p>
                   
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
                    <hr>
                    <b>Employer's Name and Address</b>
                    <div class="row mt-4    ">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Company name</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                  
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Complete Address</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">Employer Identification Number:</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <hr>
                    <b>BASIC INSTRUCTIONS</b>
                    <p>Line 1 Enter your name, address and social security number in the spaces provided. <br>
                        Line 2 Check the box that indicates your filing status.  If you checked Box 1 (Single) or Box 3 (Married/Civil Union Partner Separate) you will be withheld at Rate A. <br>
                        Note: If you have checked Box 2 (Married/Civil Union Couple Joint), Box 4 (Head of Household) or Box 5 (Qualifying Widow(er)/Surviving Civil Union Partner) and either your spouse/civil union partner works or you have more than one job or more than one source of income and the combined total of all wages is greater than $50,000, see instruction A below. If you do not complete Line 3, you will be withheld at Rate B. <br>
                        Line 3 If you have chosen to use the wage chart below, enter the appropriate letter. <br>
                        Line 4 Enter the number of allowances you are claiming.  Entering a number on this line will decrease the amount of withholding and could result in an underpayment on your return. <br>
                        Line 5 Enter the amount of additional withholdings you want deducted from each pay. <br>
                        Line 6 Enter "EXEMPT" to indicate that you are exempt from New Jersey Gross Income Tax Withholdings, if you meet one of the following conditions:</p>
                    <ul class="mx-5">
                        <li>Your filing status is SINGLE or MARRIED/CIVIL UNION PARTNER SEPARATE and your wages plus your taxable nonwage income will be $10,000 or less for the current year.</li>
                        <li>Your filing status is MARRIED/CIVIL UNION COUPLE JOINT, and your wages combined with your spouse’s/civil union partner’s wages plus your taxable non wage income will be $20,000 or less for the current year.</li>
                        <li>Your filing status is HEAD OF HOUSEHOLDor QUALIFYING WIDOW(ER)/SURVIVING CIVIL UNION PARTNER and your wages plus your taxable nonwage income will be $20,000 or less for the current year.</li>
                    </ul>
                    <p>Your exemption is good for ONEyear only.  You must complete and submit a form each year certifying you have no New Jersey Gross Income Tax liability and claim exemption from withholding.  If you have questions about eligibility, filing status, withholding rates, etc. when completing this form, call the Division of Taxation’s Customer Service Center at 609-292-6400. Instruction A - Wage Chart</p>
                    <p>This chart is designed to increase withholdings on your wages, if these wages will be taxed at a higher rate due to inclusion of other wages or income on your NJ-1040 return.  It is not intended to provide withholding for other income or wages.  If you need additional withholdings for other income or wages use Line 5 on the NJ-W4.  This Wage Chart applies to taxpayers who are married/civil union couple filing jointly, heads of households or qualifying widow(er)/surviving civil union partner.  Single individuals or married/civil union partners filing separate returns do not need to use this chart. If you have indicated filing status #2, 4 or 5 on the above NJ-W4 and your taxable income is greater than $50,000, you should strongly consider using the Wage Chart.  (See the Rate Tables on the reverse side to estimate your withholding amount).</p>
                    <b class="text-center"> HOW TO USE THE CHART</b>
                    <ol class="mx-5">
                        <li>Find the amount of your wages in the left-hand column.</li>
                        <li>Find the amount of the total for all other wages (including your spouse’s/civil union partner’s wages) along the top row.</li>
                        <li>Follow along the row that contains your wages until you come to the column that contains the other wages.</li>
                        <li>This meeting point indicates the Withholding Table that best reflects your income situation.</li>
                        <li>If you have chosen this method, enter the "letter" of the withholding rate table on Line 3 of the NJ-W4.</li>
                    </ol>
                    <p>NOTE: If your income situation substantially increases (or decreases) in the future, you should submit a revised NJ-W4 to your employer.</p>
                    <b>WAGE CHART</b>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-secondary">

                                <tr>
                                    <th>
                                        Your Wage
                                    </th>
                                    <th>0 10,000</th>
                                    <th>10,001 <br> 20,000</th>
                                    <th>20,001 <br> 30,000</th>
                                    <th>30,001 <br> 40,000</th>
                                    <th>40,001 <br> 50,000</th>
                                    <th>50,001 <br> 60,000</th>
                                    <th>60,001 <br> 70,000</th>
                                    <th>70,001 <br> 80,000</th>
                                    <th>80,001 <br> 90,000</th>
                                    <th>Over 90,000</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td scope="row"><input type="text" value="0 10,000"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" value="10,001 20,000"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="C"></td>
                                    <td><input type="text" value="C"></td>
                                    <td><input type="text" value="C"></td>
                                    <td><input type="text" value="C"></td>
                                    <td><input type="text" value="C"></td>
                                    <td><input type="text" value="C"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" value="20,001 30,000"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="D"></td>
                                    <td><input type="text" value="D"></td>
                                    <td><input type="text" value="D"></td>
                                    <td><input type="text" value="D"></td>
                                    <td><input type="text" value="D"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" value="30,001 40,000"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" value="40,001 50,000"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="C"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" value="50,001 60,000"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="C"></td>
                                    <td><input type="text" value="D"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" value="60,001 70,000"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="C"></td>
                                    <td><input type="text" value="D"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="A"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" value="70,001 80,000"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="C"></td>
                                    <td><input type="text" value="D"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" value="80,001 90,000"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="C"></td>
                                    <td><input type="text" value="D"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" value="Over 90,001"></td>
                                    <td><input type="text" value="B"></td>
                                    <td><input type="text" value="C"></td>
                                    <td><input type="text" value="D"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                    <td><input type="text" value="E"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h5 class="text-center mt-3">RATE TABLES FOR WAGE CHART</h5>
                    <p>The rate tables below correspond to the letters in the Wage Chart on the front page. Use these to estimate the amount of withholding that will occur if you choose to use the wage chart. Compare this to your estimated income tax liability for your New Jersey Income Tax return to see if this is the correct amount of withholding that you should have.</p>
                    <b>RATE A - Weekly Payroll Period ($19.20)</b>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-secondary">

                                <tr>
                                    <th>If the amount of taxable wages is:</th>
                                    <th>The amount of income tax to be withheld is:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="$0 - $384"></td>
                                    <td><input type="text" class="w-100" value="1.5% of excess over $0"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="over $384 - $673"></td>
                                    <td><input type="text" class="w-100" value="$5.76 plus  2.0% of excess over $384"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="over $673  - $769"></td>
                                    <td><input type="text" class="w-100" value="$11.54   plus  3.9% of excess over $673"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="over $769 - $14424"></td>
                                    <td><input type="text" class="w-100" value="$15.28 plus  6.1% of excess over $769"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="over $1442"></td>
                                    <td><input type="text" class="w-100" value="$56.34   plus  7.0% of excess over $1,442"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="over $9615"></td>
                                    <td><input type="text" class="w-100" value="$628.45   plus  9.9% of excess over $9,616"></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    
                    <b>RATE A - Annual Payroll Period ($1,000)</b>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-secondary">

                                <tr>
                                    <th>If the amount of taxable wages is:</th>
                                    <th>The amount of income tax to be withheld is:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $0 - $20,000"></td>
                                    <td><input type="text" class="w-100" value="1.5%"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $20,000 - $35,000"></td>
                                    <td><input type="text" class="w-100" value="$300 plus 2.0% over $20,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $35,000 - $40,000"></td>
                                    <td><input type="text" class="w-100" value="$600   plus  2.7% over $35,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $40,000 - $75,000"></td>
                                    <td><input type="text" class="w-100" value="$795  plus  6.1% over $40,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $75,000"></td>
                                    <td><input type="text" class="w-100" value="$2,930   plus  7.0% over $75,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $500,000"></td>
                                    <td><input type="text" class="w-100" value="$32,680 plus  9.9% over $500,000"></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    
                    <b>RATE B - Weekly Payroll Period ($19.20)</b>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-secondary">

                                <tr>
                                    <th>If the amount of taxable wages is:</th>
                                    <th>The amount of income tax to be withheld is:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $0 - $384"></td>
                                    <td><input type="text" class="w-100" value="1.5%"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $384 - $961"></td>
                                    <td><input type="text" class="w-100" value="$5.76 plus  2.0% over $384"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $961 - $1,346"></td>
                                    <td><input type="text" class="w-100" value="$17.30   plus  2.7% over $961"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $1,346 - $1,538"></td>
                                    <td><input type="text" class="w-100" value="$27.70 plus  3.9% over $1,346"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $1,538 - $2,884"></td>
                                    <td><input type="text" class="w-100" value="$35.18   plus  6.1% over $1,538"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $2,884"></td>
                                    <td><input type="text" class="w-100" value="$117.29 plus  7.0% over $2,884"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $9,615"></td>
                                    <td><input type="text" class="w-100" value="$588.46 plus  9.9% over $9,615"></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    
                    <b>RATE B - Annual Payroll Period ($1,000)</b>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-secondary">

                                <tr>
                                    <th>If the amount of taxable wages is:</th>
                                    <th>The amount of income tax to be withheld is:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $0 - $20,000"></td>
                                    <td><input type="text" class="w-100" value="1.5%"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $20,000 - $50,000"></td>
                                    <td><input type="text" class="w-100" value="$300 plus  2.0% over $20,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $50,000 - $70,000"></td>
                                    <td><input type="text" class="w-100" value="$900  plus  2.7% over $35,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $70,000 - $80,000"></td>
                                    <td><input type="text" class="w-100" value="$1,440  plus  3.9% over $40,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $80,000 - $150,000"></td>
                                    <td><input type="text" class="w-100" value="$1,830   plus  6.1% over $75,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $150,000"></td>
                                    <td><input type="text" class="w-100" value="$6,100 plus  7.0% over $150,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $500,000"></td>
                                    <td><input type="text" class="w-100" value="$30,600 plus  9.9% over $500,000"></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    
                    <b>RATE C - Weekly Payroll Period ($19.20)</b>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-secondary">

                                <tr>
                                    <th>If the amount of taxable wages is:</th>
                                    <th>The amount of income tax to be withheld is:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $0 - $384"></td>
                                    <td><input type="text" class="w-100" value="1.5%"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $384 - $961"></td>
                                    <td><input type="text" class="w-100" value="$5.76 plus   2.3% over $384"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $961 - $1,346"></td>
                                    <td><input type="text" class="w-100" value="$14.62 plus  2.8% over $769"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $1,346 - $1,538"></td>
                                    <td><input type="text" class="w-100" value="$19.99 plus 3.5% over $961"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $1,538 - $2,884"></td>
                                    <td><input type="text" class="w-100" value="$26.71 plus 5.6% over $1,153"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $2,884"></td>
                                    <td><input type="text" class="w-100" value="$123.65 plus 6.6% over $2,884"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $9,615"></td>
                                    <td><input type="text" class="w-100" value="$567.90  plus  9.9% over $9,615"></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    
                    <b>RATE C - Annual Payroll Period ($1,000)</b>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-secondary">

                                <tr>
                                    <th>If the amount of taxable wages is:</th>
                                    <th>The amount of income tax to be withheld is:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $0 - $20,000"></td>
                                    <td><input type="text" class="w-100" value="1.5%"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $20,000 - $50,000"></td>
                                    <td><input type="text" class="w-100" value="$300 plus  2.3% over $20,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $50,000 - $70,000"></td>
                                    <td><input type="text" class="w-100" value="$760  plus  2.8% over $40,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $70,000 - $80,000"></td>
                                    <td><input type="text" class="w-100" value="$1,040  plus  3.5% over $50,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $80,000 - $150,000"></td>
                                    <td><input type="text" class="w-100" value="$1,390   plus  5.6% over $60,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $150,000"></td>
                                    <td><input type="text" class="w-100" value="$6,430 plus 6.6  % over $150,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $500,000"></td>
                                    <td><input type="text" class="w-100" value="$29,530 plus  9.9% over $500,000"></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    
                    <b>RATE D - Weekly Payroll Period ($19.20)</b>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-secondary">

                                <tr>
                                    <th>If the amount of taxable wages is:</th>
                                    <th>The amount of income tax to be withheld is:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $0 - $384"></td>
                                    <td><input type="text" class="w-100" value="1.5%"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $384 - $961"></td>
                                    <td><input type="text" class="w-100" value="$5.76 plus   2.7% over $384"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $961 - $1,346"></td>
                                    <td><input type="text" class="w-100" value="$16.16 plus  3.4% over $769"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $1,346 - $1,538"></td>
                                    <td><input type="text" class="w-100" value="$22.68 plus 4.3% over $961"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $1,538 - $2,884"></td>
                                    <td><input type="text" class="w-100" value="$30.94 plus 5.6% over $1,153"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $2,884"></td>
                                    <td><input type="text" class="w-100" value="$127.88 plus 6.5% over $2,884"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $9,615"></td>
                                    <td><input type="text" class="w-100" value="$565.40  plus  9.9% over $9,615"></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    
                                       
                    <b>RATE D - Annual Payroll Period ($1,000)</b>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-secondary">

                                <tr>
                                    <th>If the amount of taxable wages is:</th>
                                    <th>The amount of income tax to be withheld is:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $0 - $20,000"></td>
                                    <td><input type="text" class="w-100" value="1.5%"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $20,000 - $50,000"></td>
                                    <td><input type="text" class="w-100" value="$300 plus  2.7% over $20,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $50,000 - $70,000"></td>
                                    <td><input type="text" class="w-100" value="$840 plus 3.4% over $40,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $70,000 - $80,000"></td>
                                    <td><input type="text" class="w-100" value="$1,180  plus 4.3% over $50,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $80,000 - $150,000"></td>
                                    <td><input type="text" class="w-100" value="$1,610  plus  5.6% over $60,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $150,000"></td>
                                    <td><input type="text" class="w-100" value="$6,650 plus 6.5  % over $150,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $500,000"></td>
                                    <td><input type="text" class="w-100" value="$29,400 plus  9.9% over $500,000"></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                    
                    
                                                        
                    <b>RATE E - Weekly Payroll Period ($19.20)</b>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-secondary">

                                <tr>
                                    <th>If the amount of taxable wages is:</th>
                                    <th>The amount of income tax to be withheld is:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $0 - $384"></td>
                                    <td><input type="text" class="w-100" value="1.5%"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $384 - $673"></td>
                                    <td><input type="text" class="w-100" value="$5.76 plus   2.0% over $384"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $673 - $1,923"></td>
                                    <td><input type="text" class="w-100" value="$111.54 plus  5.8% over $673"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $1,923"></td>
                                    <td><input type="text" class="w-100" value="$84.04 plus 6.5% over $1,9231"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $9,615"></td>
                                    <td><input type="text" class="w-100" value="$584.20 plus 9.9% over $9,615"></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>

                    <b>RATE E - Annual Payroll Period ($1,000)</b>
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">
                            <thead class="table-secondary">

                                <tr>
                                    <th>If the amount of taxable wages is:</th>
                                    <th>The amount of income tax to be withheld is:</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $0 - $20,000"></td>
                                    <td><input type="text" class="w-100" value="1.5%"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $20,000 - $35,000"></td>
                                    <td><input type="text" class="w-100" value="$300 plus  2.0% over $20,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $35,000 - $100,000"></td>
                                    <td><input type="text" class="w-100" value="$600 plus 5.8% over $35,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $100,000"></td>
                                    <td><input type="text" class="w-100" value="$4,370  plus 6.5% over $100,000"></td>
                                </tr>
                                <tr class="">
                                    <td scope="row"><input type="text" class="w-100" value="Over $500,000"></td>
                                    <td><input type="text" class="w-100" value="$30,370  plus  9.9% over $500,000"></td>
                                </tr>
                               
                            </tbody>
                        </table>
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
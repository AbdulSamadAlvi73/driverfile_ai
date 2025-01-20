<!doctype html>
<html lang="en">
<head>
    <title>New York State Withholding Form</title>
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
                <h4 class="text-light p-3">New York State Withholding Form</h4>
            </div>
            <b class="text-center mt-3">
                Department of Taxation and Finance <br>
                Employee Withholding Allowance Certificate <br>
                New York State • New York City • Yonkers
            </b>
              <form class="d-flex">
                <div class="row col-12 mt-3 ">
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
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Filing Status - Note: If married but legally separated, mark an X in the Single or Head of household box.</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="" />
                                <label class="form-check-label" for=""> Single or Head of Household </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="" />
                                <label class="form-check-label" for="">  Married </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="" />
                                <label class="form-check-label" for="">   Married, but withhold at higher single rate </label>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Are you a resident of New York City?</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="" />
                                <label class="form-check-label" for=""> Yes</label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="" />
                                <label class="form-check-label" for="">  No </label>
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Are you a resident of Yonkers?</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="" />
                                <label class="form-check-label" for=""> Yes </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="" />
                                <label class="form-check-label" for="">  No </label>
                              </div>
                        </div>
                    </div>
                    <b>Complete the worksheet on page 3 before making any entries. </b>
                    
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">1 Total number of allowances you are claiming for New York State and Yonkers, if applicable (from line 17)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">2 Total number of allowances for New York City (from line 28)</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <b>Use lines 3, 4, and 5 below to have additional withholding per pay period under special agreement with your employer.</b>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">New York State Amount</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">New York City Amount</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Yonkers Amount</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>I certify that I am entitled to the number of withholding allowances claimed on this certi?cate</p>
                   
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
                    <p><b>Penalty </b>– A penalty of $500 may be imposed for any false statement you make that decreases the amount of money you have withheld from your wages. You may also be subject to criminal penalties. </p>
                    <b>Employee: detach this page and give it to your employer; keep a copy for your records.</b>
                    <hr class="mt-4">
                    <p><b>Employer: Keep this certi?cate with your records.</b> <br>
                        Mark an X in box A and/or box B to indicate why you are sending a copy of this form to New York State (see instructions): </p>

                        <div class="row">
                            <div class="mb-0 col-lg-12">
                                <label for="city" class="form-label fw-bold">A Employee claimed more than 14 exemption allowances for NYS</label>
                            </div>
                            <div class="mb-3 col-lg-6">
                               <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> </label>
                               </div>
                               
                            </div>
                        </div>    
                        <div class="row">
                            <div class="mb-0 col-lg-12">
                                <label for="city" class="form-label fw-bold">B Employee is a new hire or a rehire</label>
                            </div>
                            <div class="mb-3 col-lg-6">
                               <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> </label>
                               </div>
                               
                            </div>
                        </div> 
                        
                        <div class="row">
                            <div class="mb-0 col-lg-12">
                                <label for="city" class="form-label fw-bold">First date employee performed services for pay (mm-dd-yyyy) (see instr.):</label>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-0 col-lg-12">
                                <label for="city" class="form-label fw-bold">Are dependent health insurance bene?ts available for this employee?</label>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="" id="" />
                                    <label class="form-check-label" for=""> Yes </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="" id="" />
                                    <label class="form-check-label" for="">  No </label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-0 col-lg-12">
                                <label for="city" class="form-label fw-bold">If yes, enter the date the employee qualifies (mm-dd-yyyy)</label>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>
                        </div>
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
                                <label for="city" class="form-label fw-bold">Complete Address</label>
                            </div>
                            <div class="mb-3 col-lg-12">
                                <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-0 col-lg-12">
                                <label for="city" class="form-label fw-bold">Employer identi?cation number</label>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                            </div>
                        </div>
                        <h5 class="text-center">Instructions</h5>
                        <p><b>Changes effective for 2016</b> <br>
                            Form IT-2104 has been revised for tax year 2016. The worksheet on page 3 and the charts beginning on page 4, used to compute withholding allowances or to enter an additional dollar amount on line(s) 3, 4, or 5, have been revised. If you previously ?led a Form IT-2104 and used the worksheet or charts, you should complete a new 2016 Form IT-2104 and give it to your employer.</p>
                        <p><b>Who should ?le this form</b> <br>
                            This certi?cate, Form IT-2104, is completed by an employee and given to the employer to instruct the employer how much New York State (and New York City and Yonkers) tax to withhold from the employee’s pay. The more allowances claimed, the lower the amount of tax withheld.</p>
                        <p>If you do not ?le Form IT-2104, your employer may use the same number of allowances you claimed on federal Form W-4. Due to differences in tax law, this may result in the wrong amount of tax withheld for New York State, New York City, and Yonkers. Complete Form IT-2104 each year and ?le it with your employer if the number of allowances you may claim is different from federal form W-4 or has changed. Common reasons for completing a new Form IT-2104 each year include the following:</p>
                        <ul class="mx-5">
                            <li>You started a new job.</li>
                            <li>You are no longer a dependent.</li>
                            <li>Your individual circumstances may have changed (for example, you were married or have an additional child).</li>
                            <li>You moved into or out of NYC or Yonkers.</li>
                            <li>You itemize your deductions on your personal income tax return.</li>
                            <li>You claim allowances for New York State credits.</li>
                            <li>You owed tax or received a large refund when you ?led your personal income tax return for the past year.</li>
                            <li>Your wages have increased and you expect to earn $106,950 or more during the tax year.</li>
                            <li>The total income of you and your spouse has increased to $106,950 or more for the tax year.</li>
                            <li>You have signi?cantly more or less income from other sources or from another job.</li>
                            <li>You no longer qualify for exemption from withholding</li>
                            <li>You have been advised by the Internal Revenue Service that you are entitled to fewer allowances than claimed on your original federal Form W-4, and the disallowed allowances were claimed on your original Form IT-2104.</li>
                        </ul>
                        <p><b>Exemption from withholding</b> <br>
                            You cannot use Form IT-2104 to claim exemption from withholding. To claim exemption from income tax withholding, you must ?le Form IT-2104-E, Certi?cate of Exemption from Withholding, with your employer. You must ?le a new certi?cate each year that you qualify for exemption. This exemption from withholding is allowable only if you had no New York income tax liability in the prior year, you expect none in the current year, and you are over 65 years of age, under 18, or a full-time student under 25. You may also claim exemption from withholding if you are a military spouse and meet the conditions set forth under the Servicemembers Civil Relief Act as amended by the Military Spouses Residency Relief Act. If you are a dependent who is under 18 or a full-time student, you may owe tax if your income is more than $3,100. </p>
                        <p><b>Withholding allowances</b> <br>
                            You may not claim a withholding allowance for yourself or, if married, your spouse. Claim the number of withholding allowances you compute in Part 1 and Part 3 on page 3 of this form. If you want more tax withheld, you may claim fewer allowances. If you claim more than 14 allowances, your employer must send a copy of your Form IT-2104 to the New York State Tax Department. You may then be asked to verify your allowances. If you arrive at negative allowances (less than zero) on lines 1 or 2 and your employer cannot accommodate negative allowances, enter 0 and see Additional dollar amount(s) below. </p>
                        <p><b>Income from sources other than wages </b>– If you have more than $1,000 of income from sources other than wages (such as interest, dividends, or alimony received), reduce the number of allowances claimed on line 1 and line 2 (if applicable) of the IT-2104 certi?cate by one for each $1,000 of nonwage income. If you arrive at negative allowances (less than zero), see Withholding allowances above. You may also consider ?ling estimated tax, especially if you have signi?cant amounts of nonwage income. Estimated tax requires that payments be made by the employee directly to the Tax Department on a quarterly basis. For more information, see the instructions for Form IT-2105, Estimated Tax Payment Voucher for Individuals, or see Need help? on page 6. </p>
                        <p><b>Other credits </b>(Worksheet line 13) – If you will be eligible to claim any credits other than the credits listed in the worksheet, such as an investment tax credit, you may claim additional allowances. </p>
                        <p>Find your ?ling status and your New York adjusted gross income (NYAGI) in the chart below, and divide the amount of the expected credit by the number indicated. Enter the result (rounded to the nearest whole number) on line 13.</p>
                        
                        <b>Table</b>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle">
                                <thead class="table-secondary">
    
                                    <tr>
                                        <th>Single and NYAGI is</th>
                                        <th>Head of household   and NYAGI is</th>
                                        <th>Married and NYAGI is</th>
                                        <th> Divide amount of   expected credit by: </th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr class="">
                                        <td scope="row"><input type="text" class="w-100" value="Less than $214,000"></td>
                                        <td><input type="text" class="w-100" value="Less than $267,500"></td>
                                        <td><input type="text" class="w-100" value="Less than $321,050"></td>
                                        <td><input type="text" class="w-100" value="66"></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row"><input type="text" class="w-100" value="Between $214,000 and $1,070,350"></td>
                                        <td><input type="text" class="w-100" value="Between $267,500 and $1,605,650"></td>
                                        <td><input type="text" class="w-100" value="Between $321,050 and $2,140,900"></td>
                                        <td><input type="text" class="w-100" value="68"></td>
                                    </tr>
                                    <tr class="">
                                        <td scope="row"><input type="text" class="w-100" value="Over $1,070,350"></td>
                                        <td><input type="text" class="w-100" value="Over $1,605,650"></td>
                                        <td><input type="text" class="w-100" value="Over $2,140,900"></td>
                                        <td><input type="text" class="w-100" value="88"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <p><b>Example:</b> You are married and expect your New York adjusted gross income to be less than $321,050. In addition, you expect to receive a ?ow-through of an investment tax credit from the S corporation of which you are a shareholder. The investment tax credit will be $160. Divide the expected credit by 66. 160/66 = 2.4242. The additional withholding allowance(s) would be 2. Enter 2 on line 13.</p>
                        <p><b>Married couples with both spouses working</b> – If you and your spouse both work, you should each ?le a separate IT-2104 certi?cate with your respective employers. Your withholding will better match your total tax if the higher wage-earning spouse claims all of the couple’s allowances and the lower wage-earning spouse claims zero allowances. Do not claim more total allowances than you are entitled to. If your combined wages are:</p>
                        <ul class="mx-3">
                            <li>less than $106,950, you should each mark an X in the box Married, but withhold at higher single rate on the certi?cate front, and divide the total number of allowances that you compute on line 17 and line 28 (if applicable) between you and your working spouse.</li>
                            <li>$106,950 or more, use the chart(s) in Part 4 and enter the additional withholding dollar amount on line 3. </li>
                        </ul>
                        <p><b>Taxpayers with more than one job </b>– If you have more than one job, ?le a separate IT-2104 certi?cate with each of your employers. Be sure to claim only the total number of allowances that you are entitled to. Your withholding will better match your total tax if you claim all of your allowances at your higher-paying job and zero allowances at the lower-paying job. In addition, to make sure that you have enough tax withheld, if you are a single taxpayer or head of household with two or more jobs, and your combined wages from all jobs are under $106,950, reduce the number of allowances by seven on line 1 and line 2 (if applicable) on the certi?cate you ?le with your higher-paying job employer. If you arrive at negative allowances (less than zero), see Withholding allowances above. </p>
                        <p>If you are a single or a head of household taxpayer, and your combined wages from all of your jobs are between $106,950 and $2,248,076, use the chart(s) in Part 5 and enter the additional withholding dollar amount from the chart on line 3.</p>
                        <p>If you are a married taxpayer, and your combined wages from all of your jobs are $106,950 or more, use the chart(s) in Part 4 and enter the additional withholding dollar amount from the chart on line 3 (Substitute the words Higher-paying job for Higher earner’s wages within the chart).</p>
                        <p>Dependents – If you are a dependent of another taxpayer and expect your income to exceed $3,100, you should reduce your withholding allowances by one for each $1,000 of income over $2,500. This will ensure that your employer withholds enough tax. </p>
                        <p>Following the above instructions will help to ensure that you will not owe additional tax when you ?le your return. </p>
                        <p><b>Heads of households with only one job</b> – If you will use the head-of-household ?ling status on your state income tax return, mark the Single or Head of household box on the front of the certi?cate. If you have only one job, you may also wish to claim two additional withholding allowances on line 14.</p>
                        <p><b>Additional dollar amount(s)</b> <br>
                            You may ask your employer to withhold an additional dollar amount each pay period by completing lines 3, 4, and 5 on Form IT-2104. In most instances, if you compute a negative number of allowances and your employer cannot accommodate a negative number, for each negative allowance claimed you should have an additional $1.85 of tax withheld per week for New York State withholding on line 3, and an additional $0.80 of tax withheld per week for New York City withholding on line 4. Yonkers residents should use 16.75% (.1675) of the New York State amount for additional withholding for Yonkers on line 5. </p>
                        <p>Note: If you are requesting your employer to withhold an additional dollar amount on lines 3, 4, or 5 of this allowance certi?cate, the additional dollar amount, as determined by these instructions or by using the chart(s) in Part 4 or Part 5, is accurate for a weekly payroll. Therefore, if you are not paid on a weekly basis, you will need to adjust the dollar amount(s) that you compute. For example, if you are paid biweekly, you must double the dollar amount(s) computed.</p>
                        <p><b>Avoid underwithholding</b> <br>
                            Form IT-2104, together with your employer’s withholding tables, is designed to ensure that the correct amount of tax is withheld from your pay. If you fail to have enough tax withheld during the entire year, you may owe a large tax liability when you ?le your return. The Tax Department must assess interest and may impose penalties in certain situations in addition to the tax liability. Even if you do not ?le a return, we may determine that you owe personal income tax, and we may assess interest and penalties on the amount of tax that you should have paid during the year.</p>
                        <p><b>Employers</b> <br>
                            Box A – If you are required to submit a copy of an employee’s Form IT-2104 to the Tax Department because the employee claimed more than 14 allowances, mark an X in box A and send a copy of Form IT-2104 to: NYS Tax Department, Income Tax Audit Administrator, Withholding Certi?cate Coordinator, W A Harriman Campus, Albany NY 12227-0865. If the employee is also a new hire or rehire, see Box B instructions. See Publication 55, Designated Private Delivery Services, if not using U.S. Mail.</p>
                        <p>Due dates for sending certi?cates received from employees claiming more than 14 allowances are:</p>
                        <div
                            class="table-responsive"
                        >
                            <table
                                class="table table-borderless align-middle"
                            >
                                <thead class="">
                                    <tr>
                                        <th>Quarter</th>
                                        <th>Due date</th>
                                        <th>Quarter</th>
                                        <th>Due date </th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td scope="row">January – March </td>
                                        <td> April 30</td>
                                        <td>July – September </td>
                                        <td>October 31 </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">April – June  </td>
                                        <td>July 31 </td>
                                        <td> October – December </td>
                                        <td> October – December </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    
                                </tfoot>
                            </table>
                        </div>
                        <p><b>Box B </b>– If you are submitting a copy of this form to comply with New York State’s New Hire Reporting Program, mark an X in box B. Enter the ?rst day any services are performed for which the employee will be paid wages, commissions, tips and any other type of compensation. For services based solely on commissions, this is the ?rst day an employee working for commissions is eligible to earn commissions. Also, mark an X in the Yes or No box indicating if dependent health insurance bene?ts are available to this employee. If Yes, enter the date the employee quali?es for coverage. Mail the completed form, within 20 days of hiring, to: <b>NYS Tax Department, New Hire Noti?cation, PO Box 15119, Albany NY 12212-5119.</b> To report newly-hired or rehired employees online instead of submitting this form, go to www.nynewhire.com.</p>
                        
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
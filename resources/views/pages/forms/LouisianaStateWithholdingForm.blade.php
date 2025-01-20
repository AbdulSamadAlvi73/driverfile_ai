<!doctype html>
<html lang="en">

<head>
    <title>Louisiana State Withholding Form</title>
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
                <h4 class="text-light">Employee Withholding Exemption Certificate (L-4)</h4>
                <h4 class="text-light">Louisiana Department of Revenue </h4>
            </div>
            <div class="mt-4">
                <p><b>Purpose:</b> Complete form L-4 so that your employer can withhold the correct amount of state income tax from your salary.</p>
            </div>
            <p><b>Instructions:</b> Employees who are subject to state withholding should complete the personal allowances worksheet indicating the number of withholding personal exemptions in Block A and the number of dependency credits in Block B.</p>
            <ul>
                <li>Employees must file a new withholding exemption certificate within 10 days if the number of their exemptions decreases, except if the change is the result of the death of a spouse or a dependent.</li>
                <li>Employees may file a new certificate any time the number of their exemptions increases.</li>
                <li>Line 8 should be used to increase or decrease the tax withheld for each pay period. Decreases should be indicated as a negative amount.</li>
            </ul>
            <p>Penalties will be imposed for willfully supplying false information or willful failure to supply information that would reduce the withholding exemption.</p>
            <p>This form must be filed with your employer. If an employee fails to complete this withholding exemption certificate, the employer must withhold Louisiana income tax from the employee’s wages without exemption.</p>
            <p><b>Note to Employer:</b> Keep this certificate with your records. If you believe that an employee has improperly claimed too many exemptions or dependency credits, please forward a copy of the employee’s signed L-4 form with an explanation as to why you believe that the employee improperly completed this form and any other supporting documentation. The information should be sent to the Louisiana Department of Revenue, Criminal Investigations Division, PO Box 2389, Baton Rouge, LA 70821-2389</p>
            <hr>
            <b>Block A</b>
            <ul>
                <li>Enter  "0"  to  claim  neither  yourself  nor  your  spouse,  and  check  "No exemptions or dependents claimed"  under  number  3  below.  You  may  enter  "0"  if  you  are  married,  and  have  a  working  spouse  or  more  than  one  job  to  avoid  having  too  little  tax  withheld.</li>
                <li>Enter  "1"  to  claim  yourself,  and  check  "Single"  under  number  3  below.  if  you  did  not  claim  this  exemption  in  connection  with  other  employment,  or  if  your  spouse  has  not  claimed  your  exemption.  Enter  "1"  to  claim  one  personal  exemption  if  you  will  file  as  head  of  household,  and  check  "Single"  under  number  3  below.</li>
                <li>Enter  "2"  to  claim  yourself  and  your  spouse,  and  check  "Married"  under  number  3  below.</li>
            </ul>
            <div class="row">
                <div class="mb-0 col-lg-12">
                    <label for="city" class="form-label fw-bold">A</label>
                </div>
                <div class="mb-3 col-lg-6">
                    <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                </div>
            </div>
            <b>Block B</b>
            <ul>
                <li>Enter the number of dependents, not including yourself or your spouse, whom you will claim on your tax return. If no dependents are claimed, enter "0."</li>
            </ul>
            <div class="row">
                <div class="mb-0 col-lg-12">
                    <label for="city" class="form-label fw-bold">B</label>
                </div>
                <div class="mb-3 col-lg-6">
                    <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                </div>
            </div>
            <h5 class="text-center">Employee’s Withholding Allowance Certificate</h5>
                  
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
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label fw-bold">SSN</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    
       
                <div class="row">
                    <div class="mb-3 col-12 col-lg-12">
                        <label for="city" class="form-label fw-bold">Select One</label>
                        <div class="">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="" id="" />
                            <label class="form-check-label" for=""> No exemptions or dependents claimed </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="" id="" />
                            <label class="form-check-label" for=""> Single </label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="" id="" />
                            <label class="form-check-label" for=""> Married </label>
                        </div>
                    </div>
                    </div>
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
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Total number of exemptions claimed in Block A</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Total number of exemptions claimed in Block B</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Increase or decrease in the amount to be withheld each pay period. Decreases should be indicated as a negative amount</label>
                    </div>
                    <div class="mb-3 col-lg-6">
                        <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                    </div>
                </div>
                <p>
                    I declare under the penalties imposed for filing false reports that the number of exemptions and dependency credits claimed on this certificate do not exceed the number to which I am entitled.</p>
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

                    <hr>
                    <b class="text-center">The following is to be completed by employer. </b>
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label fw-bold">Company name</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold"> Address</label>
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
                    <div class="mb-0 col-lg-12">
                        <label for="city" class="form-label fw-bold">Employer’s state withholding account number</label>
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
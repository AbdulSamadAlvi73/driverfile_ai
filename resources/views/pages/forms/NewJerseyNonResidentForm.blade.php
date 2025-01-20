<!doctype html>
<html lang="en">
<head>
    <title>New Jersey Non-Resident Form</title>
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
                <h4 class="text-light p-3">STATE OF NEW JERSEY</h4>
            </div>
            <p class="mt-3 text-center">Department of the Treasury <br>
                Division of Taxation <br>
                PO Box 269 <br>
                Trenton, NJ  08695-0269</p>
                <h5 class="text-center">EMPLOYEE’S CERTIFICATE OF NONRESIDENCE IN NEW JERSEY</h5>
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
                    <hr>
                    <h5 class="text-center">PENNSYLVANIA RESIDENTS</h5>
                    <p>I hereby declare, under penalties of perjury, that I am a resident of the State of Pennsylvania and that, pursuant to a reciprocal agreement existing between that State and the State of New Jersey, I claim exemption from withholding of New Jersey Gross Income Tax on compensation paid to me in the State of New Jersey and authorize my employer to withhold Pennsylvania Personal Income Taxes on my behalf.</p>
                    <p><b>Note:</b> If you change your residence from Pennsylvania to any other state, you must notify your employer within 10 days.</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="state" class="form-label fw-bold">Date</label>
                            <input type="date" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p class="fw-bold">Signature</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">
    
                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>
                    <b class="text-center">MILITARY SPOUSES</b>
                    <p>Under the Servicemember Civil Relief Act (SCRA), as amended by the Military Spouses Residency Relief Act, you may be exempt from New Jersey income tax on your wages if (i) your spouse is a member of the armed forces present in New Jersey in compliance with military orders; (ii) you are present in New Jersey solely to be with your spouse; and (iii) you maintain your domicile in another state. If you claim exemption under the SCRA, attach a copy of your spousal military identification card to Form NJ-165.</p>
                   <p>I certify that I am not subject to New Jersey withholding. I meet the conditions set forth under the Servicemember Civil Relief Act, as amended by the Military Spouses Residency Relief Act.</p>
                   <div class="row">
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="state" class="form-label fw-bold">Date</label>
                        <input type="date" name="state" id="state" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                </div>
                <p class="fw-bold">Signature</p>
                <div class="row">
                    <div class="mb-3 col-12 col-lg-6">
                        <div class="card" style="height: 150px; widht:150px;">

                        </div>
                        <p class="fw-bold text-primary">Help's</p>
                    </div>
                </div>
                <b class="text-center">NEW JERSEY EMPLOYER: </b>
                <p>You are required to have a copy of this form on file for each employee receiving compensation paid in New Jersey and who is a resident of Pennsylvania and claims exemption from withholding of New Jersey Gross Income Tax under the reciprocal agreement entered into between New Jersey and Pennsylvania or who claims exemption from withholding of New Jersey Gross Income Tax under the Servicemember Civil Relief Act, as amended by the Military Spouses Residence Relief Act.  <b>Do not forward this Form to the Division of Taxation.</b></p>
                <b class="text-center">MAY BE REPRODUCED</b>                  
                <b class="text-center">DO NOT FORWARD THIS FORM TO THE DIVISION OF TAXATION</b>
              
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
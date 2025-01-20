<!doctype html>
<html lang="en">
<head>
    <title>Office of the Sheriff of Washington County</title>
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
                <h4 class="text-light p-2">Office of the Sheriff of Washington County</h4>
            </div>
            <p class="mt-3">Post Office Drawer 30 - Sandersville, Georgia 31082 (478) 552-4795 - Fax (478) 552-5848</p>
            <p>$10.00 FEE __________</p>
            <div class="text-center">
                <h4 class="">CRIMINAL HISTORY RECORD INFORMATION CONSENT/INQUIRY FORM</h4>
            </div>
            <p>I hereby authorize    to conduct an inquiry for the purpose(s) listed below and receive any Georgia and/or national criminal history record information, as authorized by State and Federal law.</p>
            <p>Company name</p>
            <form class="d-flex">
                <div class="row col-12">
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Full Name: *</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Address: *</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Sex *</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Race *</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Date of Birth</label>
                        <input type="date" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">SSN</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">______  This authorization is valid for</label>
                        </div>
                        <div class="mb-1 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                        <small class="mb-3">days from date of signature.</small>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">______  I,</label>
                        </div>
                        <div class="mb-1 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                        <small class="mb-3">give consent to the above-named entity to perform periodic criminal history background checks for the duration of my employment.</small>
                    </div>
                    <hr>
                    <p class="fw-bold">Employee's Signature (Form is not valid unless you sign it.**</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">
    
                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>
                                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Date</label>
                            <input type="date" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>______________________________________ <br>
                        Signature of Employment Release Agency,</p>
                        <p>___________________________ <br>
                            Title</p>
                            <hr>
                            <h5 class="text-center">*** OFFICIAL USE ONLY — DO NOT FILL ***</h5>
                    <p>Date of Inquiry: __________  Time of Inquiry: ___________  Operator Initials: __________</p>
                    <p>Purpose Code Used:  (Check all that apply)</p>
                    <p>    ____  E — Employment <br>
                        ____  M — Working with Mentally Disabled <br>
                        ____  N — Working with Elderly <br>
                        ____  W — Working with Children</p>
                        <p>The inquiry resulted in the following:  (Check all that apply)</p>
                    <p>    ____  No Criminal Record Available <br>
                        ____  Criminal Record (Attached / Released) <br>
                        ____  No NCIC/GCIC Warrant <br>
                        ____  Possible NCIC/GCIC Warrant (List Wanting Agency Below)</p>
                    <p>_______________________________ <br>
                        Wanting Agency Name</p>
                    <p>________________________________ <br>
                    Wanting Agency Telephone</p>
                    <p>________________________________ <br>
                    Agency Designee Signature</p>
                    <p>________________________________ <br>
                    Date</p>
                    
                    <a name="" id="" class="btn btn-danger float-end col-2 m-2" href="#" role="button">SUBMIT</a>
                    
                    
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
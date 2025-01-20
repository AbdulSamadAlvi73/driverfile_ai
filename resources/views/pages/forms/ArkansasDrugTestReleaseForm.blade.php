<!doctype html>
<html lang="en">

<head>
    <title>Arkansas Drug Test Release Form</title>
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
            <div class="text-left">
            <div class="">
                <h5 class="p-2">STATE OF ARKANSAS</h5>
                <h4 class="p-2">Department of Finance and Administration</h4>
                <h5 class="p-2">OFFICE OF DRIVER SERVICES</h5>
            </div>
        </div>
            <p class="p-2">
                <span class="fw-bold">Arkansas Commercial Driver and Alcohol Testing Database</span> <br>
                Ragland Building, Room 1130 <br>
                Post Office Box 1272 <br>
                Little Rock, Arkansas 72203 <br>
                Phone: (501) 682-7207 <br>
                Fax: (501) 682-2075 <br>
                http://www.arkansas.gov/drugtest</p>


                <hr>
                 
            <h4 class="text-center p-2 ">RELEASE OF RECORD FOR ALCOHOL AND DRUG TEST RESULTS</h4>


            <form class="d-flex">
                <div class="row col-12">
                    <div class="mb-3 col-lg-12 col-12 d-flex flex-column flex-sm-row align-items-center">
                        <span class="me-2">I,</span>
                        <input type="text" name="firstname" id="firstname" class="form-control mb-2 mb-sm-0" placeholder="" aria-describedby="helpId">
                        <span class="ms-2 mb-2 mb-sm-0">do hereby authorize the Office of Driver Services to release my record of alcohol and drug test results to:</span>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="Company name" class="form-label fw-bold">Company name</label>
                            <input type="text" name="Company name" id="cCompany nameity" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="Address" class="form-label fw-bold">Address</label>
                            <input type="text" name="Address" id="Address" class="form-control" placeholder=""
                                aria-describedby="helpId" />
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
                            <label for="PayrollManagerSignature" class="form-label fw-bold">Payroll Manager
                                Signature:</label>
                            <div class="card" style="height: 150px; widht:150px;">

                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="date" class="form-label fw-bold">Date</label>
                            <input type="date" name="date" id="date" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="zip" class="form-label fw-bold">Zip</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="dob" class="form-label fw-bold">Date of birth</label>
                            <input type="date" name="dob" id="dob" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <p>This Consent is only valid for pre-employment purposes as required by Arkansas Code Annotated 27-23-207.</p>
                    
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
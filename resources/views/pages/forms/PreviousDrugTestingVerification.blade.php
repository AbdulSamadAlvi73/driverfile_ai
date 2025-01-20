<!doctype html>
<html lang="en">

<head>
    <title>PREVIOUS DRUG TESTING VERIFICATION</title>
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
                <h4 class="text-light p-2">PREVIOUS DRUG TESTING VERIFICATION</h4>
            </div>
            <hr>
            <h4>MOTOR CARRIER SECTION</h4>
            <p>The motor carrier must ask the driver whether or not he has tested positive, or refused to be tested, on any pre-employment drug test administered by any motor carrier to which the driver applied for, but did not obtain, safety-sensitive transportation work covered by the U.S. DOT drug testing rules during the past 2 years.</p>
            <p>If the driver admits that he tested positive, or refused to be tested, the motor carrier must not use the driver to perform any safety-sensitive function, until and unless the driver documents successful completion of the return-to-duty process.</p>
            <hr>
            <h4>DRIVER SECTION</h4>
            <form class="d-flex">
                <div class="row col-12 mt-2">
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">In the past 2 years from today's date, have you refused to submit to any U.S. DOT mandated pre-employment drug test? *</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> 
                                    Yes </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> No </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">In the past 2 years from today's date, have you tested positive on any U.S. DOT mandated pre-employment drug test? *</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> 
                                    Yes </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> No </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <p class="fw-bold">Signature *</p>
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
                    <h4>DISPOSITION OF DRIVER IF ANSWERED YES</h4>
                    <p>If the driver answers yes to either of these questions, then the motor carrier must NOT use him to perform ANY safety-sensitive functions (as defined in §382.107) until the driver submits documentation of successful completion of the return-to-duty process (as defined in §40.281 through §40.313).</p>
                    <p>_____ NOT HIRED AND REFERRED TO A SUBSTANCE ABUSE PROFESSIONAL</p>
                    <p>_____ HIRED AND REFERRED TO A SUBSTANCE ABUSE PROFESSIONAL TO BEGIN THE RETURN-TO-DUTY PROCESS.</p>
                    <p>_____ HIRED AND DRIVER SUBMITTED DOCUMENTATION OF SUCCESSFUL COMPLETION OF THE RETURN-TO-DUTY PROCESS. (ATTACH PAPERWORK TO THIS FORM).</p>
                    <p>_____ OTHER. (Please explain)</p>
                    <hr>
                    <p>Designated Employer Representative's Signature: <br> 



                        _______________________________________</p>
                    <p>Date: <br>

                        _______________________________________</p>
                    <p class="text-center">File this in the Driver's Drug and Alcohol Testing File</p>
                    
                
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
<!doctype html>
<html lang="en">

<head>
    <title>FMCSR Clearinghouse Limited Query Consent</title>
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
                <h4 class="mt-3 text-light p-2">Consent for Limited Queries of the FMCSA Drug and Alcohol Clearinghouse</h4>
            </div>
            <hr>

            <p>I hereby authorize the motor carrier listed below to conduct limited annual queries of the FMCSA’s Commercial Driver’s License Drug and Alcohol Clearinghouse (Clearinghouse) to determine whether drug or alcohol violation information about me exists in the Clearinghouse. This consent is valid from the date shown below until my employment with the motor carrier listed below ceases or until I am no longer subject to the drug and alcohol testing rules in 49 CFR part 382 for the motor carrier listed below.</p>
            <p>I understand that if the limited query conducted by this motor carrier indicates that drug or alcohol violation information about me exists in the Clearinghouse, I must grant electronic consent within 24 hours, via the Clearinghouse website, for the motor carrier to obtain my full Clearinghouse record.</p>
            <p>I understand that if I refuse to provide consent to conduct annual limited queries of the Clearinghouse, the motor carrier must prohibit me from performing safety-sensitive functions, including driving a commercial motor vehicle, as required by FMCSA’s drug and alcohol program regulations.</p>
            <p>I further understand that if I refuse to grant electronic consent for my full Clearinghouse record within 24 hrs of a completed limited query which reveals that drug or alcohol violation information about me exist, the motor carrier must remove me from performing safety-sensitive functions. </p>
            <form class="d-flex">
                <div class="row col-12">
                    <div class="mb-3 col-12 col-lg-12">
                        <label for="snn" class="form-label fw-bold">Company name</label>
                        <input type="text" name="snn" id="snn" class="form-control" placeholder=""
                            aria-describedby="helpId" />
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
                    <p class="">I certify that I have made the election marked above. </p>
                    <p class="fw-bold">Employee's Signature</p>
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
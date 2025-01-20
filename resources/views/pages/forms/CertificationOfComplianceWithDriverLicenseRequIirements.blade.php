<!doctype html>
<html lang="en">

<head>
    <title>CERTIFICATION OF COMPLIANCE WITH DRIVER LICENSE REQUIREMENTS</title>
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
            <div class="text-center p-1"  style="background-color: #6DB4F5;">
                <h4 class="text-light p-1">Motor Vehicle Driver's</h4>
                <h3 class="text-light p-1">CERTIFICATION OF COMPLIANCE WITH DRIVER LICENSE REQUIREMENTS</h3>
            </div>
            <hr>

            <p>MOTOR CARRIER INSTRUCTIONS: The requirements in Part 383 apply to every driver who operates in
                intrastate, interstate, or foreign commerce and operates a vehicle weighing 26,001 pounds or more, can
                transport more than 15 people, or transports hazardous materials that require placarding.</p>

            <p>The requirements in Part 391 apply to every driver who operates in interstate commerce and operates a
                vehicle weighing 10,001 pounds or more, can transport more than 15 people, or transports hazardous
                materials that require placarding.</p>

            <p>DRIVER REQUIREMENTS: Parts 383 and 391 of the Federal Motor Carrier Safety Regulations contain some
                requirements that you as a driver must comply with. They are as follows:</p>

            <ol>
                <li>POSSESS ONLY ONE LICENSE: You, as a commercial vehicle driver, may not possess more than one motor
                    vehicle operator's license. <br> <br>
                    If you have more than one license, keep the license from your state of residence and return the
                    additional licenses to the states that issued them. Destroying a license does not close the record
                    in the state that issued it; you must notify the state. If a multiple license has been lost, stolen,
                    or destroyed, close your record by notifying the state of issuance that you no longer want to be
                    licensed be that state.
                </li>
                <li>NOTIFICATION OF LICENSE SUSPENSION, REVOCATION OR CANCELLATION: Sections 391.15(b)(2) and 383.33 of
                    the Federal Motor Carrier Safety Regulations require that you notify your employer the NEXT BUSINESS
                    DAY of any revocation or suspension of your driver's license. In addition, Section 383.31 requires
                    that any time you violate a state or local traffic law (other than parking), you must report it
                    within 30 days to: 1) your employing motor carrier, and 2) the state that issued your license (If
                    the violation occurs in a state other than the one which issued your license). The notification to
                    both the employer and state must be in writing.</li>
            </ol>
            <p>The following license is the only one I possess:</p>


            <div class="mb-3 col-12">
                <label for="completeaddress" class="form-label fw-bold">License Number</label>
                <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                    aria-describedby="helpId" />
            </div>


            <div class="mb-3 col-12">
                <label for="completeaddress" class="form-label fw-bold">Issuing State</label>
                <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                    aria-describedby="helpId" />
            </div>
            <div class="mb-3 col-12">
                <label for="completeaddress" class="form-label fw-bold">CDL Expiration Date</label>
                <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                    aria-describedby="helpId" />
            </div>


            <p>DRIVER CERTIFICATION: I certify that I have read and understood the above requirements.</p>


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
                    <p class="fw-bold">Signature</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">

                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Date</label>
                        <input type="date" name="completeaddress" id="completeaddress" class="form-control"
                            placeholder="" aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Notes</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control"
                            placeholder="" aria-describedby="helpId" />
                    </div>


                    <hr>

                    <div class="text-center">

                        (This form is not required for DOT compliance)
                        <br> <br>
                        ORIGINAL - MAY BE RETAINED IN PERMANENT FILE
                    </div>
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
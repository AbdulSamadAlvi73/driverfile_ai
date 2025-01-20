<!doctype html>
<html lang="en">

<head>
    <title>Fedex OP-103 Certificate of Violations</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/signature_pad@2.3.3/dist/signature-pad.css">

</head>

<body>
    <header>
    @include('pages.forms.partials.header')
        
    </header>
   <main class="container-fluid" style="width: 80%;">
        <div class="card mx-sm-2 mx-md-5 my-sm-2 my-md-5 p-3" style="background-color: #FCFCFC"> 
            <div class="text-center p-3" style="background-color: #6DB4F5;">
                <h4 class="text-light p-2">Certification of Violations</h4>
            </div>
            <hr>
            <p class="h3">OP-103</p>
            <p class="h3">Last Update: 11 January 2016</p>
            <p class="fw-bold">DRIVER COMPLETES THIS SECTION:</p>
            <form class="d-flex">
                <div class="row col-12 mt-4">
    
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Name: *</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">STATION NAME (Ex: PITT and/or 152)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">STATUS (Check all that apply)</label>
                            <div class="card p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="" />
                                    <label class="form-check-label" for=""> P&D </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="" />
                                    <label class="form-check-label" for=""> Linehaul </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="" />
                                    <label class="form-check-label" for=""> Temporary Agency </label>
                                </div>
                        </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">FedEx ID #</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>


                    <p class="text-center">FALSIFICATION OF THIS FORM CONSTITUTES A BREACH OF THE OPERATING/ISP AGREEMENTS</p>
                    <p>In accordance with Section 391.27 of the Motor Carrier Safety Regulations, each individual operating a commercial motor vehicle is required at least once every 12 months to prepare and furnish the motor carrier with a list of all violations of motor vehicle traffic laws and ordinances (other than violations involving parking) of which the driver has been convicted, or on which they have forfeited bond or collateral during the preceding 12 months, involving commercial and personal driving; however, this annual requirement does not relieve the driver of the requirement found in Section 391.15(b) (2) - which requires the driver to notify the motor carrier within one business day from the date the driver receives the notice - if the driver’s privilege to drive has been suspended or revoked or withdrawn; and Section 383.31, which additionally requires notification within 30 days upon conviction of any traffic violation other than a parking violation.</p>
                    <hr>
                    <p class="fw-bold">DRIVER COMPLETES THIS SECTION:</p>
                    <p>Instructions:</p>
                    <ul class="mx-3">
                        <li>If one or more such violations as described above have occurred in the past 12 months, itemize them in Section (A) below. Attach an additional page if more space is needed.</li>
                        <li>If no such violation has occurred in the past 12 months, certify by placing an X in the appropriate block in Section (B) below.</li>
                    </ul>
                    <p class="fw-bold">A.</p>

                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">1. DATE OF CONVICTION(if convicted)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">OFFENSE</label>
                        <textarea name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId"></textarea>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">LOCATION (City/State/Province)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">TYPE OF VEHICLE</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Commercial </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Private </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">2. DATE OF CONVICTION(if convicted)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">OFFENSE</label>
                        <textarea name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId"></textarea>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">LOCATION (City/State/Province)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">TYPE OF VEHICLE</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Commercial </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Private </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">3. DATE OF CONVICTION(if convicted)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">OFFENSE</label>
                        <textarea name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId"></textarea>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">LOCATION (City/State/Province)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">TYPE OF VEHICLE</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Commercial </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Private </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">4. DATE OF CONVICTION(if convicted)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">OFFENSE</label>
                        <textarea name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId"></textarea>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">LOCATION (City/State/Province)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">TYPE OF VEHICLE</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Commercial </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Private </label>
                            </div>
                        </div>
                        </div>
                    </div>

                    <p class="fw-bold">B.</p>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold"></label>
                            <div class="card p-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="" />
                                    <label class="form-check-label" for=""> 
                                        I hereby certify that I have not been convicted nor forfeited bond or collateral because of any violation occurring in the past 12 months as outlined above.</label>
                                </div>
                        </div>
                        </div>
                    </div>
                    <p class="fw-bold">C.</p>

                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">License Number</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Issue Date *</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Issuing State</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">CDL Type</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">CDL Expiration Date</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p>I hereby certify that the above information is a true and complete list of all traffic violations (other than parking violations), which have occurred in any driving capacity for which I have been convicted or forfeited bond or collateral during the previous 12 months. (Attach an additional page if more space is needed.)</p>


                    <p class="fw-bold">Signature*</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card">
                                <!-- Create a canvas element for the signature pad -->
                                <canvas id="signature-pad" class="signature-pad" width="300" height="150"></canvas>
                            </div>
                            <p class="fw-bold text-primary">Instructions: Use your mouse to sign in the box above.</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Date</label>
                            <input type="date" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>


                    <p class="fw-bold">FOR FEDEX GROUND USE ONLY: MVR must be obtained and reviewed by FedEx Ground management prior to signing and dating the form.</p>
                    <p>I hereby certify that I have reviewed the above driver's DOT Qualification File and the above certification of sections A through C in accordance with part 391.25, 391.11(b)(2), and 391.41(a)(1)(i) of the Federal Motor Carrier Safety Regulations, and have found that on the below date this driver (check box below):</p>
                    <p>[] Meets section 391.15 and the terms of the safety addendum/schedule in the agreement between FedEx Ground and the contracted service provider or third-party temporary staffing agency</p>
                    <p>[] Does not meet the criteria set forth in 391.15 and/or does not meet the terms of the safety addendum/schedule in the agreement between FedEx Ground and the contracted service provider or third-party temporary staffing agency</p>


                    <div class="mt-5">
                        <div class="border-top border-2 border-dark w-md-50 w-lg-30" style="width:30%;">
                        </div>
                        <p>SIGNATURE</p>
                    </div>

                    <div class="mt-5">
                        <div class="border-top border-2 border-dark w-md-50 w-lg-30" style="width:30%;">
                        </div>
                        <p>FEDEX GROUND MANAGER/COORDINATOR PRINT NAME and TITLE</p>
                    </div>

                    <div class="mt-5">
                        <div class="border-top border-2 border-dark w-md-50 w-lg-30" style="width:30%;">
                        </div>
                        <p>DATE</p>
                    </div>
                    <p>* Enter the review date into CDAS. (The date should be one year after the form is signed to reflect the expiration of the review. For example, if the form is signed on xx/xx/00, the date entered into CDAS is xx/xx/01.)
                        FedEx Ground Package System, Inc. * 1000 FedEx Drive * Moon Township, PA 15108</p>


                    <a name="" id="" class="btn btn-danger float-end col-2 m-2" href="#" role="button">SUBMIT</a>
                        
                </div>
            </form>




        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.3"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var canvas = document.getElementById('signature-pad');
            var signaturePad = new SignaturePad(canvas);
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
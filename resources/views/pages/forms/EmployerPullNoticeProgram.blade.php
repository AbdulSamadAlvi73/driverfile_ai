<!doctype html>
<html lang="en">

<head>
    <title>EMPLOYEE’S WITHHOLDING ALLOWANCE CERTIFICATE</title>
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
                <h4 class="text-light p-2">EMPLOYER PULL NOTICE PROGRAM</h4>
                <h4 class="text-light p-2">AUTHORIZATION FOR RELEASE OF DRIVER RECORD INFORMATION</h4>
            </div>
            <hr>
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
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="snn" class="form-label fw-bold">License Number</label>
                        <input type="text" name="snn" id="snn" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p>I hereby authorize the California Department of Motor Vehicles (DMV) to disclose or otherwise make available, my driving record, to my employer,</p>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Company name</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p>I understand that my employer may enroll me in the Employer Pull Notice (EPN) program to receive a driver record report at least once every twelve (12) months or when any subsequent conviction, failure to appear, accident, driver’s license suspension, revocation, or any other action is taken against my driving privilege during my employment.</p>
                    <p>I am not driving in a capacity that requires mandatory enrollment in the EPN program pursuant to California Vehicle Code(CVC) Section 1808.1(k). I understand that enrollment in the EPN program is in an effort to promote driver safety, and that my driver license report will be released to my employer to determine my eligibility as a licensed driver for my employment.</p>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">City</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">County</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">State</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Date*</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
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



                    <hr>


                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Authorized Representative</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Company name</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>

                    <p>I do hereby certify under penalty of perjury under the laws in the State of California, that I am an authorized representative of this company, that the information entered on this document is true and correct, to the best of my knowledge and that I am requesting driver record information on the above individual to verify the information as provided by said individual. This record is to be used by this employer in the normal course of business and as a legitimate business need to verify information relating to a driving position not mandated pursuant to CVC Section 1808.1. The information received will not be used for any unlawful purpose. I understand that if I have provided false information, I may be subject to prosecution for perjury(Penal Code Section 118) and false representation (CVC Section 1808.45). These are punishable by a fine not exceeding five thousand dollars ($5,000) or by imprisonment in the county jail not exceeding one year, or both fine and imprisonment. I understand and acknowledge that any failure to maintain confidentiality is both civilly and criminally punishable pursuant to CVC Sections 1808.45 and 1808.46</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">City of Execution</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">County</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">State</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="zip" class="form-label fw-bold">Date</label>
                            <input type="text" name="zip" id="zip" class="form-control" placeholder=""
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

                    <p>To obtain a driver record on a prospective employee you may submit an INF 1119 form. To add this driver to the EPN Program you must submit the applicable forms: INF 1100, INF 1102, INF 1103, INF 1103A form. You may obtain forms at our website at www.dmv.ca.gov/otherservices, or by calling 916-657-6346.</p>


                    <div class="text-center">
                        THIS FORM MUST BE COMPLETED AND <b> RETAINED AT THE EMPLOYER'S PRINCIPAL PLACE OF BUSINESS</b> AND MADE AVAILABLE UPON REQUEST TO DMV STAFF.
<br>
DO  <b>NOT</b> RETURN THIS FORM TO DMV.
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
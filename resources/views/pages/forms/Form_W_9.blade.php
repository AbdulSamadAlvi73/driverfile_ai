<!doctype html>
<html lang="en">

<head>
    <title>Form W-9</title>
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
                <h4 class="text-light p-2">Form W-9</h4>
            </div>
            <h5 class="text-center mt-3">Request for Taxpayer Identification Number and Certification</h5>
            <p>(Rev. November 2017) <br>
                Department of the Treasury Internal Revenue Service</p>
                <b>Give Form to the requester. Do not send to the IRS.</b>
                <hr>
            <form class="d-flex">
                <div class="row col-12 mt-4">
    
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">1. Name (as shown on your income tax return). Name is required on this line; do not leave this line blank:</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">2. Business name/disregarded entity name, if different from above:</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">3. Check appropriate box for federal tax classification of the person whose name is entered on line 1. Check only one of the following seven boxes:</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> 
                                    Individual/Sole proprietor or single-member LLC </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> C Corporation </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Partnership </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Trust/estate </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for="">Other (see instructions) </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> Limited liability company. </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">If Limited Liability Company please enter the tax classification (C = C corporation, S = S corporation, P = partnership)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p>Note: Check the appropriate box in the line above for the tax classification of the single-member owner. Do not check LLC if the LLC is classified as a single-member LLC that is disregarded from the owner unless the owner of the LLC is another LLC that is not disregarded from the owner for U.S. federal tax purposes. Otherwise, a single-member LLC that is disregarded from the owner should check the appropriate box for the tax classification of its owner.</p>
                    <p>4. Exemtions (codes apply only to certain entities, not individuals; see instructions):</p>

                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Exempt payee code (if any):</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Exemption from FATCA reporting code (if any):</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p>(Applies to accounts maintained outside the U.S.)</p>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">5. Address (number, street, and apt. or suite no.) See instructions:</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">6. City, state, and ZIP code:</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">7. List account number(s) here (optional):</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>

                    <b>Requester's name and address (optional):</b>
                    <p>Company name</p>
                    <p>Complete Address</p>
                    <h5>Part I - Taxpayer Identification Number (TIN)</h5>
                    <p>Enter your TIN in the appropriate box. The TIN provided must match the name given on line 1 to avoid backup withholding. For individuals, this is generally your social security number (SSN). However, for a resident alien, sole proprietor, or disregarded entity, see the instructions for Part I, later. For other entities, it is your employer identification number (EIN). If you do not have a number, see How to get a TIN, later.</p>
                    <p>Note: If the account is in more than one name, see the instructions for line 1. Also see What Name and Number To Give the Requester for guidelines on whose number to enter.</p>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Please enter social security number: (###-##-####)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <b class="text-center">-OR-</b>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Please enter employer identification number: (##-#######)</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>

                    <h5>Part II - Certification</h5>
                    <p>Under penalties of perjury, I certify that:</p>
                    <p>1. The number shown on this form is my correct taxpayer identification number (or I am waiting for a number to be issued to me); and <br>
                        2. I am not subject to backup withholding because: (a) I am exempt from backup withholding, or (b) I have not been notified by the Internal Revenue Service (IRS) that I am subject to backup withholding as a result of a failure to report all interest or dividends, or (c) the IRS has notified me that I am no longer subject to backup withholding; and <br>
                        3. I am a U.S. citizen or other U.S. person (defined below); and <br>
                        4. The FATCA code(s) entered on this form (if any) indicating that I am exempt from FATCA reporting is correct.</p>
                        <p>Certification instructions. You must cross out item 2 above if you have been notified by the IRS that you are currently subject to backup withholding because you have failed to report all interest and dividends on your tax return. For real estate transactions, item 2 does not apply. For mortgage interest paid, acquisition or abandonment of secured property, cancellation of debt, contributions to an individual retirement arrangement (IRA), and generally, payments other than interest and dividends, you are not required to sign the certification, but you must provide your correct TIN.</p>

                        <p class="fw-bold">Signature *</p>
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-6">
                                <div class="card" style="height: 150px; widht:150px;">
    
                                </div>
                                <p class="fw-bold text-primary">Help's</p>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="mb-3 col-12 col-lg-12>
                                <label for="state" class="form-label fw-bold">Date</label>
                                <input type="date" name="state" id="state" class="form-control" placeholder=""
                                    aria-describedby="helpId" />
                            </div>
                        </div>
                    <hr>
                    <b>General Instructions</b>

                    <p>Section references are to the Internal Revenue Code unless otherwise noted.</p>
                    <p>Future developments. For the latest information about developments related to Form W-9 and its instructions, such as legislation enacted after they were published, go to www.irs.gov/FormW9.</p>
                    <b>Purpose of Form</b>
                    <p>An individual or entity (Form W-9 requester) who is required to file an information return with the IRS must obtain your correct taxpayer identification number (TIN) which may be your social security number (SSN), individual taxpayer identification number (ITIN), adoption taxpayer identification number (ATIN), or employer identification number (EIN), to report on an information return the amount paid to you, or other amount reportable on an information return. Examples of information returns include, but are not limited to, the following.</p>
                    <p>- Form 1099-INT (interest earned or paid) <br>
                        - Form 1099-DIV (dividends, including those from stocks or mutual funds) <br>
                        - Form 1099-MISC (various types of income, prizes, awards, or gross proceeds) <br>
                        - Form 1099-B (stock or mutual fund sales and certain other transactions by brokers) <br>
                        - Form 1099-S (proceeds from real estate transactions) <br>
                        - Form 1099-K (merchant card and third party network transactions) <br>
                        - Form 1098 (home mortgage interest), 1098-E (student loan interest), 1098-T (tuition) <br>
                        - Form 1099-C (canceled debt) <br>
                        - Form 1099-A (acquisition or abandonment of secured property)</p>
                        <p>Use Form W-9 only if you are a U.S. person (including a resident alien), to provide your correct TIN.</p>
                        <P> If you do not return Form W-9 to the requester with a TIN, you might be subject to backup withholding. See What is backup withholding, later</P>
                        <P>By signing the filled-out form, you:</P>
                        <P>1. Certify that the TIN you are giving is correct (or you are waiting for a number to be issued), <br>
                            2. Certify that you are not subject to backup withholding, or <br>
                            3. Claim exemption from backup withholding if you are a U.S. exempt payee. If applicable, you are also certifying that as a U.S. person, your allocable share of any partnership income from a U.S. trade or business is not subject to the withholding tax on foreign partners' share of effectively connected income, and <br>
                            4. Certify that FATCA code(s) entered on this form (if any) indicating that you are exempt from the FATCA reporting, is correct. See What is FATCA reporting, later, for further information.</P>
                        <hr>
                        <p>(Rev. November 2017)</p>


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
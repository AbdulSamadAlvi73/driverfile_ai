<!doctype html>
<html lang="en">

<head>
    <title>HireRight Disclosure and Authorization</title>
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
                <h4 class="mt-3 text-light p-2">DISCLOSURE AND AUTHORIZATION REGARDING BACKGROUND INVESTIGATION FOR EMPLOYMENT PURPOSES</h4>
            </div>
            <form class="d-flex mt-3">
                <div class="row col-12">
                    <div class="mb-3 col-12 col-lg-6">
                        <label for="snn" class="form-label fw-bold">Company name</label>
                        <input type="text" name="snn" id="snn" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                </div>
            </form>
            <b class="text-center text-decoration-underline">Disclosure</b>

            <p>The company listed above (the “Company”) may request from a consumer reporting agency and for employment related purposes, a “consumer report(s)” (commonly known as “background reports”) containing background information about you in connection with your employment or application for employment (including independent contractor or volunteer assignments, as applicable).</p>
            <p>HireRight, Inc. (“HireRight”) will prepare or assemble the background reports for the Company.  HireRight is located and can be contacted at 3349 Michelson Drive, Suite 150, Irvine, CA 92612, (800) 400-2761, www.hireright.com.   </p>
            <p>The background report(s) may contain information concerning your character, general reputation, personal characteristics, mode of living, or credit standing.  The types of background information that may be obtained include, but are not limited to: criminal history; litigation history; motor vehicle record and accident history; social security number verification; address and alias history; credit history; verification of your education, employment and earnings history; professional licensing, credential and certification checks; drug/alcohol testing results and history; military service; and other information. </p>
            <b class="text-center text-decoration-underline">Authorization </b>
            <p>I hereby authorize Company to obtain the consumer reports described above about me. </p>
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
                    <p class="fw-bold"> Signature</p>
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
<!doctype html>
<html lang="en">

<head>
    <title>EEO Candidate Voluntary Self-Identification</title>
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
                <h4 class="text-light p-2">EEO Candidate Voluntary Self-Identification</h4>
            </div>
            <div class="mt-4">
            <p>ENZ Transport LLC believes that all persons are entitled to equal employment opportunities and we do not discriminate against our employees, applicants, or job seekers because of race, color, religion, creed, sex, sexual orientation, gender identity or expression, national origin, genetics, age, marital or veteran status, the presence of handicaps or disabilities or any other protected group status as defined by the laws. In order to comply with the laws, we invite you to voluntarily self-identify your race/ethnicity and gender.</p>
            <p>Please complete the information below which includes the option to choose not to self-identify.</p>
            <p>This form will be kept confidential and separate from the application for employment. Your submission of this information is entirely voluntary and refusal to provide it will not influence our screening or hiring process.</p>
        </div>
            <hr>
            <form class="d-flex">
                <div class="row col-12">
                    <h4 class="text-center">Invitation to Self-Identify</h4>
    
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
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Position Applying For:</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Location/Division:</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">I do not wish to complete the information requested below.</label>
                        <br>
                        <input type="checkbox" name="" id="">
                    </div>
                    <hr>
                    <h5 class="text-center">PLEASE ANSWER THE FOLLOWING QUESTIONS</h5>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">What is your gender?</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="" />
                                <label class="form-check-label" for=""> Male </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="" />
                                <label class="form-check-label" for=""> Female </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label fw-bold">What is your race/ethnicity?</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="race" id="" />
                                <label class="form-check-label" for=""> Hispanic or Latino (Person of Cuban, Mexican, Puerto Rican, South or Central America, or other Spanish culture or origin, regardless of race) </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="race" id="" />
                                <label class="form-check-label" for=""> White (Not Hispanic or Latino - Person having origins in any of the original peoples of Europe, the Middle East, or North Africa) </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="race" id="" />
                                <label class="form-check-label" for=""> Black or African American (Not Hispanic or Latino - Person having originsin any of the black racial groups of Africa) </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="race" id="" />
                                <label class="form-check-label" for=""> Native Hawaiian or Other Pacific Islander (Not Hispanic or Latino - Person having origins in any of the original peoples of Hawaii, Guam, Samoa, or other Pacifc Islands)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="race" id="" />
                                <label class="form-check-label" for=""> Asian (Not Hispanic or Latino - Person having origins in any of the original peoples of the Far East, Southeast Asia, or the Indian subcontinent, including, or example, Cambodia, China, India, Japan, Korea, Malaysia, Pakistan, the Phillipine Islands, Thailand, and Vietnam) </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="race" id="" />
                                <label class="form-check-label" for=""> American Indian or Alaska native (Not Hispanic or Latino - Person having origins in any of the original peoples of North and South America (including Central America), and who maintains tribal affiliation or community attachment) </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="race" id="" />
                                <label class="form-check-label" for=""> 
                                    Two or More Races (Not Hispanic or Latino - All persons who identify with more than one of the above five races) </label>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <label for="city" class="form-label fw-bold">What is your Veteran status? Mark all that apply.</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Not Applicable </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Vietnam Era Veteran </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Armed Forces Service Medal Veteran </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Recently Separated Veteran </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for=""> Other Protected Veteran </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    

                    <p class="fw-bold">Employee's Signature*</p>
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
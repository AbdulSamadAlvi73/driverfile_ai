<!doctype html>
<html lang="en">

<head>
    <title>WA Driving Record Release</title>
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
                <h4 class="text-light p-3">Driving Record Release of Interest</h4>
            </div>
            <p class="mt-3"><b>Employers, prospective employers, volunteer organizations, or their agent</b> can get driving records for an employee, prospective employee, or volunteer when authorized. Use this form to get their authorization.</p>
            <ul class="mx-4">
                <li>Complete the Company section.</li>
                <li>Give this form to your employee, prospective employee, or volunteer to complete their section.</li>
                <li>For audit purposes, keep this completed form in your files for at least five years. Do not mail it to the Department of Licensing.</li>
            </ul>
            <p><b>Sealed juvenile records.</b> Information contained in a driving record related to a sealed juvenile record may not be used for any purpose unless required by federal law. The employee or prospective employee may furnish a copy of the court order sealing the juvenile record to the employer, prospective employer, or their agent.</p>
            <p><b>Company–</b>To be completed by the company or the agent of the company</p>
            
             <form class="d-flex">
                <div class="row col-12 mt-2">
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Company name</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Agent Company Name (if applicable)</label>
                        </div>
                        <div class="mb-3 cxeaddress" class="form-label fw-bold">Company/Agent Address</label>
                        <textarea name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId"></textarea>
                    </div> 
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Authorized Representative Name</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Title</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>Answer the following</p>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Is this company an employer, prospective employer, or volunteer organization of the individual whose driving record is being requested?*</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Yes </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> No </label>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Is the record you are requesting necessary for employment purposes related to driving by the employee or prospective employee as a condition of employment or related to driving by the volunteer at the direction of the volunteer organization?</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Yes </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> No </label>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Do you agree to use the information contained in the record exclusively for this purpose and not divulge it to a third party?*</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Yes </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> No </label>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Do you agree to hold harmless the Washington State Department of Licensing for all matters relating to the release of the requested driving record?*</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> Yes </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> No </label>
                        </div>
                        </div>
                    </div>
                    <p>Certification</p>
                    <p>I certify under penalty of perjury under the laws of the state of Washington that the foregoing is true and correct</p>
                    
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label">Date</label>
                        <input type="date" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p class="">Signature *</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">

                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>
                    <hr>
                    <p><b>Employee, prospective employee, or volunteer</b>–Complete this section and return the form to the company</p>
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label fw-bold">First Name</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label fw-bold">Last Name</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Date of Birth</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">License Number</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>Authorization Form</p>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Employee–for release of my driving record for employment purposes, at my employer’s discretion for the full term of my employment</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> </label>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Prospective employee–for release of my driving record for employment purposes, not to exceed 30 days from date signed</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> </label>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Volunteer–for release of my driving record for a position applied for that requires me driving at the direction of the volunteer organization</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> </label>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Employer, prospective employer, or volunteer organization name</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">Employer agent company name if acting on behalf of the company for employment purposes</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p>Authorization</p>
                    <p>I am an employee, prospective employee, or volunteer of the company named above and I request that a copy of my Washington State driving record be sent to them/their agent.</p>
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label">Date</label>
                        <input type="date" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p class="">Signature *</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">

                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>
                    {{-- <a name="" id="" class="btn btn-danger float-end col-2 m-2" href="#" role="button">SUBMIT</a> --}}
                        
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